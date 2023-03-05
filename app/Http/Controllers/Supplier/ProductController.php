<?php

namespace App\Http\Controllers\Supplier;

use App\category_product;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['products'] = DB::table('products')
            ->join('category_products','products.product_category_id', 'category_products.id')
            ->join('users','products.supplier_id', 'users.id')
            ->select('category_products.title','users.name','products.*')
            ->orderBy('products.id','DESC')
            ->get();
        return view('supplier.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data['categories'] = category_product::all();
        return view('supplier.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_category' => 'required',
            'product_name' => 'required',

            'image' => 'mimes:jpeg,png',
            'catalogues' => 'mimes:jpeg,png,pdf,docx,doc',
            'drawing_file' => 'mimes:jpeg,png,pdf,docx,doc',
        ]);

        $data = array();

        $data['product_category_id'] = $request->product_category;
        $data['supplier_id'] = auth()->user()->id;
        $data['product_name'] = $request->product_name;
        $data['size'] = $request->product_size;
        $data['contact_supplier'] = $request->contact_supplier;
        $data['regular_price'] = $request->regular_price;
        $data['discount_price'] = $request->discount_price;
        $data['supplier_name'] = $request->supplier_name;
        $data['description'] = $request->description;
        $data['location'] = $request->country;
        $data['specification'] = $request->specification;
        $data['product_approval'] = 'Unapproved';

        if ($request->hasFile('image')){

            $path = 'products/image/';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            $data['image'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('catalogues')){

            $path = 'products/catalogues/';
            $img = $request->file('catalogues');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            $data['catalogues'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('drawing_file')){

            $path = 'products/drawing_file/';
            $img = $request->file('drawing_file');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            $data['drawing_file'] = $path .'/'. $file_name;

        }

        $getProduct=[];
            if($request->hasFile('multiple_image'))
            {
                $products = $request->file('multiple_image');

                foreach ( $products as $eachProduct) {
                    $path = 'images/products/multiple_image/';
                    $file_name = rand(0000,9999).'-'.$eachProduct->getClientOriginalName();
                    $eachProduct->move($path,$file_name);
                    //Image::make($eachProduct)->resize(500,370)->save($path.$file_name);

                    $getProduct[] = $file_name;

                }

                $singleProduct = json_encode($getProduct);

                $data['multiple_image'] = $singleProduct;

            }
        DB::table('products')->insert($data);
        session()->flash('success', 'Product Created Successfully');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d_id = decrypt($id);
        $data['categories'] = category_product::all();
        $data['product']= Product::find($d_id);
        return view('supplier.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'product_category' => 'required',
            'product_name' => 'required',
            'image' => 'mimes:jpeg,png',
            'multiple_image' => 'mimes:jpeg,png',
            'catalogues' => 'mimes:jpeg,png,pdf,docx,doc',
            'drawing_file' => 'mimes:jpeg,png,pdf,docx,doc',
        ]);

        $d_id = decrypt($id);
        $product = Product::find($d_id);

        $product->product_category_id = $request->product_category;
        $product->supplier_id = auth()->user()->id;
        $product->product_name = $request->product_name;
        $product->supplier_name = $request->supplier_name;
        $product->contact_supplier = $request->contact_supplier;
        $product->regular_price = $request->regular_price;
        $product->discount_price = $request->discount_price;
        $product->size = $request->product_size;
        $product->description = $request->description;
        $product->location = $request->country;
        $product->specification = $request->specification;
        $product->product_approval = 'Approved';

        if ($request->hasFile('image')){

            $path = 'products/image/';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->image != null && file_exists($product->image)){
                unlink($product->image);
            }

            $data['image'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('catalogues')){

            $path = 'products/catalogues/';
            $img = $request->file('catalogues');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->catalogues != null && file_exists($product->catalogues)){
                unlink($product->catalogues);
            }

            $data['catalogues'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('drawing_file')){

            $path = 'products/drawing_file/';
            $img = $request->file('drawing_file');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->drawing_file != null && file_exists($product->drawing_file)){
                unlink($product->drawing_file);
            }

            $data['drawing_file'] = $path .'/'. $file_name;

        }

        $getProduct=[];
            if($request->hasFile('multiple_image'))
            {
                $products = $request->file('multiple_image');

                foreach ( $products as $eachProduct) {
                    $path = 'images/products/multiple_image/';
                    $file_name = rand(0000,9999).'-'.$eachProduct->getClientOriginalName();
                    $eachProduct->move($path,$file_name);
                    //Image::make($eachProduct)->resize(500,370)->save($path.$file_name);

                    $getProduct[] = $file_name;
                }
                $images = json_decode($product->multiple_image);
                $path = 'images/products/multiple_image/';
                if (isset($images)){
                    foreach ($images as $eachImage){
                        unlink($path . $eachImage);
                    }
                }

                $singleProduct = json_encode($getProduct);

                $product->multiple_image = $singleProduct;

            }

        $product->save();
        session()->flash('success', 'Product Updated Successfully');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $d_id = decrypt($id);

        $product = Product::find($d_id);
        $images = json_decode($product->multiple_image);
                $path = 'images/products/';

                foreach ($images as $eachImage) {
                    unlink($path . $eachImage);
                }

                Product::destroy($d_id);
                session()->flash('success', 'Product Deleted Successfully');
                return redirect()->route('product.index');

    }
}

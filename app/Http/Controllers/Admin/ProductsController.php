<?php

namespace App\Http\Controllers\Admin;

use App\category_product;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function view(){
        $data['countries'] = DB::table('countries')->get();
        $data['categories'] = category_product::all();
        return view('admin.products.create',$data);
    }

    public function index(){
        $data ['products'] = DB::table('products')
            ->join('category_products','products.product_category_id', 'category_products.id')
            ->join('countries','products.location', 'countries.id')
            ->select('category_products.title','countries.country_name','products.*')
            ->orderBy('products.id','DESC')
            ->get();
        return view('admin.products.index',$data);
    }

    public function store(Request $request){
        $request->validate([
            'product_category' => 'required',
            'product_name' => 'required',

            'image' => 'mimes:jpeg,png',
            'catalogues' => 'mimes:jpeg,png,pdf,docx,doc',
            'drawing_file' => 'mimes:jpeg,png,pdf,docx,doc',
        ]);

        $data = array();

        $data['product_category_id'] = $request->product_category;
        $data['supplier_id'] = null;
        $data['product_name'] = $request->product_name;
        $data['supplier_name'] = $request->supplier_name;
        $data['description'] = $request->description;
        $data['location'] = $request->country;
        $data['specification'] = $request->specification;
        $data['product_approval'] = 'Approved';

        if ($request->hasFile('image')){

            $path = 'products/admin/image/';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            $data['image'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('catalogues')){

            $path = 'products/admin/catalogues/';
            $img = $request->file('catalogues');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            $data['catalogues'] = $path .'/'. $file_name;


        }

        if ($request->hasFile('drawing_file')){

            $path = 'products/admin/drawing_file/';
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
                    $path = 'images/admin/products/multiple_image/';
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
        return redirect()->route('admin.products.list');
    }

    public function edit($id){
        $d_id = decrypt($id);
        $data['countries'] = DB::table('countries')->get();
        $data['categories'] = category_product::all();
        $data['product']= Product::find($d_id);
        return view('admin.products.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'product_category' => 'required',
            'product_name' => 'required',
            'image' => 'mimes:jpeg,png',
            'catalogues' => 'mimes:jpeg,png,pdf,docx,doc',
            'drawing_file' => 'mimes:jpeg,png,pdf,docx,doc',
        ]);

        $d_id = decrypt($id);
        $product = Product::find($d_id);

        $product->product_category_id = $request->product_category;
        $product->product_name = $request->product_name;
        $product->supplier_name = $request->supplier_name;
        $product->description = $request->description;
        $product->location = $request->country;
        $product->specification = $request->specification;
        $product->product_approval = 'Approved';

        if ($request->hasFile('image')){

            $path = 'products/admin/image/';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->image != null && file_exists($product->image)){
                unlink($product->image);
            }

            $product->image = $path .'/'. $file_name;


        }

        if ($request->hasFile('catalogues')){

            $path = 'products/admin/catalogues/';
            $img = $request->file('catalogues');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->catalogues != null && file_exists($product->catalogues)){
                unlink($product->catalogues);
            }

            $product->catalogues = $path .'/'. $file_name;


        }

        if ($request->hasFile('drawing_file')){

            $path = 'products/admin/drawing_file/';
            $img = $request->file('drawing_file');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->drawing_file != null && file_exists($product->drawing_file)){
                unlink($product->drawing_file);
            }

            $product->drawing_file = $path .'/'. $file_name;

        }

        $getProduct=[];
            if($request->hasFile('multiple_image'))
            {
                $products = $request->file('multiple_image');

                foreach ( $products as $eachProduct) {
                    $path = 'images/admin/products/multiple_image/';
                    $file_name = rand(0000,9999).'-'.$eachProduct->getClientOriginalName();
                    $eachProduct->move($path,$file_name);
                    //Image::make($eachProduct)->resize(500,370)->save($path.$file_name);

                    $getProduct[] = $file_name;
                }
                $images = json_decode($product->multiple_image);
                $path = 'images/admin/products/multiple_image/';
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
        return redirect()->route('admin.products.list');
    }

    public function delete($id){
        $d_id = decrypt($id);

        Product::destroy($d_id);
        session()->flash('success', 'Product deleted Successfully');
        return redirect()->route('admin.products.list');
    }
}

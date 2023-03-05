<?php

namespace App\Http\Controllers\Front;

use App\category_product;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function view(Request $request){
    if ($request->get('sort')=='latest'){
        $products = Product::orderBy('created_at','desc')
            ->where('product_approval','=','Approved')->paginate(12);
        }
        else{
        $data ['categories'] = category_product::all();
        $products = DB::table('products')->select('id','product_name','supplier_name','image','location')->paginate(12);
        $data ['countries'] = DB::table('countries')->get();
        }
        return view('front.products',$data, compact('products'));
       }

       public function pCategory($id){
            $d_id = decrypt($id);
            $data ['categories'] = category_product::all();
            $data ['countries'] = DB::table('countries')->get();
            $data ['productCategories'] = DB::table('products')
            ->join('category_products','products.product_category_id', 'category_products.id')
            ->select('category_products.title','products.*')
            ->where('products.product_category_id', $d_id)->paginate(12);
            return view('front.categoryProducts',$data);
       }

       public function pLocation($id){
            $d_id = decrypt($id);
            $data ['categories'] = category_product::all();
            $data ['countries'] = DB::table('countries')->get();
            $data ['productLocation'] = DB::table('products')
            ->join('countries','products.location', 'countries.id')
            ->select('countries.country_name','products.*')
            ->where('products.location', $d_id)->paginate(12);
            return view('front.locationProducts',$data);
       }
}



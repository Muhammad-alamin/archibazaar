<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function view($id){
        $d_id = decrypt($id);
        $data['products'] = Product::where('id', $d_id)->first();
        return view('front.productDetails',$data);
       }

       public function catalouges($id){
        $d_id = decrypt($id);
        $data['products'] = Product::where('id', $d_id)->first();
        $filePath = public_path("{$data['products']->catalogues}");
       return response()->download($filePath);
       }

       public function drawing($id){
        $d_id = decrypt($id);
        $data['products'] = Product::where('id', $d_id)->first();
        $filePath = public_path("{$data['products']->drawing_file}");
       return response()->download($filePath);
       }
}

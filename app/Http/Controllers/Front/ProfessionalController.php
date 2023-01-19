<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
   public function view(){
    return view('front.professionals');
   }

   public function category(){
    return view('front.professional_category');
   }

   public function eachCategory(){
    return view('front.professional_eachCategory');
   }

}

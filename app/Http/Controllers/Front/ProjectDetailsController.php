<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function view(){
        return view('front.projectDetails');
       }
}

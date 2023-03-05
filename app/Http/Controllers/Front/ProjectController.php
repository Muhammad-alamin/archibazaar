<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\ProfessionalCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function view(){
        $data ['categories'] = ProfessionalCategory::all();
        $projects = DB::table('projects')
        ->join('professional_categories','projects.professional_id', 'professional_categories.id')
        ->select('professional_categories.category_title','projects.*')->paginate(12);
        $data ['countries'] = DB::table('countries')->get();
        return view('front.projects',$data,compact('projects'));
       }

       public function pCategory($id){
        $d_id = decrypt($id);
        $data ['categories'] = ProfessionalCategory::all();
        $data ['countries'] = DB::table('countries')->get();
        $projects = DB::table('projects')
        ->join('professional_categories','projects.professional_id', 'professional_categories.id')
        ->select('professional_categories.category_title','projects.*')
        ->where('projects.professional_id', $d_id)->paginate(12);
        return view('front.categoryProjects',$data,compact('projects'));
   }

   public function pLocation($id){
        $d_id = decrypt($id);
        $data ['categories'] = ProfessionalCategory::all();
        $data ['countries'] = DB::table('countries')->get();
        $projects = DB::table('projects')
        ->join('professional_categories','projects.professional_id', 'professional_categories.id')
        ->select('professional_categories.category_title','projects.*')
        ->where('projects.location', $d_id)->paginate(12);
        return view('front.locationProjects',$data,compact('projects'));
   }

   public function filter(Request $request){
        dd($request);
   }
}

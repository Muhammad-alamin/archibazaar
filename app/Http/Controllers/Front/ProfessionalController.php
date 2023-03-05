<?php

namespace App\Http\Controllers\Front;

use App\Article;
use App\Http\Controllers\Controller;
use App\Professional;
use App\ProfessionalCategory;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessionalController extends Controller
{
   public function view($id){
    $d_id = decrypt($id);
    $data ['professionals'] = DB::table('professionals')
            ->join('professional_categories','professionals.professional_cat_id', 'professional_categories.id')
            ->select('professional_categories.category_title','professionals.*')
            ->where('professionals.id',$d_id)->first();
    $data ['projects'] = Project::where('professional_id',$data ['professionals']->id)->get();
    $data ['articles'] = Article::where('professional_id',$data ['professionals']->id)->get();
    return view('front.professionals',$data);
   }

   public function category(){
    $data['professionals_cat'] = ProfessionalCategory::all();
    $interior_designers = DB::table('professionals')
            ->join('professional_categories','professionals.professional_cat_id', 'professional_categories.id')
            ->join('countries','professionals.location', 'countries.id')
            ->select('professional_categories.category_title','countries.country_name','professionals.name','professionals.image','professionals.id')
            ->where('professionals.professional_cat_id',1)->get();

            $fit_out_contractors = DB::table('professionals')
            ->join('professional_categories','professionals.professional_cat_id', 'professional_categories.id')
            ->join('countries','professionals.location', 'countries.id')
            ->select('professional_categories.category_title','countries.country_name','professionals.name','professionals.image','professionals.id')
            ->where('professionals.professional_cat_id',2)->get();

            $build_contractors = DB::table('professionals')
            ->join('professional_categories','professionals.professional_cat_id', 'professional_categories.id')
            ->join('countries','professionals.location', 'countries.id')
            ->select('professional_categories.category_title','countries.country_name','professionals.name','professionals.image','professionals.id')
            ->where('professionals.professional_cat_id',3)->get();

    return view('front.professional_category',$data,compact('interior_designers','fit_out_contractors','build_contractors'));
   }

   public function eachCategory($id){
    $category = ProfessionalCategory::where('id',decrypt($id))->first();
    $data ['professionals'] = DB::table('professionals')
            ->join('professional_categories','professionals.professional_cat_id', 'professional_categories.id')
            ->join('countries','professionals.location', 'countries.id')
            ->select('professional_categories.category_title','countries.country_name','professionals.*')
            ->where('professionals.professional_cat_id',$category->id)->paginate(12);
    return view('front.professional_eachCategory',$data, compact('category'));
   }

   public function searchProfessionals(Request $request){
    $data ['professionals'] = DB::table('professionals')
    ->join('professionals_categories.id','professionals.professional_cat_id')
        ->select('professionals_categories.category_title','professionals.*')->get();
        return view('front.allProfessionals',$data);
   }

}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Professional;
use App\ProfessionalCategory;
use App\Project;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class HomeController extends Controller
{
    public function view(){
        $sliders = Slider::all();
        $professional_cat = DB::table('Professional_categories')->limit(5)->get();
        $projects = DB::table('projects')->select('id','company_name','description','thumbnail_image')->limit(5)->get();
        $articles = DB::table('articles')
        ->join('professionals','articles.professional_id', 'professionals.id')
            ->select('professionals.name','articles.*')
            ->limit(5)->get();
        return view('welcome',compact('sliders','professional_cat','projects','articles'));
       }

       public function search(Request $request){

        $append = [];

//        $products = Product::where('product_name', 'LIKE','%'.$searchingData.'%');
        $professionals = Professional::orderBy('id', 'desc');

        if ($request->professional_search != null) {
            $products = $professionals->where(function($query) use($request) {
                return $query->where('name', 'like', '%' . $request->professional_search . '%');
            });
            $append['professional_search'] = $request->professional_search;
        }
//       $searchingData = $request->input('product_search');
       $professionals = $professionals->paginate(12)->appends($append);
        return view('front.allProfessionals', compact('professionals'));
//        return view('front.product_search.view')->with('products',$products);
    }

    public function news(){
        return view('front.news');
    }

    public function events(){
        return view('front.events');
    }
}

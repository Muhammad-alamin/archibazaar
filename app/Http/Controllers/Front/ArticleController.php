<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function view(){
        $data ['articles'] = DB::table('articles')
            ->join('professionals','articles.professional_id', 'professionals.id')
            ->select('professionals.name','articles.*')->paginate(12);
        return view('front.articles',$data);
       }

       public function eachArticles($id){
        $d_id = decrypt($id);
        $data ['articles'] = DB::table('articles')
        ->join('professionals','articles.professional_id', 'professionals.id')
            ->select('professionals.name','articles.*')
            ->where('articles.id',$d_id)->first();
        return view('front.article-details',$data);
       }
}

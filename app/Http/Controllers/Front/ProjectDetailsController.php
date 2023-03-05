<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectDetailsController extends Controller
{
    public function view($id){
        $d_id = decrypt($id);
        $data ['projects'] = DB::table('projects')
            ->join('countries','projects.location', 'countries.id')
            ->select('countries.country_name','projects.*')
            ->where('projects.id', $d_id)->first();
        return view('front.projectDetails',$data);
       }
}

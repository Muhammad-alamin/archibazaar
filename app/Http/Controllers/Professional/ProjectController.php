<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Professional;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['projects'] = Project::where('professional_name',auth()->user()->name)->get();



        return view('professional.project.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data ['countries'] = DB::table('countries')->get();
        $data['professionals'] = Professional::all();
        return view('professional.project.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name'   => 'required',
            'company_name'   => 'required',
            'project_type'   => 'required',
            'description'   => 'required',
            'country'   => 'required',
         ]);

         $project = new Project();


         $project->professional_name = $request->name;
         $project->company_name = $request->company_name;
         $project->project_type = $request->project_type;
         $project->project_name = $request->project_name;
         $project->description = $request->description;
         $project->firm = $request->firm;
         $project->area_size = $request->area_size;
         $project->design_style = $request->design_style;
         $project->architect = $request->architect;
         $project->location = $request->country;
         $project->status = 'Inactive';




         if ($request->hasFile('thumbnail_image')){

             $path = 'images/projects/';
             $img = $request->file('thumbnail_image');
             $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
             $img->move($path,$file_name);
             $project->thumbnail_image = $path .'/'. $file_name;

         }

         $getProduct=[];
            if($request->hasFile('multiple_image'))
            {
                $products = $request->file('multiple_image');

                foreach ( $products as $eachProduct) {
                    $path = 'images/projects/multiple_image/';
                    $file_name = rand(0000,9999).'-'.$eachProduct->getClientOriginalName();
                    $eachProduct->move($path,$file_name);
                    //Image::make($eachProduct)->resize(500,370)->save($path.$file_name);

                    $getProduct[] = $file_name;

                }

                $singleProduct = json_encode($getProduct);

                $project->multiple_image = $singleProduct;

            }

         $project->save();
         session()->flash('success', 'Project Created Successfully');
         return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d_id = decrypt($id);
        $professionals = Professional::all();
        $data['countries'] = DB::table('countries')->get();
        $data['project']= Project::find($d_id);
        return view('professional.project.edit',$data, compact('professionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'project_name'   => 'required',
            'company_name'   => 'required',
            'project_type'   => 'required',
            'description'   => 'required',
            'country'   => 'required',
         ]);
         $d_id = decrypt($id);
        $project = Project::find($d_id);


         $project->professional_name = $request->name;
         $project->company_name = $request->company_name;
         $project->project_type = $request->project_type;
         $project->project_name = $request->project_name;
         $project->description = $request->description;
         $project->firm = $request->firm;
         $project->area_size = $request->area_size;
         $project->design_style = $request->design_style;
         $project->architect = $request->architect;
         $project->location = $request->country;
         $project->status = "Inactive";



        if ($request->hasFile('thumbnail_image')){

            $path = 'images/projects/';
            $img = $request->file('thumbnail_image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);


            if ($project->thumbnail_image != null && file_exists($project->thumbnail_image)){
                unlink($project->thumbnail_image);
            }

            $project->thumbnail_image = $path .'/'. $file_name;



        }

            $getProduct=[];
            if($request->hasFile('multiple_image'))
            {
                $products = $request->file('multiple_image');

                foreach ( $products as $eachProduct) {
                    $path = 'images/projects/multiple_image/';
                    $file_name = rand(0000,9999).'-'.$eachProduct->getClientOriginalName();
                    $eachProduct->move($path,$file_name);
                    //Image::make($eachProduct)->resize(500,370)->save($path.$file_name);

                    $getProduct[] = $file_name;
                }
                $images = json_decode($project->multiple_image);
                $path = 'images/projects/multiple_image/';
                if (isset($images)){
                    foreach ($images as $eachImage){
                        unlink($path . $eachImage);
                    }
                }

                $singleProduct = json_encode($getProduct);

                $project->multiple_image = $singleProduct;

            }

        $project->save();
        session()->flash('success', 'Project Updated Successfully');
         return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $d_id = decrypt($id);

        Project::destroy($d_id);
        session()->flash('success', 'Project deleted Successfully');
        return redirect()->route('project.index');

    }
}

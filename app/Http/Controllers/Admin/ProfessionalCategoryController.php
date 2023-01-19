<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProfessionalCategory;
use Illuminate\Http\Request;

class ProfessionalCategoryController extends Controller
{
    public function view(){
        return view('admin.professionalCategory.create');
    }

    public function index(){
        $data['categories'] = ProfessionalCategory::orderBy('id','DESC')->paginate(5);
        return view('admin.professionalCategory.index' ,$data);
    }

    public function store(Request $request){
        $request->validate([
            'title'   => 'required',
             'image' =>  'mimes:jpeg,png'
         ]);

         $category = new ProfessionalCategory();

         $category->category_title = $request->title;

         if ($request->hasFile('image')){

             $path = 'images/professional/category';
             $img = $request->file('image');
             $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
             $img->move($path,$file_name);
             $category->category_image = $path .'/'. $file_name;

         }


         $category->save();
         session()->flash('success', 'Category Created Successfully');
         return redirect()->route('admin.professional.category.list');
    }

    public function edit($id){
        $d_id = decrypt($id);
        $data['category'] = ProfessionalCategory::find($d_id);
        return view('admin.ProfessionalCategory.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'   => 'required',
             'image' =>  'mimes:jpeg,png'
         ]);
         $d_id = decrypt($id);
        $category = ProfessionalCategory::find($d_id);
        $category->category_title = $request->title;


        if ($request->hasFile('image')){

            $path = 'images/professional/category';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);


            if ($category->category_image != null && file_exists($category->category_image)){
                unlink($category->category_image);
            }

            $category->category_image = $path .'/'. $file_name;



        }

        $category->save();
        session()->flash('success', 'Category Updated Successfully');
         return redirect()->route('admin.professional.category.list');
    }

    public function delete($id){
        $d_id = decrypt($id);

        ProfessionalCategory::destroy($d_id);
        session()->flash('success', 'Category deleted Successfully');
        return redirect()->route('admin.professional.category.list');
    }
}

<?php

namespace App\Http\Controllers;

use App\images;
use App\project;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = project::all();
        $categories= category::all();

        return view('projects.projects',compact('projects','categories'));
    }


    public function create()
    {
        $projects = project::all();
        $categories= category::all();
        return view('projects.create',compact('projects','categories'));
    }


    public function store(Request $request)
    {

        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
        ]);

        $projects= new project();
        $projects->title =$request->title;
        $projects->description =$request->description;
        $projects->project_date =$request->project_date;
        $projects->client =$request->client;
        $projects->cat_id =$request->cat_id;


        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path('/images'),$filename);
            $projects->image=$filename;

        }

        $projects->save();
        return redirect('admin/projects')->with(['Add' => 'Add Project Succesfully ']);
    }


    public function details( $id)
    {
        $projects = project::where('id',$id)->first();
        $category= category::all();

        return view('projects.details',compact('projects','category'  ));

    }


    public function edit($id)
    {
        $projects = project::where('id',$id)->first();
        $categories= category::all();
        return view('projects.edit',compact('projects','categories'));

    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $projects = project::findOrFail($id);
        $imagePath = project::where('id',$id)->first();
        if ($imagePath) {
            unlink('images/'.$imagePath->image);
        }
        $projects->title =$request->title;
        $projects->description =$request->description;
        $projects->client =$request->client;
        $projects->cat_id =$request->cat_id;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path('/images'),$filename);
            if (File::exists($filename)) {
                unlink($filename);
            }
            $projects->image=$filename;
         }
        $projects->save();
        return redirect('admin/projects')->with(['edit' => 'Data updated successfully ']);
    }


    public function destroy($id)
    {
       $projects=  project::where('id',$id)->first()->delete();

        return redirect()->back()->with(['delete' => 'Data deleted successfully ']);


    }
}

<?php

namespace App\Http\Controllers;

use App\features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{

    public function index()
    {
        $features= features::all();
        return view('features.features',compact('features'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'

        ]);

        $features = new features();
        $features->title = $request->title;
        $features->description = $request->description;

        if ($img = $request->file('image')) {
            $name = time() . $img->getClientOriginalName();
            $img->move('images', $name);
            $features->image = $name;
        }

        $features->save();

        return redirect('/features')->with(['Add' => ' Data added succesfully ']);
    }


    public function edit($id)
    {
        $features= features::where('id',$id)->first();
        return view('features.edit',compact('features'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $features = features::findOrFail($id);
        $features->title =$request->title;
        $features->description =$request->description;


        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path('/images'),$filename);
            $features->image=$filename;
//           // dd($filename);
        }



        $features->save();

        return redirect('/admin/features')->with(['edit' => 'Data updated successfully ']);

    }


    public function destroy($id)
    {
        $features = features::find($id)->delete();
        return redirect('/features')->with(['delete' => ' Data deleted succesfully ']);
    }
}

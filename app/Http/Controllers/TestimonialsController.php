<?php

namespace App\Http\Controllers;

use App\testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials= testimonials::all();
        return  view('testimonial.testimonial',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials= testimonials::where('id',$id)->first();


        return view('testimonial.edit',compact('testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'job' => 'required',

        ]);
        $testimonials= new testimonials();
        $testimonials->name =$request->name;
        $testimonials->job =$request->job;
        $testimonials->description =$request->description;



        if ($img = $request->file('image')) {
              $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $img->move('images', $filename);
            $testimonials->image = $filename;
        };


        $testimonials->save();

        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

             'job' => 'required',
             'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $testimonials = testimonials::findOrFail($id);
         $testimonials->name =$request->name;
        $testimonials->job =$request->job;
        $testimonials->description =$request->description;



        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $img->move('images', $filename);
            $testimonials->image = $filename;
        };


        $testimonials->save();



        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = testimonials::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}

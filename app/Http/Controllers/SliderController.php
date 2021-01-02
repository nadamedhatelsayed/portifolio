<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders=slider::all();
        return view('slider.slider',compact('sliders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        slider::create([
            'title'        => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }


    public function show(slider $slider)
    {
        //
    }


    public function edit(slider $slider)
    {
        //
    }


    public function update(Request $request,$id)
    {
        $this->validate($request, [

            'title' => 'required  ',
            'description' => 'required',
        ]);

        $slider = slider::find($id);

        $slider->update([
            'title'        => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }


    public function destroy($id)
    {
        $slider = slider::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}

<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = services::all();
        return view('services.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'description' =>'required'
        ]);

        services::create([
            'title'        => $request->name,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['Add' => ' has been added succesfully ']);
    }


    public function update(Request $request, services $services)
    {
        $id = $request->id;

        $this->validate($request, [

            'name' => 'required|max:255 ,'.$id,
            'description' => 'required',
        ]);

        $services = services::find($id);
        $services->update([
            'title' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        services::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}

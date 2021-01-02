<?php

namespace App\Http\Controllers;

use App\package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index()
    {
        $packages= package::all();
        return  view('package.package',compact('packages'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|max:255|unique:packages,title',
            'price' => 'required|numeric',
        ]);

        package::create([
            'title'        => $request->title,
            'price'        => $request->price,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }



    public function edit(package $package)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'price' => 'required|numeric',

         ]);

         $package = package::find($id);

        $package->update([
            'title'        => $request->title,
            'price'        => $request->price,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }


    public function destroy($id)
    {
        $package = package::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}

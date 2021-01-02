<?php

namespace App\Http\Controllers;

use App\images;
use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Psr7\str;

class ImagesController extends Controller
{

    public function index()
    {

        $images = images::all();
        $projects = project::all();
        return view('images.images', compact('images', 'projects'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_id' => 'required'

        ]);

        $images = new images();
        $images->project_id = $request->project_id;
        if ($img = $request->file('image')) {
            $name = time() . $img->getClientOriginalName();
            $img->move('images', $name);
            $images->image = $name;
        }

        $images->save();

        return redirect('admin/img')->with(['Add' => ' Data added succesfully ']);
    }

    public function image_store(Request $request)
    {
        $images = new images();
        $images->project_id = $request->project_id;
        if ($img = $request->file('image')) {
            $name = time() . $img->getClientOriginalName();
            $img->move('images', $name);
            $images->image = $name;
        }

        $images->save();

        return redirect('admin/img')->with(['Add' => ' Data added succesfully ']);
    }

    public function show($id)
    {
        $projects = project::find($id);
        $image = images::where('project_id', $id)->first();
        $images = images::where('project_id', $id)->get();
        return view('images.view', compact('images', 'image', 'projects'));
    }

    public function edit($id)
    {
        $images = images::find($id);
        return view('images.edit', compact('images'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images = images::findOrFail($id);
        $imagePath = images::where('id', $id)->first();

        if ($imagePath) {
            unlink('images/' . $imagePath->image);
        }

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);
            if (File::exists($filename)) {
                unlink($filename);
            }
            $images->image = $filename;
        }
        $images->save();
        return redirect('admin/img')->with(['Add' => ' Data added succesfully ']);
    }

    public function destroy($id)
    {
        $images = images::find($id)->delete();
        return redirect('admin/img')->with(['delete' => ' Data deleted succesfully ']);

    }

}

<?php

namespace App\Http\Controllers;

use App\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function index()
    {
        $videos =video::all();
        return  view('video.video',compact('videos'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'title1' => 'required',
            'title2' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required'

        ]);

        $video = new video();
        $video->title1 = $request->title1;
        $video->title2 = $request->title2;
        $video->description1 = $request->description1;
        $video->video = $request->video;
        $video->description2 = $request->description2;

        if ($img = $request->file('image')) {
            $name = time() . $img->getClientOriginalName();
            $img->move('images', $name);
            $video->image = $name;
        }

        $video->save();

        return redirect('admin/video')->with(['Add' => ' Data added succesfully ']);
    }




    public function update(Request $request,$id)
    {

        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $video = video::findOrFail($id);
        $video->title1 =$request->title1;
        $video->description1 =$request->description1;
        $video->title2 =$request->title2;
        $video->description2 =$request->description2;
        $video->video =$request->video;

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);

            $video->image = $filename;
        }
        $video->save();
        return redirect('admin/video')->with(['Add' => ' Data added succesfully ']);
    }


    public function destroy($id)
    {
        $video = video::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}

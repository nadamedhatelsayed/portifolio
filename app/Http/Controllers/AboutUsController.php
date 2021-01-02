<?php

namespace App\Http\Controllers;
use App\aboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{

    public function index()
    {   $aboutus=aboutUs::get();
         return view('about.about',compact('aboutus'));
    }


    public function edit($id)
    {

        $aboutus= aboutUs::where('id',$id)->first();
         return view('about.edit',compact('aboutus'));
    }




    public function update( Request $request ,$id)
    {
        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mission' => 'required',
            'plan' => 'required',
            'vision' => 'required',
            'care' => 'required',
            'description' => 'required',
        ]);
        $about = aboutUs::findOrFail($id);
//        $imagePath = aboutUs::where('id', $id)->first();
//        if ($imagePath) {
//            unlink('images/' . $imagePath->image);
//        }
        $about->email =$request->email;
        $about->phone =$request->phone;
        $about->address1 =$request->address1;
        $about->address2 =$request->address2;
        $about->address3 =$request->address3;
        $about->mission =$request->mission;
        $about->plan =$request->plan;
        $about->vision =$request->vision;
        $about->care =$request->care;
        $about->description =$request->description;

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);
//            if (File::exists($filename)) {
//                unlink($filename);
//            }

            $about->image = $filename;
        }
        $about->save();

        return redirect('admin/about')->with(['edit' => 'Data updated successfully ']);

    }

    public function destroy(aboutUs $aboutUs)
    {
        //
    }
}

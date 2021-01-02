<?php

namespace App\Http\Controllers;

use App\aboutUs;
use App\blog;
use App\category;
use App\features;
use App\images;
use App\numbers;
use App\package;
use App\project;
use App\requests;
use App\services;
use App\slider;
use App\team;
use App\testimonials;
use App\video;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){
        $sliders=slider::all();
        $services=services::all();
        $videos= video::all();
        $features= features::all();
        return view('master.index',compact('sliders','services','videos','features'));
    }

    public function about(){
        $numbers=numbers::all();
        $testimonials =testimonials::all();
        $aboutus=aboutUs::all();

        return view('master.about',compact('numbers','testimonials','aboutus'));
    }
    public function services(){
        $services=services::all();
        $videos= video::all();
        $about =aboutUs::all();
        $packages=package::all();
        return view('master.services',compact('services','videos','about','packages'));
    }
    public function portfolio(){
        $projects= project::all();
        $categories= category::all();
        //$projects = project::where()
        $images = images::all();
      //  $imagess = images::where('project_id', $id)->get();

        return view('master.portfolio',compact('projects','images','categories' ));
    }
    public function team(){
        $teams =team::all();
        return view('master.team',compact('teams'));
    }
    public function blog(){
        $blogs=blog::all();
        return view('master.blog',compact('blogs'));
    }
    public function contactUs(){
        $requests =requests::all();
        $about =aboutUs::all();


        return view('master.contactUs',compact('requests','about'));

    }

}

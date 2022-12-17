<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index',[
            'offer_courses' => Course::where('offer_status',1)->orderBy('id','desc')->take(3)->get(),
            'recent_courses' => Course::where('status',1)->orderBy('id','desc')->take(8)->get(),
        ]);
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function categoryTraining($id)
    {
        return view('website.category.index',['courses'=>Course::where('category_id',$id)->orderBy('id','desc')->get()]);
    }

    public function allTraining()
    {
        return view('website.training.index',['courses'=>Course::where('status',1)->orderBy('id','desc')->simplepaginate(4)]);
    }

    public function trainingDetail($id)
    {
        return view('website.training.detail',['course'=>Course::find($id)]);
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function loginRegistration()
    {
        return view('website.auth.index');
    }
}

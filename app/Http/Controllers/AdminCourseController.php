<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public $course;

    public function index()
    {
        return view('admin.course.index',['courses'=>Course::orderBy('id','desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.course.detail',['course'=>Course::find($id)]);
    }

    public function status($id)
    {
        return redirect()->back()->with('message',Course::updateCourseStatus($id));
    }

    public function offerStatus($id)
    {
        return view('admin.course.offer-status',['course'=>Course::find($id)]);
    }

    public function offerCreate(Request $request, $id)
    {
        Course::offerCreate($request,$id);
        return redirect()->back()->with('message','Offer create successfully');
    }

    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect()->back()->with('message_delete','Course delete successfully');
    }
}

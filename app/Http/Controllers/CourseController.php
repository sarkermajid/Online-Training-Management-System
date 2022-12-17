<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use Session;

class CourseController extends Controller
{
    public $course,$categories;
    public function index()
    {
        return view('teacher.course.index',['categories'=>Category::where('status',1)->get()]);
    }

    public function create(Request $request)
    {
        Course::addCourse($request);
        return redirect()->back()->with('message','Course create successfully');
    }

    public function manage()
    {
        return view('teacher.course.manage',['courses'=>Course::where('teacher_id',Session::get('teacher_id'))->orderBy('id','desc')->get()]);
    }

    public function edit($id)
    {
        $this->categories = Category::where('status',1)->get();
        $this->course = Course::find($id);
        return view('teacher.course.edit',['course'=>$this->course,'categories'=>$this->categories]);
    }

    public function update(Request $request, $id)
    {
        Course::updateCourse($request,$id);
        return redirect()->back()->with('message','Course update successfully');
    }

    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect()->back()->with('message_delete','Course delete successfully');
    }


}

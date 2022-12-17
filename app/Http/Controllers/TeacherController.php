<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teacher,$teachers;

    public function index()
    {
        return view('admin.teacher.index');
    }

    public function create(Request $request)
    {
        Teacher::addTeacher($request);
        return redirect()->back()->with('message','Teacher added successfully');
    }

    public function manage()
    {
        return view('admin.teacher.manage',['teachers'=>Teacher::orderBy('id','desc')->get()]);
    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public function update(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect()->back()->with('message','Teacher update successfully');
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect()->back()->with('message','Teacher delete successfully');
    }
}

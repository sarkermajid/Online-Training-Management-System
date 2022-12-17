<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index($id)
    {
        return view('website.enroll.index',['id'=>$id]);
    }

    public function newEnroll(Request $request,$id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'mobile'        => 'required',
            'payment_type'  => 'required',
        ]);
    }
}

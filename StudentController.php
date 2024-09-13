<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewstudentadd()
    {
        return view("studentadd");
    }




    public function storestudent(Request $request)
    {
        Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "roll" => $request->roll,
            "reg" => $request->erg,
        ]);

        return redirect()->back();


    }








}

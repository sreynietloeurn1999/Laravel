<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Student;

class StuController extends Controller
{
   
   public function getStudentData() {
        $student = \App\Student::all();
        // dd( $student);
        return view('studentData',compact('student'));

    }
}

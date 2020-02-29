<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StuController extends Controller
{
   
   public function getStudentData() {
        $student = Student::all();
         dd( $student);
        return view('Student.studentData',compact('student'));

    }

    public function showFormStudent() {
        return view('Student.studentForm');
    }

    public function addStudent(Request $request) {
        $request -> validate([
            'fname' => 'required',
            'lname' => 'required'
        ]);
        $student = new Student;
        $student-> Firstname=$request->get('fname');
        $student-> Lastname=$request->get('lname');
        $student-> Age=$request->get('age');

        $student->save();
        return redirect('data');
    }


    public function showEditForm($id) {

        //   dd($id);
          $student = Student::find($id);
        //   dd($student);
          return view("Student.updateForm",compact('student'));
      
    }

    public function update($id,Request $request) {
        $student = Student::find($id);
        $student ->firstName = $request -> fname;
        $student ->lastName = $request -> lname;
        $student ->Age = $request -> age;
        $student -> save();
        return redirect('data');

    }
      

    function delete($id) {
        $student = Student::find($id);
        $student -> delete();
        return redirect('studentData');
        
    }

   
    

    


}

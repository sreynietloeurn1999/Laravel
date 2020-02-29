<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class StudentsController extends Controller
{
    public $students = array('Preab','Sovath','Reach','Rith','Kanha');
    function showStudent() {
        return view('student')-> with('students',$this->students);
    }

    function searchStudent($name){
        $result = $name."not found";
       foreach($this-> $students as $student) {
           if($student == $name) {
               $result =  $name."is in the list";
               break;
           }else {
               $result = $name."not found";
           }
       }
        return $result;
    }

    
}

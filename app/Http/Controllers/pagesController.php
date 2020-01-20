<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    function listCustomer() {
        $customer = array('0'=>array('id'=>1,'name'=>'Chandaraty','email'=>'chandaraty@example.org'),
        '1'=>array('id'=>2,'name'=>'Maly','email'=>'maly@example.org'),
        '2'=>array('id'=>3,'name'=>'Samphas','email'=>'samphas@example.org'),
        '3'=>array('id'=>4,'name'=>'Donat','email'=>'donat@example.org'),
        
    );
    return view('customer',compact('customer'));
    }
}

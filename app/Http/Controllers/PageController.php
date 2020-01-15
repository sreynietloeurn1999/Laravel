<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

public function showCustomer() {
    $text = "Hello world";
    $customer = array("Chandaraty","Maly","Samphas","Donat");
    return view('pages.customer',compact('customer','text'));
}

    public function welcome() {
        return view('welcome');
    }
public function action() {
   $action = "Action";
    return view('pages.action',compact('action'));
}
public function about() {
    $about = "about";
    return view('pages.about',compact('about'));
}

public function join() {
    $join = "Join";
    return view('pages.join',compact('join'));
}
public function news() {
    $news = "News";
    return view('pages.news',compact('news'));
}
public function contact() {
    $contact = "Contact";
    return view('pages.contact',compact('contact'));
}

    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('frontend.pages.homepage');
    }
    public function appointment(){
        return view('frontend.pages.appointment');
    }
    public function contactUs(){
        return view('frontend.pages.contact');
    }
    public function aboutUS(){
        return view('frontend.pages.aboutus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.services.index');
    }
    public function servicesDetail(){
        return view('frontend.services.detail');
    }
    public function blogs(){
        return view('frontend.blog.index');
    }
    public function programs(){
        return view('frontend.programs');
    }
    public function contact(){
        return view('frontend.contact');
    }
}

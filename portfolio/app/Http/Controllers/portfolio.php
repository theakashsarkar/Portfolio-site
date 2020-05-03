<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolio extends Controller
{
    //function
    public function index(){
        return view('frontEnd.Home.home');
    }
    public function about(){
        return view('frontEnd.About.about');
    }
    public function service(){
        return view('frontEnd.Service.service');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
}

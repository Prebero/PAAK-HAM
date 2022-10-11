<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('frontPage.index');
    }

    public function about(){
        return view('frontPage.about');
    }
    public function contacts(){
        return view('frontPage.contacts');
    }
    public function news(){
        return view('frontPage.news');
    }
    public function home(){
        return view('frontPage.home');
    }
    public function services(){
        return view('frontPage.services');
    }






}

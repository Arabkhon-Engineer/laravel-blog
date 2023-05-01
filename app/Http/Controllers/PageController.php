<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('main');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function projects(){
        return view('projects');
    }
    public function single(){
        return view('single');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function personal(){
        return view('contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){

        $title='welcome to laravel';
        return view('pages.index')-> with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }


   
}

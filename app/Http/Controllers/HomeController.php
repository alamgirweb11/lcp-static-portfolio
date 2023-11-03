<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
          return view('home');
    }

    public function projectDetails(){
         return view('pages.project_details');
    }
}

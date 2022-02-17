<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function cv(){ 
      return view('cv');
    }
    public function ic(){
      return view('ic');
    }
    public function pe(){
      return view('pe');
    }
    public function ts(){
      return view('ts');
    }
}

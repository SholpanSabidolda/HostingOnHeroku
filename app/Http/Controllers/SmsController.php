<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    //
    public function index(){
    	return view('index');
    }
    public function Ourachievements(){
       return view('Ourachievements');
    }
    public function contact(){
      return view('contact');
    }
     public function Payment(){
      return view('Payment');
    }
      public function Products(){
      return view('Products');
    }
}

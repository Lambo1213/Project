<?php 
namespace App\Http\Controllers;

use illuminate\Http\Request;

 class HomeController extends Controller
 {
     //create a new controller instance return void
     public function __contruct()
     {
        $this->middleware('auth');
     }

     //show the aplication dashboard
     // @return \illuminate\Http\Response
     public function index()
     {
         return view('home');
     }
 }
 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index () {
        return view('home');    
    }
    function listing(){
    	return view('single-listing');
    }
    function booking(){
    	return view('booking');
    }
    function checkout(){
    	return view('checkout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages;

class HomeController extends Controller
{
	function index () {
    		$get_packages = Packages::all()->where('status', 1);
        	return view('home')->with('packages', $get_packages);;    
    	}
    	function resotPreview($slug){
    		$package = Packages::where('slug', $slug)->firstOrFail();
    		return view('singleResort')->with('package', $package);
    	}
    	function booking(){
    		// echo 'Select Your Preferred Travel Dates';
    		return view('booking');
    	}
}

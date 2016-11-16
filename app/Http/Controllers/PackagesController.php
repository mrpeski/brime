<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Package;

class PackagesController extends Controller
{
    		
    public function display(Package $package, $id) {
    	$package = $package->findorFail($id);
    	return view('packages.single')->with('node', $package);
    }


    public function book(Package $package, $id) {
    	return view('packages.book');
    }
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Package;

class PagesController extends Controller
{

    public function index(Package $packages) {
        $selected = $packages->all()->take('12');
        // return $selected->photos();
        return view('pages.index')->with('listing', $selected);
    }
    
    		
    public function visa() {
    	return view('pages.visa');
    }


    public function enquiry() {
    	return view('pages.contact');
    }


    public function postEnquiry() {
        return "working!";
    }
    

    public function insurance() {
    	return view('pages.insurance');
    }
    

    public function staatic(\App\Page $page, $id) {
        $node = $page->findorFail($id);
        return view('pages.static')->with('page', $node);
    }
    

    public function getFlights() {
        return view('pages.fly');
    }


    public function getHotels() {
        return view('pages.hotels');
    }
    
    
    
}

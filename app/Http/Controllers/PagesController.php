<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    		
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
    
    
}

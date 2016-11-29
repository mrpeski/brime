<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    		
    public function index() {
    	$users = \App\User::all();
    	return view('control.users')->with('users', $users);
    }
    
}

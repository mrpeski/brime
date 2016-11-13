<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
	public function index(\App\Staff $member) {
		$staff = $member->all();
		return view('control.staff')->with('staff', $staff);
	}
}

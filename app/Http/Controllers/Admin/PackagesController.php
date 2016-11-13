<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Package;
use App\PackagesPhoto;

class PackagesController extends Controller
{

	public function index(Package $packages) {
		$packages = $packages->all();
		return view('control.package')->with('packages', $packages);
	}
	
    public function show(Package $packages, $id)
    {
		return view('control.package_edit');
	}

	public function create() 
	{
		return view('control.package_create');
	}

	public function edit($id) 
	{
		$package = \App\Package::findorfail($id);
		return view('control.package_edit')->with('package', $package);
	}

	public function update(Request $request, $id) 
	{
		$page = \App\Package::findorfail($id);
		$page->title = $request->title;
		$page->content = $request->content;
		$page->save();
		return redirect('control/pages');
	}

	public function store( Request $request ) 
	{
		\App\Package::create($request->all());
		return redirect('control/pages');
	}

	public function addPhotos(Request $request, $id) {

		$this->validate($request, [
			'file' => 'required|mimes:jpg,jpeg,png,bmp'
		]);

		$photo = PackagesPhoto::fromForm($request->file('file'));
		
		$package = \App\Package::find($id);
		$package->addPhoto($photo);

		return 'Done';
	}
	
}

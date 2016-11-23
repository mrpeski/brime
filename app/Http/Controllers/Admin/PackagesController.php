<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Package;
use App\PackagesPhoto;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class PackagesController extends Controller
{

	public function index(Package $packages) {
		$packages = $packages->latest()->get();
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
		$package = \App\Package::findorfail($id);
		$new = $request->all();
		$package->update($new);
		return redirect('control/packages');
	}

	public function store( Request $request ) 
	{
		// dd($request->all());
		\App\Package::create($request->all());
		return redirect('control/packages');
	}

	public function addPhotos(Request $request, $id) {

		$this->validate($request, [
			'file' => 'required|mimes:jpg,jpeg,png,bmp'
		]);

		$photo = $this->makePhoto( $request->file('file') );
		
		$package = \App\Package::find($id);
		$package->addPhoto($photo);

		$package->setAttachmentPath($photo);

		return 'Done';
	}
	
	protected function makePhoto(UploadedFile $file) {
		return PackagesPhoto::named($file->getClientOriginalName())
				->store($file);
	}
}

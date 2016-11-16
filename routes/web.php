<?php


use App\Page;

Route::get('/', 'PagesController@index');


Route::get('visa-assistance', [ 'as' => 'front_visa', 'uses' => 'PagesController@visa']);
Route::get('insurance', [ 'as' => 'front_insurance', 'uses' => 'PagesController@insurance']);
Route::get('enquiry', [ 'as' => 'front_enquiry', 'uses' => 'PagesController@enquiry']);
Route::post('enquiry', [ 'as' => 'post_enquiry', 'uses' => 'PagesController@postEnquiry']);

Route::get('/pages/{id}', [ 'as' => 'static', 'uses' => 'PagesController@staatic']);

Route::get('/packages/{id}', [ 'as' => 'single', 'uses' => 'PackagesController@display']);

Route::post('/packages/{id}', [ 'as' => 'single_post', 'uses' => 'PackagesController@book']);



// Route::resource('test', 'TestController');

Route::group(['prefix' => 'control'], function() {
	
	Route::get('pages', [ 'as' => 'page_control', 'uses' => function(Page $pages){
		$pages = $pages->all();
		return view('control.page')->with('pages', $pages);
	}]);	
	Route::get('pages/create', [ 'as' => 'page_create', 'uses' => 'Admin\PagesController@create']);
	Route::post('pages/create', [ 'as' => 'page_store', 'uses' => 'Admin\PagesController@store']);
	
	Route::delete('pages/{pid}', [ 'as' => 'page_destroy', 'uses' => 'Admin\PagesController@destroy']);
	Route::get('pages/{pid}', [ 'as' => 'page_delete', 'uses' => 'Admin\PagesController@delete']);
	
	Route::get('pages/{pid}/edit', [ 'as' => 'page_edit', 'uses' => 'Admin\PagesController@edit']);
	Route::patch('pages/{pid}/edit', [ 'as' => 'page_update', 'uses' => 'Admin\PagesController@update']);
	

	Route::get('packages', [ 'as' => 'package_control', 'uses' => 'Admin\PackagesController@index']);
	Route::get('packages/create', [ 'as' => 'package_create', 'uses' => 'Admin\PackagesController@create']);
	Route::post('pacckages/create', [ 'as' => 'package_store', 'uses' => 'Admin\PackagesController@store']);
	Route::get('packages/{pid}/edit', [ 'as' => 'package_edit', 'uses' => 'Admin\PackagesController@edit']);
	Route::patch('packages/{pid}/edit', [ 'as' => 'package_update', 'uses' => 'Admin\PackagesController@update']);

	Route::post('packages/{id}/photos', [ 'as' => 'package_photos', 'uses' => 'Admin\PackagesController@addPhotos']);
	
	Route::get('staff', [ 'as' => 'staff_control', 'uses' => 'Admin\StaffController@index']);
	Route::get('staff/create', [ 'as' => 'staff_create', 'uses' => 'Admin\StaffController@create']);
	Route::post('staff/create', [ 'as' => 'staff_store', 'uses' => 'Admin\StaffController@store']);
	Route::get('staff/{sid}/edit', [ 'as' => 'staff_edit', 'uses' => 'Admin\StaffController@edit']);
	Route::patch('staff/{sid}/edit', [ 'as' => 'staff_update', 'uses' => 'Admin\StaffController@update']);

});


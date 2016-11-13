<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show(Page $pages, $pid)
    {
		return view('control.page_edit');
	}


	public function create() 
	{
		return view('control.page_create');
	}

	public function edit($id) 
	{
		$page = \App\Page::findorfail($id);
		return view('control.page_edit')->with('page', $page);
	}

	public function update(PageRequest $request, $id) 
	{
		$page = \App\Page::findorfail($id);
		$page->title = $request->title;
		$page->content = $request->content;
		$page->update();
		return redirect('control/pages');
	}


	public function store( PageRequest $request ) 
	{
		\App\Page::create($request->all());
		return redirect('control/pages');
	}
	
	
    public function delete(\App\Page $page, $pid) {
        $node = $page->findorFail($pid);
        return view('control.delete')->with('page', $node);
    }
    

    public function destroy(\App\Page $page, $pid) {
        $node = $page->findorFail($pid);
        $pageTitle = $page->title;
        $node->delete();
        return redirect('control/pages')->with('message', 'Page Succesfully Deleted');
    }

}

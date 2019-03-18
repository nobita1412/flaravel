<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContentCategoryModel;
use Illuminate\Support\Facades\DB;

class ContentCategoryController extends Controller
{
    //
    public function index(){

    	//$items = ContentCategoryModel::all();
    	$items = DB::table('content_category')->paginate(5);
    	$data = array();
    	$data['item'] = $items;
		return view('admin.content.content.category.index', $data);
    }

    public function create(){
    	$data = array();
		return view('admin.content.content.category.submit', $data);
    }

    public function edit($id){
    	$items = ContentCategoryModel::find($id);
    	$data = array();
    	$data['item'] = $items;
		return view('admin.content.content.category.edit', $data);
    }

    public function delete($id){
    	$data = array();
    	$items = ContentCategoryModel::find($id);
    	$data['item'] = $items;
		return view('admin.content.content.category.delete', $data);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'intro' => 'required',
            'desc' => 'required'
        ]);

    	$input = $request->all();

    	$item = new ContentCategoryModel();

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];

    	$item->save();

    	return redirect('/admin/content/category');
    }

    public function update(Request $request, $id){
         $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'intro' => 'required',
            'desc' => 'required'
        ]);
         
    	$input = $request->all();

    	$item = ContentCategoryModel::find($id);

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];

    	$item->save();

    	return redirect('/admin/content/category');
    }

    public function destroy($id){
    	$item = ContentCategoryModel::find($id);
    	$item->delete();
    	return redirect('/admin/content/category');
    }
}

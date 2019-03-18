<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContentCategoryModel;
use App\Model\Admin\ContentPostModel;
use Illuminate\Support\Facades\DB;

class ContentPostController extends Controller
{
    //
    public function index(){

    	//$items = ContentPostModel::all();
    	$items = DB::table('content_post')->paginate(5);
    	$data = array();
    	$data['posts'] = $items;
		return view('admin.content.content.post.index', $data);
    }

    public function create(){
    	$data = array();
    	$cats = ContentCategoryModel::all();
    	$data['cats'] = $cats;
		return view('admin.content.content.post.submit', $data);
    }

    public function edit($id){
    	$items = ContentPostModel::find($id);
        $data = array();
        $cats = ContentCategoryModel::all();
        $data['cats'] = $cats;
    	$data['posts'] = $items;
		return view('admin.content.content.post.edit', $data);
    }

    public function delete($id){
    	$data = array();
    	$items = ContentPostModel::find($id);
    	$data['post'] = $items;
		return view('admin.content.content.post.delete', $data);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'author_id' => 'required|numeric',
            'intro' => 'required',
            'desc' => 'required',
            'view' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);

    	$input = $request->all();

    	$item = new ContentPostModel();

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];
    	$item->author_id = $input['author_id'];
    	$item->view = $input['view'];
    	$item->category_id = $input['category_id'];

    	$item->save();

    	return redirect('/admin/content/post');
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'author_id' => 'required|numeric',
            'intro' => 'required',
            'desc' => 'required',
            'view' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);

    	$input = $request->all();

    	$item = ContentPostModel::find($id);

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];
    	$item->author_id = $input['author_id'];
    	$item->view = $input['view'];
    	$item->category_id = $input['category_id'];

    	$item->save();

    	return redirect('/admin/content/post');
    }

    public function destroy($id){
    	$item = ContentPostModel::find($id);
    	$item->delete();
    	return redirect('/admin/content/post');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ShopProductModel;
use App\Model\Admin\ShopCategoryModel;
use Illuminate\Support\Facades\DB;

class ShopProductController extends Controller
{
    public function index(){

    	//$items = ShopCategoryModel::all();
    	$items = DB::table('shop_product')->paginate(5);
    	$data = array();
    	$data['products'] = $items;
		return view('admin.content.shop.product.index', $data);
    }

    public function create(){
    	$data = array();
    	$cats = ShopCategoryModel::all();
    	$data['cats'] = $cats;
		return view('admin.content.shop.product.submit', $data);
    }

    public function edit($id){
    	$items = ShopProductModel::find($id);
        $data = array();
        $cats = ShopCategoryModel::all();
        $data['cats'] = $cats;
    	$data['products'] = $items;
		return view('admin.content.shop.product.edit', $data);
    }

    public function delete($id){
    	$data = array();
    	$items = ShopProductModel::find($id);
    	$data['products'] = $items;
		return view('admin.content.shop.product.delete', $data);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
            'stock' => 'required|numeric',
            'intro' => 'required',
            'desc' => 'required',
            'category_id' => 'required|numeric'
        ]);

    	$input = $request->all();

    	$item = new ShopProductModel();

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];
    	$item->priceCore = $input['priceCore'];
    	$item->priceSale = $input['priceSale'];
    	$item->stock = $input['stock'];
    	$item->category_id = $input['category_id'];

    	$item->save();

    	return redirect('/admin/shop/product');
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'image' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
            'stock' => 'required|numeric',
            'intro' => 'required',
            'desc' => 'required',
            'category_id' => 'required|numeric'
        ]);

    	$input = $request->all();

    	$item = ShopProductModel::find($id);

    	$item->name = $input['name'];
    	$item->slug = $input['slug'];
    	$item->image = $input['image'];
    	$item->intro = $input['intro'];
    	$item->desc = $input['desc'];
    	$item->priceCore = $input['priceCore'];
    	$item->priceSale = $input['priceSale'];
    	$item->stock = $input['stock'];
    	$item->category_id = $input['category_id'];

    	$item->save();

    	return redirect('/admin/shop/product');
    }

    public function destroy($id){
    	$item = ShopProductModel::find($id);
    	$item->delete();
    	return redirect('/admin/shop/product');
    }
}

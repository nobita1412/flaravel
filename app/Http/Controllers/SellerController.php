<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SellerModel;

class SellerController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth:seller')->only('index');
    }
    public function index() {
    	return view('seller.dashboard');
    }
    public function create() {
    	return view('seller.auth.register');
    }

    public function store(Request $request) {
    	$this->validate($request, array(
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required'
    	));

    	$sellerModel = new SellerModel();
    	$sellerModel->name = $request->name;
    	$sellerModel->email = $request->email;
    	$sellerModel->password = bcrypt($request->password);

    	$sellerModel->save();

    	return redirect()->route('seller.auth.login');
    }
}

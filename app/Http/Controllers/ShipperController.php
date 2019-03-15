<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ShipperModel;

class ShipperController extends Controller
{
    //
     public function __construct() {
        $this->middleware('auth:shipper')->only('index');
    }
    public function index() {
    	return view('shipper.dashboard');
    }
    public function create() {
    	return view('shipper.auth.register');
    }

    public function store(Request $request) {
    	$this->validate($request, array(
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required'
    	));

    	$shipperModel = new ShipperModel();
    	$shipperModel->name = $request->name;
    	$shipperModel->email = $request->email;
    	$shipperModel->password = bcrypt($request->password);

    	$shipperModel->save();

    	return redirect()->route('shipper.auth.login');
    }
}

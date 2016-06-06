<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Truck_Category;

class AdminController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index()
    {
    	return view("admin.dashboard");
    }
    public function viewTrucks()
    {
    	return view("admin.list_trucks");
    }
    public function viewTruckEntry()
    {
        $categories = Truck_Category::where('status' , 1)->get();
        return view('admin.truck_entry')->with(compact('categories'));
    }
    public function postTruckEntry(Request $request)
    {
        print_r($request->all());

    }
}

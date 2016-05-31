<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use File;
use Response;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      	return view('main.home');
    }

    public function viewContactUs()
    {
        return view('main.contact');
    }
    public function viewAboutUs()
    {
        return view('main.about');
    }
    public function viewAllTrucks($slug)
    {
        //code for displaying uploads in storage
        $path = storage_path('uploads\van.jpg');
        // $file = File::get($path);
        // $type = File::mimeType($path);
        // $response = Response::make($file, 200);
        // $response->header("Content-Type", $type);
        // return $response;
        
        return view('main.trucks')->with(compact('path'));
    }
    public function viewTruck($id, $post_name)
    {
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
        
    } 
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
    public function test()
    {
        return view('test');
    }
    public function postTest(Request $request)
    {   
        $file = $request->file('fileToUpload');
        $rules = ['fileToUpload' => 'mimes:jpg,jpeg,png|between:1,3000' ];
        $this->validate($request, $rules);
     
        $path = storage_path()."\uploads";
         
        $filename = $file->getClientOriginalName();
        $type = $file->getMimeType();
        if ($request->hasFile('fileToUpload')) 
        {
            $file->move($path , $filename);
            return redirect('/test')->with('msg' , 'file uploaded');
        }
        else
        {
            return redirect('/test')->with('msg' , 'file not uploaded');
        }
    }
}

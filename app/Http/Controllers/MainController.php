<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Truck;
use App\Truck_Category;
use DB;

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
        if($slug == 'all-trucks')
        {
            $title = "ALL TRUCKS";
            $trucks = Truck::where('status', 1)->get();
        }
        else
        {
            $trucks = DB::table('trucks')
                ->join('truck_category', 'trucks.truck_category_id', '=', 'truck_category.truck_category_id')
                ->select('trucks.*', 'truck_category.slug', 'truck_category.description')
                ->where('truck_category.slug', '=', $slug)
                ->get();

            $description = Truck_Category::where('slug' , $slug)->first();
            $title = $description->description;
        }
         return view('main.trucks')->with(compact('trucks', 'title'));
    }
    public function viewTruck($id)
    {
        $trucks = Truck::where('truck_id', $id)
                        ->where('status', 1)
                        ->first();
        return view('main.single')->with(compact('trucks'));
        
    }
    public function test()
    {
        return view('test');
    }
    public function postTest(Request $request)
    {   
         //code for displaying uploads in storage
        $path = storage_path('uploads\van.jpg');
        // $file = File::get($path);
        // $type = File::mimeType($path);
        // $response = Response::make($file, 200);
        // $response->header("Content-Type", $type);
        // return $response;

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

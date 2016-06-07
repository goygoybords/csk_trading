<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Truck_Category;
use App\Truck;

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
        $trucks = Truck::where('status' , 1)->get();
    	return view("admin.list_trucks")->with(compact('trucks'));
    }
    public function viewTruckEntry()
    {
        $categories = Truck_Category::where('status' , 1)->get();
        return view('admin.truck_entry')->with(compact('categories'));
    }
    public function postTruckEntry(Request $request)
    {
        $file = $request->file('image_file');
        $data = $request->all();
        $path = "uploads/";

        $rules = [ 'truck_category' => 'required', 
                   'post_title' => 'required|min:10',
                   'brand' => 'required',
                   'body_type' => 'required',
                   'model' => 'required',
                   'engine' => 'required',
                   'price' => 'required',
                   'description' => 'required',
                   'image_file' => 'required|mimes:jpg,png,jpeg',
                 ];

        $this->validate($request,$rules);

        if ($request->hasFile('image_file')) 
        {
            $filename = $file->getClientOriginalName();
            $file->move($path , $filename);
            $wholepath = $path."$filename";
            
            $truck = new Truck();
            $truck->truck_category_id = $data['truck_category'];
            $truck->post_name = $data['post_title'];
            $truck->date_posted = date("Y/m/d");   
            $truck->brand = $data['brand'];
            $truck->body_type = $data['body_type'];
            $truck->model = $data['model'];
            $truck->engine = $data['engine'];
            $truck->price = floatval($data['price']);
            $truck->description = $data['description'];
            $truck->image_path = $wholepath;
            $truck->status = 1;
            $truck->save();
            return redirect()->route('admin:truckEntry')->with('msg' , 'Truck Details Recorded');
        }
    }
    public function viewCategory()
    {
         $categories = Truck_Category::where('status' , 1)->get();
        return view('admin.list_category')->with(compact('categories'));

    }
    public function viewCategoryEntry()
    {
       

    }
}

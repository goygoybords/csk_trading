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
        return view('admin.truck_entry');
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
    public function viewEditTruckEntry($id)
    {
        $trucks = Truck::where('status' , 1)
                        ->where('truck_id' , $id)
                        ->first();

        return view('admin.truck_entry')->with(compact('trucks'));
    }
    public function postEditTruckEntry(Request $request, $id)
    {
        $data = $request->all();
        $rules = [ 'truck_category' => 'required', 
                   'post_title' => 'required|min:10',
                   'brand' => 'required',
                   'body_type' => 'required',
                   'model' => 'required',
                   'engine' => 'required',
                   'price' => 'required',
                   'description' => 'required',
                 ];

        $this->validate($request,$rules);

        $updates = ['truck_category_id' => $data['truck_category'] , 
                    'post_name' => $data['post_title'],
                    'brand' => $data['brand'],
                    'body_type' => $data['body_type'],
                    'model' => $data['model'],
                    'engine' => $data['engine'],
                    'price' => floatval($data['price']),
                    'description' => $data['description']
                    // 'credit_limit' => $data['credit_limit']
                   ];
        
        $client = Truck::where('status' , 1)
                    ->where('truck_id' , $id)
                    ->update($updates);

        return redirect()->route('admin:editTruckEntry' , ['id' => $id ])->with('msg' , 'Truck Details Updated');
    }
    public function viewCategory()
    {
         $categories = Truck_Category::where('status' , 1)->get();
        return view('admin.list_category')->with(compact('categories'));

    }
    public function viewCategoryEntry()
    {
        return view('admin.category_entry');
    }
    public function postCategoryEntry(Request $request)
    {
        $data = ['description' => strtoupper($request->input('description')), 'slug' => $request->input('slug'), 'status' => 1];
        $rules = [ 'description' => 'required', 
                   'slug' => 'required'
                 ];

        $this->validate($request,$rules);

        $category = new Truck_Category($data);
        $category->save();
        
        return redirect()->route('admin:categoryEntry')->with('msg' , 'New Truck Category Recorded');
    }
    public function viewEditCategoryEntry($id)
    {
        $cat = Truck_Category::where('status' , 1)
                        ->where('truck_category_id' , $id)
                        ->first();
        return view('admin.category_entry')->with(compact('cat'));
    }
    public function postEditCategoryEntry(Request $request, $id)
    {
        $data = $request->all();
        $rules = [ 'description' => 'required', 
                   'slug' => 'required',
                 ];

        $this->validate($request,$rules);

        $updates = ['description' => strtoupper($data['description']) , 
                    'slug' => strtolower($data['slug']),
                   ];

        $cat = Truck_Category::where('status' , 1)
                        ->where('truck_category_id' , $id)
                        ->update($updates);
        
        return redirect()->route('admin:editCategory' , ['id' => $id ])->with('msg' , 'Truck Category Details Updated');

    }
}

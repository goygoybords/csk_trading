<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    //
    protected $table = "trucks";
    public $timestamps = false;
    protected $fillable = [
       'truck_category_id', 'post_name', 'date_posted', 'brand', 'body_type',
       'model', 'engine', 'price', 'description' , 'image_path', 'status'
    ];

}

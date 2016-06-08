<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck_Category extends Model
{
    //
    protected $table = "truck_category";
    public $timestamps = false;

    protected $fillable = [
        'description', 'slug', 'status',
    ];

    public function categories()
    {
    	return $this->hasMany('App\Truck', 'truck_category_id');
    }

}

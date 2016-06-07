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

}

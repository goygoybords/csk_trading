<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //
    protected $table = "mail";
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];

}

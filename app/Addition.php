<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    //
    protected $fillable = ['name', 'description', 'image', 'cost'];
    public $timestamps = false;
}

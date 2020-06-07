<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
    protected $fillable = ['name', 'composition', 'image', 'description'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $fillable = ['name', 'lang_code'];
    public $timestamps = false;
}

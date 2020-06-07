<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaType extends Model
{
    //
    protected $fillable = ['pizza_id', 'name', 'cost'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'pizza_id', 'pizza_type_id', 'fullName', 'address', 'phone'];
}

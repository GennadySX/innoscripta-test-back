<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'fullName', 'address', 'phone', 'order'];


    public function order_addition()
    {
        return $this->hasMany(OrderAddition::class, 'order_id');
    }
}

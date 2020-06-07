<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
    protected $fillable = ['name', 'composition', 'image', 'description'];
    public $timestamps = false;


    public function lang_box()
    {
        return $this->morphMany(LangBox::class, 'model')->with('language');
    }


    public function type()
    {
        return $this->hasMany(PizzaType::class, 'pizza_id');
    }
}

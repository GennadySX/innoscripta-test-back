<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LangBox extends Model
{
    //
    protected $fillable = ['model', 'column_name', 'language_id', 'value'];
    public $timestamps = false;


    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}

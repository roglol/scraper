<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = ['name','domain'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'categories_websites');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function websites()
    {
        return $this->belongsToMany('App\Website', 'categories_websites');
    }
}

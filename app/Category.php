<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Website;

class Category extends Model
{
    protected $fillable = ['name'];

    public function websites()
    {
        return $this->belongsToMany(Website::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

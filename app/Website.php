<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Article;

class Website extends Model
{
    protected $fillable = ['name','domain'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_websites', 'website_id', 'category_id')->withTimeStamps();
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

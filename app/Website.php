<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Website extends Model
{
    protected $fillable = ['name','domain'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_websites', 'website_id', 'category_id')->withTimeStamps();
    }
}

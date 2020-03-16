<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Website;

class Category extends Model
{
    protected $fillable = ['name'];

    public function websites()
    {
        return $this->belongsToMany(Website::class, 'categories_websites', 'category_id','website_id');
    }

}

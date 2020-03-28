<?php

namespace App;
use Carbon\Carbon;
use App\Website; 
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'link','img', 'date'];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

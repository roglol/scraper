<?php

namespace App;
use Carbon\Carbon;
use App\Website; 

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'body', 'date'];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}

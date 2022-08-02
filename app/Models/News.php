<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];

    /* ACCESSORS */

    public function getDateAttribute()
    {
        $date = new \DateTime($this->created_at);
        return $date->format('Y-m-d');
    }

    /* RELATIONS */

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}

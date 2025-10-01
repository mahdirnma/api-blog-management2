<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'description',
        'date',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'thumbnile'];
    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
}

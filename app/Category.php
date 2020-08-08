<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    public function Post()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}

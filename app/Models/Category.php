<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts()   
        {
    return $this->belongsToMany(Post::class,'post_category');  
        }
    public function getByCategory(int $limit_count = 5)
        {
     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
}


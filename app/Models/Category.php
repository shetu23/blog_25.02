<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable=[
            'name',
            'slug',
            'description',
            'image',
            'meta_title',
            'meta_description',
            'meta-keyword',
            'navbar_status',
            'status',
            'created_by'
    ];
    public function post()
    {
        return $this->hasMany(Post::class,'id','category_id');
    }

}


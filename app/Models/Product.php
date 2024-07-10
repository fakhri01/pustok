<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id',
        'category_id',
        'tag_id',
        'title',
        'description',
        'price',
        'image_url',
        'stock',
    ];
}

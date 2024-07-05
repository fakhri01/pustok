<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $filable = [
        'title',
        'sub_title',
        'description',
        'bg_url',
        'link_url',
    ];
}

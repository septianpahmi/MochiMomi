<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = [
        'image',
        'name',
        'position',
        'video_link',
        'description',
    ];
}

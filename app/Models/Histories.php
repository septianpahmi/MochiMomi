<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}

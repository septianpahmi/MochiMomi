<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'content',
        'user_id',
    ];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

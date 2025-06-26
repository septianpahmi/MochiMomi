<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'image',
        'name',
        'slug',
        'brand_name',
        'price',
        'variant',
        'flavor',
        'weight',
        'description',
        'category_id',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}

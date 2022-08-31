<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fabricante',
        'price',
        'category',
        'subCategory',
        'img',
    ];

    public function size() {
        return $this->hasMany(Size::class);
    }

    public function category() {
        return $this->hasOne(Category::class);
    }
}

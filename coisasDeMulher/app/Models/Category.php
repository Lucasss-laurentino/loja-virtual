<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

    public function product() {
        $this->belongsTo(Product::class);
    }
}
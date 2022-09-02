<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subCategoryName',
        'categories_id'
    ];

    public function category() {
        return $this->belongsTo(category::class);
    }
}
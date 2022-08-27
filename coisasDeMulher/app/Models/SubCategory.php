<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subCategoryName',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(category::class);
    }
}
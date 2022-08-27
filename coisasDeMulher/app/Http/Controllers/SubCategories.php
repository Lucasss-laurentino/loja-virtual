<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategories extends Controller
{
    public function store(Request $request, $id) {

        $category = Category::where('id', $id)->first();

        
        $subCategory = SubCategory::create([
            'subCategoryName' => $request->subCategoryName,
            'category_id' => $category->id,
        ]);

        return to_route('produtos.index');
    }
}
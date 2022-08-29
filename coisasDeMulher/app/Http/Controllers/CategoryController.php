<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request) {

        Category::create([
            'name' => $request->categoryName,
            ]
        );

        return 'true';

    }

    public function selectCategories() {

        $categories = Category::all();

        return response()->json($categories);
    
    }
}

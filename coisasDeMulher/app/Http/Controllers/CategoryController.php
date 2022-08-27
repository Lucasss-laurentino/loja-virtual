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

        return to_route('produtos.index');

    }

    public function selectSubCategories($id) {
        dd($id);
    }
}

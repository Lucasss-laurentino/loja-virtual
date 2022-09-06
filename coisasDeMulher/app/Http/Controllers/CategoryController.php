<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function store(Request $request) {
        
        Category::create([
            'name' => $request->categoryName,
            ]
        );

        $category = Category::all();

        return $category;

    }

    public function selectCategories() {

        $categories = Category::all();

        return response()->json($categories);
    
    }

    public function delete($id) {

        Category::where('id', $id)->delete();

        $categories = Category::all();

        return $categories;
    }

    public function returnCategory($id) {

        $category = Category::where('id', $id)->first();

        return $category;
    
    }

    public function showProducts(Request $request) {

        $products = Product::where('categories_id', $request->id_category)->get();

        return response()->Json($products);
    }

}

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
            'categories_id' => $category->id,
        ]);

        $allSubCategories = SubCategory::all();

        return $allSubCategories;

    }

    public function selectSubCategory(Request $request, $id) {

        $category = Category::where('id', $id)->get();

        $subCategories = SubCategory::where('categories_id', $id)->get();

        $request->session()->put('categoryCreateSubCategory', $category);
        
        return response()->Json($subCategories);
    
    }

    public function delete($id) {

        
        SubCategory::where('id', $id)->delete();

        $subCategories = SubCategory::all();

        return $subCategories;
    }
}

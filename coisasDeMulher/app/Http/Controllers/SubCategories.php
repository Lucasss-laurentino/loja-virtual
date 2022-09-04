<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategories extends Controller
{
    public function store(Request $request, $id) {

        $category = Category::where('id', $id)->first();
        
        if(!empty($category)) {

            $subCategory = SubCategory::create([
                'subCategoryName' => $request->subCategoryName,
                'categories_id' => $category->id,
            ]);

            $allSubCategories = SubCategory::where('categories_id', $category->id)->get();

            return response()->Json($allSubCategories);
    
        } else {
            return to_route('produtos.index');
        }


    }

    public function selectSubCategory($id) {

        $subCategories = SubCategory::where('categories_id', $id)->get();
        
        return response()->Json($subCategories);
    
    }

    public function delete(Request $request, $id) {
        
        SubCategory::where('id', $id)->delete();

        $subCategories = SubCategory::where('categories_id', $request->id_category)->get();

        return response()->Json($subCategories);


    }
}

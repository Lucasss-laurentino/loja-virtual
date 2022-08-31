<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class ProdutosController extends Controller
{
    public function index() {

        $categories = Category::query()->orderBy('id')->get();

        return view('produtos.index')->with('categories', $categories);
    
    }

    public function store(Request $request) {

        

    }

}

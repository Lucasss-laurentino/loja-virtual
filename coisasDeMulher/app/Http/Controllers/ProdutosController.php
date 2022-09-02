<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;


class ProdutosController extends Controller
{
    public function index() {

        $categories = Category::query()->orderBy('id')->get();

        return view('produtos.index')->with('categories', $categories);
    
    }

    public function store(Request $request) {

        // Cadastro de produtos
        $produto = Product::create([
            'name' => $request->name,
            'fabricante' => $request->fabricante,
            'price' => $request->price,
            'categories_id' => $request->category,
            'subCategory' => $request->subCategory,
            'img' => $request->file('img-product')
        ]);

        $checklist_tamanho = $request->checklist;

        // cadastro de sizes
        foreach($request->quantidade as $quantidade){

            if($quantidade != null){

                foreach($checklist_tamanho as $tamanho) {

                    $size = Size::create([
                        'size' => $tamanho , 
                        'quantity' => $quantidade,
                        'product_id' => $produto->id
                    ]);
    
                }

            }

        }

        return to_route('produtos.index');

    }

}

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

        $products = Product::query()->orderBy('price')->get();

        return view('produtos.index')->with('categories', $categories)->with('products', $products);
    
        // return response()->Json($categories, $products);

    }

    public function store(Request $request) {

        // Caminho para imagem do produto
        $path = $request->file('img-product')->store('img-product'.$request->name, 'public');
        $request->path = $path;

        // Cadastro de produtos
        $produto = Product::create([
            'name' => $request->name,
            'fabricante' => $request->fabricante,
            'price' => $request->price,
            'categories_id' => $request->category,
            'subCategory' => $request->subCategory,
            'img' => $request->path,
        ]);

        $contador = 0;
        foreach($request->checklist as $tamanho) {
            
            $size = Size::create([
                'size' => $tamanho,
                'quantity' => $request->quantidade[$contador],
                'product_id' => $produto->id,
            ]);

            $contador = $contador + 1;
        
        }

        return to_route('produtos.index');

    }

}
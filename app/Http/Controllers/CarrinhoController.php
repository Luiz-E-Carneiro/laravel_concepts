<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }
    
    public function add(Produto $produto){
        
        $carrinho = session()->get('carrinho', []);
        $carrinho[] = $produto;
        
        session()->put('carrinho', $carrinho);
        
        return view('carrinho.index', compact('carrinho'));
    }
    
    public function delete(string $id) {
        $carrinho = session()->get('carrinho', []);
        unset($carrinho[$id]);
        session()->put('carrinho', $carrinho);
        
//USE FORGET

        return view('carrinho.index', compact('carrinho'));
    }

}

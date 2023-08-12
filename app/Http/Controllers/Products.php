<?php

namespace App\Http\Controllers;

use App\Models\Products as Product;
use Illuminate\Http\Request;

class Products extends Controller
{
    public function index(){
        $products = Product::all();
        return view('produtos/exibicao-produtos',['dados'=>$products]);

    }

    public function create(){
        return view('produtos/criar-produtos');
    }
    
    public function update(){
        return view('produtos/editar-produto');
    }
}

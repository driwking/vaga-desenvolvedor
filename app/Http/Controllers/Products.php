<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function index(){
        return view('produtos/exibicao-produtos');
    }

    public function create(){
        return view('produtos/criar-produtos');
    }
    
    public function update(){
        return view('produtos/editar-produto');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    
    public function index(){
        $dates = Clients::all();

       return view('clientes/perfil',['dados' => $dates]);

    }
    public function create(){

        return view('clientes/login');
        
    }
    public function store(Request $request){

        $cliente = new Clients;
        $cliente->nome_cliente = $request->nome;
        $cliente->cpf_cliente = $request->cpf;
        $cliente->email_cliente	= $request->email;
        $cliente->save();

        return redirect('/')->with('msg','usuario logado!');
    }

}

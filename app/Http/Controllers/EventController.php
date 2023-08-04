<?php

namespace App\Http\Controllers;

use Carbon\CarbonPeriodImmutable;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index (){

        $nome = "andriw";
        $arr = ['jorge','mathues','carlos'];
        $idade = 17;
        // retornando valor para ser utilizado
        return view('welcome',['nome'=>$nome,'idade'=> $idade,'arr'=>$arr]);
    }
    
    public function create () {
        return view('events.create');
    }
}

@extends('layouts.main')

@section('title','HCE Events')

@section('content')

        <img src="/img/broto.png" alt="imagem">
        <!-- diretiva do blade -->
        <h1>titulo</h1>
        @if( 2 == 3)
            <p>opa </p>
        @endif
        <!-- utilizando var recebida pela route -->
        <p>{{$nome}}{{$idade}}</p>
        <h2>foreach</h2>

        @foreach($arr as $valor)
            
            <p>{{$loop->index}}</p>
            <p>{{$valor}}</p>
        @endforeach
    @php

@endsection

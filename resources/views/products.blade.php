@extends('layouts.main')

@section('title','Produtos')

@section('content')

<h1>PÁGINA DE PRODUTOS</h1>


@if ($busca != null)
    <p>teste {{$busca}}</p>
@endif

@endsection
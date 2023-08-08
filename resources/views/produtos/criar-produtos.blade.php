@extends('layouts.main')

@section('title','criar produtos')

@section('content')

<div class="titulo">
    <h1>Cadastre seu produto em nosso site!</h1>
</div>

<div class="div-main">
    <div>

    <form action="/routes/web.php" method="post">
    <label for="nome">Nome do produto</label>
    <input name="nome" type="text" id="nome">
    <label for="desc">Descriacao</label>
    <textarea  name="descriacao" type="text" id="desc" cols="70" rows="10"></textarea>
    <label for="preco">Preço</label>
    <input name="preco" type="number" id="preco">
    <label for="estoque">Estoque</label>
    <input name="estoque" type="text" id="estoque">
    
    <div class="botao">
        <button type="submit" >Cadastrar</button>
    </div>
    </form>

    </div>
</div>






@endsection
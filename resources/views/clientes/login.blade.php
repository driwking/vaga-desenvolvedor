@extends('layouts.main')

@section('title','criar conta')

@section('content')

<div class="div-body-login">

    <div class="div-background">
        <!-- <div class="div-form-login"> -->
       

        <form action=""> 
            <h1>Login</h1>
            <label for="nome">Nome
            <input type="text" name="nome" id="nome"></label>
            <label for="password">Senha
            <input type="password" name="senha" id="password"></label>
            <button type="submit">Entrar</button>
        </form>

        <!-- </div> -->

    </div>

</div>


@endsection
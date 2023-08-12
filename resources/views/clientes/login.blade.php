@extends('layouts.main')

@section('title','criar conta')

@section('content')

<div class="div-body-login">

    <div class="div-background">
        <!-- <div class="div-form-login"> -->
       

        <form action="/clientes" method="post">
            @csrf
            <h1>Login</h1>
            <div class="div-input-login">
                <label for="nome">Nome
                <input type="text" name="nome" id="nome" placeholder="Nome completo"></label>
                <label for="email">Email
                <input type="email" name="email" id="email" placeholder="user@user.com"></label>
                
                <label for="password">Cpf
                <input type="text" name="cpf" id="cpf" placeholder="123.456.789.0"></label>
                
                <label for="password">Senha
                <input type="password" name="senha" id="password"></label>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <!-- </div> -->

    </div>

</div>


@endsection
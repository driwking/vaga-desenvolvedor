@extends('layouts.main')

@section('title','Perfil')

@section('content')




<div class="body-perfil">

    <div class="div-perfil">
        <div class="imagem"> 
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
        </div>
        <div class="div-conteudo"> 
            <h1>Informaçoes do usuario</h1>
            <form action="">
                <label for="nome">Nome</label>
                <input type="text" id="nome">
                <label for="email">Email</label>
                <input type="text" id="email">
                <label for="tel">CPF</label>
                <input type="text" id="tel">
                <label for="tel">Endereço</label>
                <input type="text" id="tel">
                <div class="botao">
                    <button>atualizar Informaçoes</button>
                    <button>excluir conta</button>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection
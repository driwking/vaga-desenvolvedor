@extends('layouts.main')
@section('title','editando produto')

@section('content')


<!-- <h1>teste</h1> -->

<div class="div-main-edit-produtos">



<div class="div-view">
        <div class="div-imagem">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41GZCWFJB1L._AC_UL450_SR450,320_.jpg" alt="">       </img>
                        <p>TITULO: ############</p>
                        <p>DESCRIÇÃO</p>
                        <p>VALOR: R$ 220,00</p>
                        <p>EM ESTOQUE: 10 UNID</p>
        </div>

        
        <div class="form-edit">
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
                    <button type="submit">Atualizar</button>
                    <button type="submit">Adicionar Produto</button>
                    <button type="submit">Excluir</button>
                </div>
            </form>
        </div>
</div>

</div>


@endsection
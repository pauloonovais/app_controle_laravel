<?php
    $titulo = "cadastrar-produto"
?>
    @extends('home')
    @section('conteudo')

        <h1 class="mt-2">Cadastrar produto</h1>
        @if(!empty($mensagem))
            <div class="alert alert-success">Produto cadastrado com sucesso!</div>
        @endif
        <form action="/produto/cadastrar-produto" method="post" class="mt-2">
            <input type="hidden" name="_token" value="{{{csrf_token()}}}">
            
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for=""></label>
        </div>
            
            
        </form>



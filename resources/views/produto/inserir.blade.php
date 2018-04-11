<?php
    $titulo = "inserir";
?>
    @extends('home')
    @section('conteudo')

        <h1 class="mt-2">Inserir produto</h1>
        @if(!empty($mensagem))
            <div class="alert alert-success">Produto inserido com sucesso!</div>
        @endif
        <form action="/produto/inserir" method="post" class="mt-2">
            <input type="hidden" name="_token" value="{{{csrf_token()}}}">
            <div class="form-group">
                <label for="descricao">Descrição:<span class="text-danger">*</span> </label>
                <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade:<span class="text-danger">*</span> </label>
                <input type="number" id="quantidade" name="quantidade" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor:<span class="text-danger">*</span></label>
                <input type="number" id="valor" name="valor" class="form-control" required>
            </div>

            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco. </div>
            <input type="submit" class="btn btn-success mt-2" value="Inserir">
        </form>

        @stop
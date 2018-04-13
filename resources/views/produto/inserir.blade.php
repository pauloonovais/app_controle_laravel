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
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" id="total" name="total" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="fornecedor">Fornecedor:</label>
                <input type="text" id="fornecedor" name="fornecedor" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success mt-2" value="Inserir">
        </form>

        @stop
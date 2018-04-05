<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    Public function pesquisar()
    {

        //Recebe o conteúdo elemento 'descricao' do formulário
        $descricao = Input::get('descricao');

        //Busca produtos com o conteúdo da $descricao
        $produtos = Produto::where('descricao', 'like', '%'.$descricao.'%')->get();

        //Busca todos os dados do banco de dados
        //$produtos = Produto::all();

        //Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos',$produtos);
        }


    Public function mostrar_inserir()
    {
        return view('produto.inserir');
    }

    Public function inserir()
    {
        //Criando um novo objeto do tipo produto
        $produto = new Produto();

        //Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $produto->descricao=Input::get('descricao');
        $produto->quantidade=Input::get('quantidade');
        $produto->valor=Input::get('valor');

        //Salvando no banco de dados
        $produto->save();

        //Criando uma mensagem para o usuário
        $mensagem = "Produto inserido com sucesso!";

        //Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('mensagem',$mensagem);
    }
}



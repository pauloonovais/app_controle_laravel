<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    Public function pesquisar()
    {

        //Busca todos os dados do banco de dados
        $produtos = Produto::all();
        return view('produto.pesquisar')->with('produtos',$produtos);
        }
}


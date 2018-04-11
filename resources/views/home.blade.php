<?php
$titulo = "";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script lang="text/javascript" src="/js/app.js"></script>
    <title>{{$titulo}}</title>
</head>
<body>

    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/produto/inicio">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produto/inserir">Inserir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produto/pesquisar">Pesquisar</a>
            </li>
        </ul>
        <section>
            @yield('conteudo')
        </section>
    </div>
</body>
</html>
@extends('layouts.app')
@section('content')

<body>
<div class="container">
    <ul class="nav">
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
@endsection

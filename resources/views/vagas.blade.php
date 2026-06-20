<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SOS Trabalho - Vagas</title>
    @vite(['resources/css/mainVag.css', 'resources/js/mainVag.js'])
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logotipo-sos-trabalho-sem-fundo.png') }}" alt="SOS Trabalho Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('vagas') }}" class="ativo">Vagas</a></li>
                <li><a href="{{ route('empresas') }}">Empresas</a></li>
                <li><a href="{{ route('perfil') }}">Perfil</a></li>
                <li><a href="{{ route('anunciar') }}">Anunciar Vaga</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('cadastro') }}" class="btn-cadastrar">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        <section class="vagas-header">
            <h1>Vagas</h1>
            <div class="search-inline">
                <input id="search-vagas" type="text" placeholder="Pesquisar vagas por palavra-chave">
                <button id="buscar-vagas">Buscar</button>
            </div>
        </section>

        <section class="vagas-list" id="vagas-list">
            <article class="vaga-card">
                <div class="vaga-info">
                    <h3>Desenvolvedor Front-end</h3>
                    <p class="empresa">Google • São Paulo, SP</p>
                    <p class="descricao">Trabalhe com React, HTML, CSS e JavaScript em times ágeis.</p>
                </div>
                <div class="vaga-actions">
                    <button class="btn-detalhes" data-id="-1">Ver detalhes</button>
                    <button class="btn-candidatar" data-id="-1">Candidatar-se</button>
                </div>
            </article>

            <article class="vaga-card">
                <div class="vaga-info">
                    <h3>Analista de Marketing</h3>
                    <p class="empresa">Nubank • Remoto</p>
                    <p class="descricao">Planejamento de campanhas e análise de métricas.</p>
                </div>
                <div class="vaga-actions">
                    <button class="btn-detalhes" data-id="-2">Ver detalhes</button>
                    <button class="btn-candidatar" data-id="-2">Candidatar-se</button>
                </div>
            </article>

            <article class="vaga-card">
                <div class="vaga-info">
                    <h3>Representante de Vendas</h3>
                    <p class="empresa">Startup X • Belo Horizonte, MG</p>
                    <p class="descricao">Prospecção e gestão de contas.</p>
                </div>
                <div class="vaga-actions">
                    <button class="btn-detalhes" data-id="-3">Ver detalhes</button>
                    <button class="btn-candidatar" data-id="-3">Candidatar-se</button>
                </div>
            </article>
        </section>

        <div class="limpar-container">
            <button id="limpar-vagas">Limpar Histórico de Vagas</button>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <img src="{{ asset('assets/img/logotipo-sos-trabalho-sem-fundo.png') }}" alt="SOS Trabalho Logo"
                    class="footer-img">
            </div>
            <div class="footer-center">
                <p>© 2025 SOS Trabalho. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>

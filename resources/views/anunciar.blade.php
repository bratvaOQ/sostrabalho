<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SOS Trabalho - Anunciar Vaga</title>
    @vite(['resources/css/mainAnu.css', 'resources/js/mainAnu.js'])
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
                <li><a href="{{ route('vagas') }}">Vagas</a></li>
                <li><a href="{{ route('empresas') }}">Empresas</a></li>
                <li><a href="{{ route('perfil') }}">Perfil</a></li>
                <li><a href="{{ route('anunciar') }}" class="ativo">Anunciar Vaga</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('cadastro') }}" class="btn-cadastrar">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        <section class="anunciar-section">
            <h1>Anunciar Vaga</h1>
            <form id="form-anunciar" class="form-anunciar">
                <input id="vaga-titulo" type="text" placeholder="Título da vaga" required />
                <input id="vaga-empresa" type="text" placeholder="Empresa" required />
                <input id="vaga-local" type="text" placeholder="Localização (Cidade, Estado ou Remoto)" />
                <textarea id="vaga-descricao" placeholder="Descrição da vaga" required></textarea>
                <textarea id="vaga-requisito" placeholder="Requisitos" required></textarea>
                <input id="vaga-salario" type="number" placeholder="Remuneração" />

                <div class="perfil-actions">
                    <button type="submit" class="btn-cadastrar">Publicar Vaga</button>
                    <button type="button" id="reset-anunciar">Limpar</button>
                </div>
            </form>
            <div id="anunciar-result" class="anunciar-result" aria-live="polite"></div>
        </section>
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

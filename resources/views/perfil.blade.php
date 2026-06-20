<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SOS Trabalho - Perfil</title>
    @vite(['resources/css/mainPer.css', 'resources/js/mainPer.js'])
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
                <li><a href="{{ route('perfil') }}" class="ativo">Perfil</a></li>
                <li><a href="{{ route('anunciar') }}">Anunciar Vaga</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('cadastro') }}" class="btn-cadastrar">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        <section class="perfil-section">
            <h1>Meu Perfil</h1>
            <div class="perfil-card">
                <div class="perfil-avatar-container">
                    <img class="perfil-avatar" src="{{ asset('assets/img/homem.jpeg') }}" alt="Avatar" />
                    <label class="avatar-overlay">
                        <input type="file" id="perfil-imagem" accept="image/*" />
                        <span class="avatar-icon">✎</span>
                    </label>
                </div>
                <form id="form-perfil" class="perfil-form">
                    <label>Nome
                        <input id="perfil-nome" type="text" value="Lucas Alexandre" />
                    </label>
                    <label>Cargo
                        <input id="perfil-cargo" type="text" value="Design" />
                    </label>
                    <label>Localização
                        <input id="perfil-local" type="text" value="São Paulo, SP" />
                    </label>
                    <label>Biografia
                        <textarea id="perfil-resumo">Designer com experiência em produtos digitais.</textarea>
                    </label>
                    <div class="perfil-actions">
                        <button type="button" id="salvar-perfil">Salvar</button>
                        <button type="button" id="limpar-perfil">Limpar</button>
                    </div>
                </form>
            </div>
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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar-se - SOS Trabalho</title>
    @vite(['resources/css/mainCad.css', 'resources/js/mainCad.js'])
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
                <li><a href="{{ route('anunciar') }}">Anunciar Vaga</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('cadastro') }}" class="btn-cadastrar ativo">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <section class="form-section">
            <div class="form-container">
                <h2>Criar nova conta</h2>
                <form id="cadastroForm">
                    <input type="text" id="cadNome" placeholder="Nome completo" required />
                    <input type="email" id="cadEmail" placeholder="E-mail" required />
                    <input type="password" id="cadSenha" placeholder="Senha" required />
                    <input type="password" id="cadConfirmar" placeholder="Confirmar senha" required />
                    <button type="submit" class="btn-cadastrar">Cadastrar</button>
                    <p class="link-msg">
                        Já tem conta? <a href="{{ route('login') }}">Entre aqui</a>
                    </p>
                </form>
            </div>
        </section>
    </div>

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

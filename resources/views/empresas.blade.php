<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SOS Trabalho - Empresas Parceiras</title>
    @vite(['resources/css/mainEmp.css'])
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
                <li><a href="{{ route('empresas') }}" class="ativo">Empresas</a></li>
                <li><a href="{{ route('perfil') }}">Perfil</a></li>
                <li><a href="{{ route('anunciar') }}">Anunciar Vaga</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('cadastro') }}" class="btn-cadastrar">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        <section class="empresas-list">
            <h1>Empresas Parceiras</h1>
            <div class="empresas-grid">
                <div class="empresa-card">
                    <img src="{{ asset('assets/img/google-logo.png') }}" alt="Logo Google" />
                    <h3>Google</h3>
                    <p>Empresa líder em tecnologia com diversas oportunidades.</p>
                    <a class="btn-detalhes" href="{{ route('vagas') }}">Ver vagas</a>
                </div>

                <div class="empresa-card">
                    <img src="{{ asset('assets/img/nubank-logo.png') }}" alt="Logo Nubank" />
                    <h3>Nubank</h3>
                    <p>Banco digital com vagas em produto, engenharia e marketing.</p>
                    <a class="btn-detalhes" href="{{ route('vagas') }}">Ver vagas</a>
                </div>

                <div class="empresa-card">
                    <img src="{{ asset('assets/img/x-logo.jpg') }}" alt="Logo Empresa X" />
                    <h3>Empresa X</h3>
                    <p>Parceira com oportunidades em vendas e atendimento.</p>
                    <a class="btn-detalhes" href="{{ route('vagas') }}">Ver vagas</a>
                </div>
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

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOS Trabalho</title>
  <link rel="stylesheet" href="css/mainHom.css">
</head>

<body>
  <header class="navbar">
    <div class="logo">
      <a href="home.html">
        <img src="img/logotipo-sos-trabalho-sem-fundo.png" alt="SOS Trabalho Logo">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="home.html">Início</a></li>
        <li><a href="vagas.html">Vagas</a></li>
        <li><a href="empresasParceiras.html">Empresas</a></li>
        <li><a href="perfil.html">Perfil</a></li>
        <li><a href="anunciarVaga.html" class="ativo">Anunciar Vaga</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="cadastro.html" class="btn-cadastrar">Cadastre-se</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-slider">
      <div class="slide" style="background-image: url('img/carrosel-um.jpg');"></div>
      <div class="slide" style="background-image: url('img/carrosel-dois.jpg');"></div>
      <div class="slide" style="background-image: url('img/carrosel-tres.jpg');"></div>
    </div>
    <div class="hero-content">
      <h1>Encontre as melhores vagas de emprego</h1>
      <div class="search-box">
        <input type="text" id="input-busca" placeholder="Vaga ou palavra-chave">
        <button type="button" id="buscar">Buscar</button>
      </div>
    </div>
  </section>

  <section class="categorias">
    <h2>Categorias Populares</h2>
    <div class="categorias-container">
      <div class="categoria">
        <img src="img/icone-publicidade.png" alt="Marketing">
        <p>Marketing</p>
      </div>
      <div class="categoria">
        <img src="img/icone-televisao.png" alt="Tecnologia">
        <p>Tecnologia</p>
      </div>
      <div class="categoria">
        <img src="img/icone-carrinho.png" alt="Vendas">
        <p>Vendas</p>
      </div>
      <div class="categoria">
        <img src="img/icone-fone-de-ouvido.png" alt="Atendimento">
        <p>Atendimento</p>
      </div>
    </div>
  </section>

  <section class="empresas">
    <h2>Empresas Parceiras</h2>
    <div class="empresas-container">
      <img src="img/google-logo.png" alt="Logo Google">
      <img src="img/nubank-logo.png" alt="Logo Nubank">
    </div>
  </section>

  <section class="depoimento">
    <h2>O que dizem nossos usuários</h2>
    <div class="depoimentodousuario">
      <img src="img/homem.jpeg" alt="Imagem do Usuário">
      <div>
        <h3>Lucas Alexandre</h3>
        <p class="cargo">Design</p>
        <p class="texto">"Consegui o emprego dos sonhos graças à SOS Trabalho, o site me mostrou uma vaga perfeita para
          minha carreira."</p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-left">
        <img src="img/logotipo-sos-trabalho-sem-fundo.png" alt="Logo SOS Trabalho" class="footer-img">
      </div>
      <div class="footer-center">
        <p>© 2025 SOS Trabalho. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="js/mainHom.js"></script>
</body>

</html>
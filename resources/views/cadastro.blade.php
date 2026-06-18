<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastrar-se - SOS Trabalho</title>
  <link rel="stylesheet" href="css/mainCad.css" />
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
            Já tem conta? <a href="login.html">Entre aqui</a>
          </p>
        </form>
      </div>
    </section>
  </div>

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



  <script src="JS/mainCad.js"></script>
</body>

</html>
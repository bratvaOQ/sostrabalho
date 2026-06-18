<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SOS Trabalho - Login</title>
  <link rel="stylesheet" href="css/mainLog.css" />
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

  <main class="main-content">
    <section class="form-section">
      <div class="form-container">
        <h2>Entrar</h2>
        <form id="form-login">
          <label>Email
            <input id="login-email" type="email" placeholder="seu@exemplo.com" required />
          </label>
          <label>Senha
            <input id="login-senha" type="password" placeholder="********" required />
          </label>
          <p id="msg-erro" class="msg-erro"></p>
          <div class="perfil-actions">
            <button type="submit">Entrar</button>
            <a href="cadastro.html" class="link-criar">Criar conta</a>
          </div>
        </form>
      </div>
    </section>
  </main>

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

  <script src="js/mainLog.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SOS Trabalho - Perfil</title>
  <link rel="stylesheet" href="css/mainPer.css" />
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
        <li><a href="perfil.html" class="ativo">Perfil</a></li>
        <li><a href="anunciarVaga.html">Anunciar Vaga</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="cadastro.html" class="btn-cadastrar">Cadastre-se</a></li>
      </ul>
    </nav>
  </header>

  <main class="main-container">
    <section class="perfil-section">
      <h1>Meu Perfil</h1>
      <div class="perfil-card">
        <div class="perfil-avatar-container">
          <img class="perfil-avatar" src="img/homem.jpeg" alt="Avatar" />
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
        <img src="img/logotipo-sos-trabalho-sem-fundo.png" alt="Logo SOS Trabalho" class="footer-img">
      </div>
      <div class="footer-center">
        <p>© 2025 SOS Trabalho. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="JS/mainPer.js"></script>
</body>

</html>
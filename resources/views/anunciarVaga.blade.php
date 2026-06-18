<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SOS Trabalho - Anunciar Vaga</title>
  <link rel="stylesheet" href="css/mainAnu.css" />
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

  <main class="main-container">
    <section class="anunciar-section">
      <h1>Anunciar Vaga</h1>
      <form id="form-anunciar" class="form-anunciar">
        <input id="vaga-titulo" type="text" placeholder="Título da vaga" required />
        <input id="vaga-empresa" type="text" placeholder="Empresa" required />
        <input id="vaga-local" type="text" placeholder="Localização (Cidade, Estado ou Remoto)" />
        <textarea id="vaga-descricao" placeholder="Descrição da vaga e requisitos" required></textarea>
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
        <img src="img/logotipo-sos-trabalho-sem-fundo.png" alt="Logo SOS Trabalho" class="footer-img">
      </div>
      <div class="footer-center">
        <p>© 2025 SOS Trabalho. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="JS/mainAnu.js"></script>
</body>

</html>
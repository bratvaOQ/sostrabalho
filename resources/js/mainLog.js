document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("form-login");
  const emailInput = document.getElementById("login-email");
  const senhaInput = document.getElementById("login-senha");
  const msgErro = document.getElementById("msg-erro");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const email = emailInput.value.trim();
    const senha = senhaInput.value.trim();

    if (!email || !senha) {
      msgErro.textContent = "Preencha todos os campos!";
      return;
    }

    const usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
    const usuario = usuarios.find(u => u.email === email && u.senha === senha);

    if (usuario) {
      localStorage.setItem("usuarioLogado", JSON.stringify(usuario));
      window.location.href = `vagas.html?nome=${encodeURIComponent(usuario.nome)}`;
    } else {
      msgErro.textContent = "Email ou senha incorretos!";
    }
  });
});

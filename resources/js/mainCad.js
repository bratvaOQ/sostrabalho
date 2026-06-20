document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("cadastroForm");
  const nome = document.getElementById("cadNome");
  const email = document.getElementById("cadEmail");
  const senha = document.getElementById("cadSenha");
  const confirmar = document.getElementById("cadConfirmar");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (!nome.value || !email.value || !senha.value || !confirmar.value) {
      mostrarErro("Por favor, preencha todos os campos.");
      return;
    }

    if (!validarEmail(email.value)) {
      mostrarErro("Digite um e-mail válido.");
      return;
    }

    if (senha.value.length < 6) {
      mostrarErro("A senha deve ter pelo menos 6 caracteres.");
      return;
    }

    if (senha.value !== confirmar.value) {
      mostrarErro("As senhas não coincidem.");
      return;
    }

    const usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
    if (usuarios.some(u => u.email === email.value.trim())) {
      mostrarErro("Conta já existente");
      return;
    }

    usuarios.push({
      nome: nome.value.trim(),
      email: email.value.trim(),
      senha: senha.value
    });
    localStorage.setItem("usuarios", JSON.stringify(usuarios));

    mostrarSucesso("Cadastro concluído com sucesso!");
    form.reset();
    setTimeout(() => window.location.href = "/login", 1000);
  });
});

function validarEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function criarBoxMensagem(msg, bg, color) {
  let box = document.querySelector(".msg-box");
  if (!box) {
    box = document.createElement("div");
    box.classList.add("msg-box");
    document.querySelector(".form-container").prepend(box);
  }
  box.textContent = "";
  box.style.background = bg;
  box.style.color = color;
  box.style.padding = "10px";
  box.style.marginBottom = "12px";
  box.style.borderRadius = "8px";
  box.style.fontSize = "14px";
  box.textContent = msg;

  setTimeout(() => {
    if (box) box.remove();
  }, 3000);
}

function mostrarErro(msg) {
  criarBoxMensagem(msg, "#FFECEC", "#B71C1C");
}

function mostrarSucesso(msg) {
  criarBoxMensagem(msg, "#E6F4EA", "#1B5E20");
}

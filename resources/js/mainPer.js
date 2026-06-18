document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("form-perfil");
  const nomeInput = document.getElementById("perfil-nome");
  const cargoInput = document.getElementById("perfil-cargo");
  const localInput = document.getElementById("perfil-local");
  const resumoInput = document.getElementById("perfil-resumo");
  const salvarBtn = document.getElementById("salvar-perfil");
  const limparBtn = document.getElementById("limpar-perfil");
  const avatarInput = document.getElementById("perfil-imagem");
  const avatarImg = document.querySelector(".perfil-avatar");

  const carregarPerfil = () => {
    const perfilSalvo = JSON.parse(localStorage.getItem("perfilUsuario"));
    if (perfilSalvo) {
      nomeInput.value = perfilSalvo.nome || "";
      cargoInput.value = perfilSalvo.cargo || "";
      localInput.value = perfilSalvo.local || "";
      resumoInput.value = perfilSalvo.resumo || "";
    }
    const avatarSalvo = localStorage.getItem("perfilAvatar");
    if (avatarSalvo) avatarImg.src = avatarSalvo;
  };

  salvarBtn.addEventListener("click", () => {
    const perfil = {
      nome: nomeInput.value.trim(),
      cargo: cargoInput.value.trim(),
      local: localInput.value.trim(),
      resumo: resumoInput.value.trim()
    };
    localStorage.setItem("perfilUsuario", JSON.stringify(perfil));

    let msg = document.querySelector(".msg-perfil");
    if (!msg) {
      msg = document.createElement("p");
      msg.className = "msg-perfil";
      msg.style.color = "#1C3973";
      msg.style.fontWeight = "600";
      msg.style.marginTop = "10px";
      form.appendChild(msg);
    }
    msg.textContent = "Perfil salvo com sucesso!";
  });

  limparBtn.addEventListener("click", () => {
    nomeInput.value = "";
    cargoInput.value = "";
    localInput.value = "";
    resumoInput.value = "";
    const msg = document.querySelector(".msg-perfil");
    if (msg) msg.textContent = "";
  });

  avatarInput.addEventListener("change", () => {
    const file = avatarInput.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        avatarImg.src = e.target.result;
        localStorage.setItem("perfilAvatar", e.target.result);
      }
      reader.readAsDataURL(file);
    }
  });

  carregarPerfil();
});

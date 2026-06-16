document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("form-anunciar");
  const resetBtn = document.getElementById("reset-anunciar");
  const resultDiv = document.getElementById("anunciar-result");

  function mostrarMensagem(mensagem, tipo) {
    resultDiv.textContent = mensagem;
    resultDiv.style.padding = "12px";
    resultDiv.style.marginTop = "15px";
    resultDiv.style.borderRadius = "8px";
    resultDiv.style.fontWeight = "500";
    resultDiv.style.textAlign = "center";
    resultDiv.style.color = tipo === "sucesso" ? "#1B5E20" : "#B71C1C";
    resultDiv.style.backgroundColor = tipo === "sucesso" ? "#E6F4EA" : "#FFECEC";
  }

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const titulo = document.getElementById("vaga-titulo")?.value.trim();
    const empresa = document.getElementById("vaga-empresa")?.value.trim();
    const local = document.getElementById("vaga-local")?.value.trim();
    const descricao = document.getElementById("vaga-descricao")?.value.trim();
    let salario = document.getElementById("vaga-salario")?.value.trim();

    if (!titulo || !empresa || !descricao) {
      mostrarMensagem(
        "Preencha todos os campos obrigatórios (Título, Empresa e Descrição).",
        "erro"
      );
      return;
    }

    if (!salario) {
      salario = "A combinar";
    }

    const vagas = JSON.parse(localStorage.getItem("vagas")) || [];

    const novaVaga = {
      titulo,
      empresa,
      local,
      descricao,
      salario,
      data: new Date().toLocaleString()
    };

    vagas.push(novaVaga);
    localStorage.setItem("vagas", JSON.stringify(vagas));

    mostrarMensagem("Vaga publicada com sucesso!", "sucesso");
    form.reset();
  });

  resetBtn.addEventListener("click", () => {
    form.reset();
    resultDiv.textContent = "";
  });
});

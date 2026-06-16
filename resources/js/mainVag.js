document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("search-vagas");
  const searchButton = document.getElementById("buscar-vagas");
  const vagasList = document.getElementById("vagas-list");
  const limparVagasBtn = document.getElementById("limpar-vagas");

  let vagas = JSON.parse(localStorage.getItem("vagas")) || [];

  const mostrarVagas = (lista) => {
    vagasList.querySelectorAll(".vaga-dinamica").forEach(el => el.remove());

    lista.forEach((vaga, index) => {
      const vagaCard = document.createElement("article");
      vagaCard.className = "vaga-card vaga-dinamica";
      vagaCard.innerHTML = `
        <div class="vaga-info">
          <h3>${vaga.titulo}</h3>
          <p class="empresa">${vaga.empresa} • ${vaga.local || 'Remoto'}</p>
          <p class="descricao">${vaga.descricao}</p>
        </div>
        <div class="vaga-actions">
          <button class="btn-detalhes" data-id="${index}">Ver detalhes</button>
          <button class="btn-candidatar" data-id="${index}">Candidatar-se</button>
        </div>
      `;
      vagasList.appendChild(vagaCard);
    });

    document.querySelectorAll(".btn-detalhes").forEach(btn => {
      btn.onclick = () => {
        const vagaCard = btn.closest(".vaga-card");
        let detalhes = vagaCard.querySelector(".detalhes-vaga");

        if (!detalhes) {
          detalhes = document.createElement("div");
          detalhes.className = "detalhes-vaga";
          detalhes.style.marginTop = "10px";
          detalhes.style.background = "#E8F0FF";
          detalhes.style.padding = "10px";
          detalhes.style.borderRadius = "8px";
          detalhes.style.fontSize = "14px";
          detalhes.style.color = "#2E58A4";

          let vagaData;
          if (parseInt(btn.dataset.id) >= 0) {
            vagaData = vagas[btn.dataset.id];
          } else {
            const fixas = {
              "-1": { descricao: "Trabalhe com React, HTML, CSS e JavaScript em times ágeis.", salario: "A combinar" },
              "-2": { descricao: "Planejamento de campanhas e análise de métricas.", salario: "A combinar" },
              "-3": { descricao: "Prospecção e gestão de contas.", salario: "A combinar" }
            };
            vagaData = fixas[btn.dataset.id];
          }

          detalhes.innerHTML = `
            <p><strong>Descrição completa:</strong> ${vagaData.descricao}</p>
            <p><strong>Requisitos:</strong> Experiência relevante na área e conhecimento técnico.</p>
            <p><strong>Benefícios:</strong> Vale-refeição, plano de saúde, home office parcial.</p>
            <p><strong>Salário:</strong> ${vagaData.salario}</p>
          `;
          vagaCard.appendChild(detalhes);
        } else {
          detalhes.style.display = detalhes.style.display === "none" ? "block" : "none";
        }
      };
    });

    document.querySelectorAll(".btn-candidatar").forEach(btn => {
      btn.onclick = () => {
        const vagaCard = btn.closest(".vaga-card");
        if (!vagaCard.querySelector(".status-candidatura")) {
          const status = document.createElement("span");
          status.className = "status-candidatura";
          status.textContent = "Candidatura enviada!";
          status.style.marginLeft = "10px";
          status.style.fontWeight = "600";
          status.style.color = "#1C3973";
          vagaCard.querySelector(".vaga-actions").appendChild(status);
        }
      };
    });
  };

  const filtrarVagas = () => {
    const termo = searchInput.value.trim().toLowerCase();
    const filtradas = vagas.filter(vaga =>
      vaga.titulo.toLowerCase().includes(termo) ||
      vaga.empresa.toLowerCase().includes(termo) ||
      vaga.descricao.toLowerCase().includes(termo)
    );
    mostrarVagas(filtradas);
  };

  searchButton.addEventListener("click", filtrarVagas);
  searchInput.addEventListener("keypress", e => {
    if (e.key === "Enter") {
      e.preventDefault();
      filtrarVagas();
    }
  });

  if (limparVagasBtn) {
    limparVagasBtn.addEventListener("click", () => {
      localStorage.removeItem("vagas");
      vagas = [];
      vagasList.querySelectorAll(".vaga-dinamica").forEach(el => el.remove());
    });
  }

  mostrarVagas(vagas);
});

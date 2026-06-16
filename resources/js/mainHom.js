const slides = document.querySelectorAll('.slide');
let currentIndex = 0;
const totalSlides = slides.length;
const intervalTime = 7000;

slides[currentIndex].classList.add('active');

function nextSlide() {
  slides[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % totalSlides;
  slides[currentIndex].classList.add('active');
}

setInterval(nextSlide, intervalTime);

const buscarBtn = document.getElementById("buscar");
const inputBusca = document.querySelector(".search-box input");

buscarBtn.addEventListener("click", () => {
  const termo = inputBusca.value.trim();
  if (termo !== "") {
    const url = `vagas.html?busca=${encodeURIComponent(termo)}`;
    window.location.href = url;
  } else {
    alert("Digite uma palavra-chave para buscar!");
  }
});

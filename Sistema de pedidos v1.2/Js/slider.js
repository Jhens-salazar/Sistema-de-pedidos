// Obtén la lista de elementos del slider
const sliderList = document.querySelector('.slider');

// Obtén la lista de elementos li del slider
const slides = sliderList.querySelectorAll('li');

let currentSlide = 0;

// Función para mostrar el siguiente slide
function showNextSlide() {
  // Oculta el slide actual
  slides[currentSlide].style.opacity = 0;
  
  // Actualiza el índice del slide actual
  currentSlide = (currentSlide + 1) % slides.length;
  
  // Muestra el siguiente slide
  slides[currentSlide].style.opacity = 1;
}

// Inicia el intervalo para cambiar de slide cada 5 segundos
setInterval(showNextSlide, 5000);

const thumbnails = document.querySelectorAll('.thumbnail');
const mainImage = document.getElementById('main-image');

thumbnails.forEach(thumbnail => {
  thumbnail.addEventListener('click', () => {
    // cambia la imagen principal a la imagen de la miniatura seleccionada
    mainImage.src = thumbnail.src;
    
    // cambia la clase activa de la miniatura seleccionada
    thumbnails.forEach(t => t.classList.remove('active'));
    thumbnail.classList.add('active');
  });
});

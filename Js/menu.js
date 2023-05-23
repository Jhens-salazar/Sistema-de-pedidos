const perfilLink = document.querySelector('.perfil > a');

perfilLink.addEventListener('click', () => {
  const perfilMenu = document.querySelector('.perfil');
  perfilMenu.classList.toggle('active');
});

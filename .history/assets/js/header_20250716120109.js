const links = document.querySelectorAll('nav a');
const currentURL = window.location.pathname;

links.forEach(link => {
  if (link.getAttribute('href') === currentURL) {
    link.classList.add('active');
  }
});
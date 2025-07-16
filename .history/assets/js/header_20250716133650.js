// логіка вікривання меню
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('nav');

    burger.addEventListener('click', function() {
        burger.classList.toggle('open');
        nav.classList.toggle('open');
    });
});





let lastScroll = window.scrollY;
let header = document.querySelector('header');
let scrollUpDistance = 0;
let scrollDownDistance = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;

  // Скрол вниз
  if (currentScroll > lastScroll) {
    scrollUpDistance = 0;
    scrollDownDistance += currentScroll - lastScroll;

    if (scrollDownDistance > 50) {
      header.classList.add('hidden');
    }
  }

  // Скрол вгору
  else if (currentScroll < lastScroll) {
    scrollDownDistance = 0;
    scrollUpDistance += lastScroll - currentScroll;

    if (scrollUpDistance > 30) {
      header.classList.remove('hidden');
    }
  }

  lastScroll = currentScroll;
});

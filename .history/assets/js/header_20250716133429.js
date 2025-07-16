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
let isHeaderFixed = false;

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;
  const scrollDelta = currentScroll - lastScroll;

  // Скролимо вниз
  if (scrollDelta > 0 && currentScroll > 50) {
    // ховати хедер
    header.classList.remove('show');
    isHeaderFixed = false;
  }

  // Скролимо вгору
  if (scrollDelta < 0) {
    if (!isHeaderFixed) {
      header.classList.add('show');
      isHeaderFixed = true;
    }
  }

  lastScroll = currentScroll;
});

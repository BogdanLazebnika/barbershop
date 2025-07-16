// логіка вікривання меню
document.addEventListener('DOMContentLoaded', function () {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav');
  const header = document.querySelector('header');

  // Відкривання/закривання по кліку на бургер
  burger.addEventListener('click', function (e) {
    e.stopPropagation(); // не передаємо клік вище
    burger.classList.toggle('open');
    nav.classList.toggle('open');
    header.classList.toggle('open');
  });

  // Закриття при кліку поза шапкою/меню
  document.addEventListener('click', function (e) {
    const isClickInside = header.contains(e.target);

    if (!isClickInside && nav.classList.contains('open')) {
      burger.classList.remove('open');
      nav.classList.remove('open');
    }
  });

  // Закриття при скролі поза меню, якщо відкрите
  window.addEventListener('scroll', function () {
    const navIsOpen = nav.classList.contains('open');

    if (navIsOpen) {
      burger.classList.remove('open');
      nav.classList.remove('open');
    }
  });
});


// стилізація шапки
let lastScroll = window.scrollY;
let header = document.querySelector('header');
let scrollUpDistance = 0;
let scrollDownDistance = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;

  // Перевірка, чи меню відкрите
  const menuIsOpen = document.querySelector('.nav').classList.contains('open');
  if (menuIsOpen) {
    return; // Якщо меню відкрите — не ховаємо шапку
  }

  // ✅ Додаємо фон, якщо не на самому верху
  if (currentScroll > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }

  // Скрол вниз
  if (currentScroll > lastScroll) {
    scrollUpDistance = 0;
    scrollDownDistance += currentScroll - lastScroll;

    if (scrollDownDistance > 250) {
      header.classList.add('hidden');
    }
  }

  // Скрол вгору
  else if (currentScroll < lastScroll) {
    scrollDownDistance = 0;
    scrollUpDistance += lastScroll - currentScroll;

    if (scrollUpDistance > 200) {
      header.classList.remove('hidden');
    }
  }

  lastScroll = currentScroll;
});

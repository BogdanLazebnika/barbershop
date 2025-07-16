// логіка вікривання меню
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('nav');

    burger.addEventListener('click', function() {
        burger.classList.toggle('open');
        nav.classList.toggle('open');
    });
});
/* фіксуємо хедер але якщо скрол до низу то немає фіксації */
window.addEventListener('scroll', function() {
    
})
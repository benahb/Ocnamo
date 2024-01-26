import './bootstrap';



window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

function toggleMenu() {
    const menutoggle = document.querySelector('.menutoggle');
    const navbar = document.querySelector('.navbar');
    menutoggle.classList.toggle('active');
    navbar.classList.toggle('active');
}

const menutoggle = document.querySelector('.menutoggle');
menutoggle.addEventListener('click', function () {
    toggleMenu();
});
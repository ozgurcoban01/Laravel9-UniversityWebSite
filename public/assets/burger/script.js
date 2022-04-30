var nav = document.querySelector('.nav');
var toggle = document.querySelector('.hamburger');
var navItems = nav.querySelectorAll('.nav__link');

toggle.addEventListener('click', toggleNav);

function toggleNav() {

    // Show Nav
    nav.classList.toggle('active');

    // Transform Hamburger into 'X'
    toggle.classList.toggle('active');

    // Show Nav Items
    for (var i = 0, ii = navItems.length; i < ii; i++) {
        navItems[i].classList.toggle('active');
    }
}

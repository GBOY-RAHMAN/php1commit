// script.js

document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const menuOpenIcon = document.getElementById("menu-open-icon");
    const menuCloseIcon = document.getElementById("menu-close-icon");

    menuToggle.addEventListener("click", function() {
        mobileMenu.classList.toggle("hidden");
        menuOpenIcon.classList.toggle("hidden");
        menuCloseIcon.classList.toggle("hidden");
    });
});

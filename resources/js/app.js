import "./bootstrap";
import "flowbite";
import AOS from "aos";
import "aos/dist/aos.css";

// Initialize AOS
AOS.init();

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const navLinks = document.querySelectorAll(".nav-link");

    // Scroll Effect
    if (navbar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
                navLinks.forEach((link) => link.classList.add("scrolled"));
            } else {
                navbar.classList.remove("scrolled");
                navLinks.forEach((link) => link.classList.remove("scrolled"));
            }
        });
    }

    // Toggle Mobile Menu
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }
});

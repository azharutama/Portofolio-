import "./bootstrap";
import "flowbite";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    // Scroll Effect
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Toggle Mobile Menu
    menuBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });
});

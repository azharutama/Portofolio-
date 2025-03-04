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
    const textElement = document.getElementById("text");
    const cursorElement = document.querySelector(".cursor");
    const heroSection = document.getElementById("home");

    const text = "Welcome to My Portfolio";
    let index = 0;
    let isTyping = false;

    // 👉 Optimized Scroll Effect
    window.addEventListener("scroll", function () {
        if (!navbar) return;

        let scrollHeight = window.scrollY;
        let triggerHeight = 1000; // Sesuaikan sesuai kebutuhan

        if (scrollHeight > triggerHeight) {
            navbar.classList.add("scrolled");
            navLinks.forEach((link) => link.classList.add("scrolled"));
        } else {
            navbar.classList.remove("scrolled");
            navLinks.forEach((link) => link.classList.remove("scrolled"));
        }
    });

    // 👉 Toggle Mobile Menu
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // 👉 Efek Mengetik (Typing Effect)
    function typeEffect() {
        if (index < text.length) {
            textElement.textContent += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100); // Kecepatan efek ketik (100ms per karakter)
        } else {
            cursorElement.style.animation = "blink 0.8s infinite"; // Kursor berkedip setelah selesai mengetik
        }
    }

    function resetTypingEffect() {
        if (!isTyping) {
            isTyping = true;
            textElement.textContent = ""; // Kosongkan teks sebelum mulai ulang
            cursorElement.style.animation = "none"; // Hentikan animasi berkedip saat mengetik ulang
            index = 0;
            typeEffect();
        }
    }

    // 👉 Observer untuk restart efek ketik saat #home masuk viewport
    if (heroSection) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        resetTypingEffect();
                    } else {
                        isTyping = false;
                    }
                });
            },
            { threshold: 0.5 }
        );

        observer.observe(heroSection);
    }
});

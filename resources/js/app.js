import "./bootstrap";
import "flowbite";
import AOS from "aos";
import "aos/dist/aos.css";

// Init AOS
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

    // Scroll: tambah class untuk efek blur dan bg gelap
    window.addEventListener("scroll", () => {
        if (!navbar) return;
        if (window.scrollY > 10) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Toggle mobile menu
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // Typing effect
    function typeEffect() {
        if (index < text.length) {
            textElement.textContent += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100);
        } else {
            cursorElement.style.animation = "blink 0.8s infinite";
        }
    }

    function resetTypingEffect() {
        if (!isTyping) {
            isTyping = true;
            textElement.textContent = "";
            cursorElement.style.animation = "none";
            index = 0;
            typeEffect();
        }
    }

    // Restart typing saat elemen #home masuk viewport
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

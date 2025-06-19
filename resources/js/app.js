import './bootstrap';
import './header.js';
import './about.js';
import { animateElements, resetAnimation, showSlide, nextSlide } from './slider.js';
import './carusel.js';
import { showContent, openModal, closeModal, setupModalClickOutside } from './popular';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.slider-image');
    let currentIndex = 0;

    const titleElement = document.getElementById('slider-title');
    const subtitleElement = document.getElementById('slider-subtitle');
    const buttonElement = document.getElementById('slider-button');

    function animateElements() {
        titleElement.classList.add('animate');
        subtitleElement.classList.add('animate');
        buttonElement.classList.add('animate');
    }

    function resetAnimation() {
        titleElement.classList.remove('animate');
        subtitleElement.classList.remove('animate');
        buttonElement.classList.remove('animate');
    }

    function showSlide(index) {
        resetAnimation();

        images.forEach((img, i) => {
            img.classList.toggle('active', i === index);
            img.style.opacity = i === index ? '1' : '0';
        });

        const currentSlide = images[index];
        setTimeout(() => {
            titleElement.textContent = currentSlide.dataset.title;
            subtitleElement.textContent = currentSlide.dataset.subtitle;
            buttonElement.textContent = currentSlide.dataset.buttonText;
            buttonElement.href = currentSlide.dataset.buttonLink;
            animateElements();
        }, 200); // Небольшая задержка перед анимацией текста
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 5000);

    // Инициализация первого слайда
    animateElements();
});

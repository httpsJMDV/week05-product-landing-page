import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import gsap from 'gsap';

window.Alpine = Alpine;
window.gsap = gsap;
window.AOS = AOS;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 750,
        easing: 'ease-out-cubic',
        once: true,
        offset: 60,
    });
});

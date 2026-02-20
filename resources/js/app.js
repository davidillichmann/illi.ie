import './bootstrap';

// Rotating headline
const words = ['developer', 'problem solver', 'web guy', 'build partner', 'solution'];
let current = 0;

function rotateWord() {
    const el = document.getElementById('rotating-word');
    if (!el) return;

    el.style.opacity = '0';

    setTimeout(() => {
        current = (current + 1) % words.length;
        el.textContent = words[current];
        el.style.opacity = '1';
    }, 300);
}

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('rotating-word');
    if (el) {
        el.style.transition = 'opacity 0.3s ease';
        setInterval(rotateWord, 2500);
    }
});

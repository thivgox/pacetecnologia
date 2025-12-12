document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation Toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Back to Top Button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Client-side Form Validation
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            const email = contactForm.querySelector('input[type="email"]').value;
            const name = contactForm.querySelector('input[name="name"]').value;
            
            if (name.length < 2) {
                e.preventDefault();
                alert('Por favor, insira um nome válido.');
                return;
            }
            
            if (!email.includes('@')) {
                e.preventDefault();
                alert('Por favor, insira um e-mail válido.');
                return;
            }
        });
    }
});
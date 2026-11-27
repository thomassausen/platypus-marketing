import '../css/app.css';

if(import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        console.log('HMR');
    });
}

// Mobile navigation toggle
const navToggle = document.querySelector('[data-nav-toggle]');
const navigation = document.querySelector('[data-nav]');

if (navToggle && navigation) {
    const setOpen = (open) => {
        navigation.classList.toggle('hidden', !open);
        navToggle.setAttribute('aria-expanded', String(open));
        navToggle.setAttribute('aria-label', open ? 'Menü schließen' : 'Menü öffnen');
    };

    navToggle.addEventListener('click', () => {
        setOpen(navToggle.getAttribute('aria-expanded') !== 'true');
    });

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
            setOpen(false);
            navToggle.focus();
        }
    });
}

// Package overview: clicking a package highlights its row, dot and card
document.querySelectorAll('[data-package-overview]').forEach((root) => {
    const pick = (number) => {
        root.querySelectorAll('[data-package-row]').forEach((element) => {
            element.style.opacity = element.dataset.packageRow === number ? '' : '0.35';
        });
        root.querySelectorAll('[data-package-dot]').forEach((dot) => {
            dot.classList.toggle('bg-gold', dot.dataset.packageDot === number);
            dot.classList.toggle('bg-white', dot.dataset.packageDot !== number);
        });
        root.querySelectorAll('[data-package-card]').forEach((card) => {
            card.classList.toggle('border-ink', card.dataset.packageCard === number);
            card.classList.toggle('border-white', card.dataset.packageCard !== number);
        });
        root.querySelectorAll('[data-package-pick]').forEach((button) => {
            button.setAttribute('aria-pressed', String(button.dataset.packagePick === number));
        });
    };

    root.querySelectorAll('[data-package-pick]').forEach((button) => {
        button.addEventListener('click', () => pick(button.dataset.packagePick));
    });
});

// Intersection Observer for Fade-in Animations
document.addEventListener('DOMContentLoaded', () => {
    // No fade-in for people who reduced motion in their system settings
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all sections except the first hero section
    document.querySelectorAll('section').forEach((section, index) => {
        // Skip the first section if it's at the top (hero)
        if (index === 0 && section.getBoundingClientRect().top < 200) {
            return;
        }
        section.classList.add('fade-in-section');
        observer.observe(section);
    });
});


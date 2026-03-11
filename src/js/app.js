import '../css/app.css';

if(import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        console.log('HMR');
    });
}

// Intersection Observer for Fade-in Animations
document.addEventListener('DOMContentLoaded', () => {
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


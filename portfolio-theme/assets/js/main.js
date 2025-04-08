document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll for nav
    document.querySelectorAll('.main-nav a').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute('href'));
            target.scrollIntoView({ behavior: 'smooth' });
            document.querySelector('.page-transition').classList.add('active');
            setTimeout(() => {
                document.querySelector('.page-transition').classList.remove('active');
            }, 500);
        });
    });

    // Project card interaction
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('click', () => {
            alert(`Opening ${card.querySelector('h3').textContent}`);
        });
    });

    // Typewriter effect for greeting
    const greeting = document.querySelector('.greeting-text');
    if (greeting) {
        const text = greeting.dataset.name;
        greeting.textContent = '';
        let i     = 0;
        function type() {
            if (i < text.length) {
                greeting.textContent += text.charAt(i);
                i++;
                setTimeout(type, 100);
            }
        }
        type();
    }
});
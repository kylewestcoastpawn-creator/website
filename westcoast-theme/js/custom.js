/* West Coast Pawn & Gun — Custom JS */

// Age Verification
(function() {
    var gate = document.getElementById('ageGate');
    if (!gate) return;
    if (sessionStorage.getItem('ageVerified') === 'true') {
        gate.style.display = 'none';
    } else {
        if (document.body.classList.contains('home-page')) {
            setTimeout(function() { gate.style.display = 'flex'; }, 3500);
        } else {
            gate.style.display = 'flex';
        }
    }
})();

function verifyAge() {
    var gate = document.getElementById('ageGate');
    if (gate) gate.style.display = 'none';
    sessionStorage.setItem('ageVerified', 'true');
}

// Hamburger Nav Toggle
function toggleNav() {
    var navLinks = document.getElementById('navLinks');
    var btn = document.getElementById('hamburger');
    if (!navLinks || !btn) return;
    var isOpen = navLinks.classList.toggle('open');
    btn.classList.toggle('open', isOpen);
    btn.setAttribute('aria-expanded', String(isOpen));
}

// Close nav on link click (mobile)
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.nav-links a').forEach(function(link) {
        link.addEventListener('click', function() {
            var navLinks = document.getElementById('navLinks');
            var btn = document.getElementById('hamburger');
            if (navLinks) navLinks.classList.remove('open');
            if (btn) {
                btn.classList.remove('open');
                btn.setAttribute('aria-expanded', 'false');
            }
        });
    });

    // Enable scroll animations only when JS is working
    document.documentElement.classList.add('js-animations');

    // Scroll Animations
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.fade-in').forEach(function(el) {
        observer.observe(el);
    });

    // Back to Top
    var backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});

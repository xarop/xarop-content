// Import dependencies
import './bootstrap';

// Components
import './components/navigation';
import './components/forms';

// Initialize theme
document.addEventListener('DOMContentLoaded', () => {
    // Add smooth scrolling to all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add responsive menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', () => {
            primaryMenu.classList.toggle('active');
            menuToggle.setAttribute(
                'aria-expanded',
                menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
            );
        });
    }

    // Handle dropdown menus
    document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
        dropdown.addEventListener('click', (e) => {
            e.preventDefault();
            const parent = dropdown.parentElement;
            const submenu = parent.querySelector('.dropdown-menu');

            if (parent && submenu) {
                parent.classList.toggle('show');
                submenu.classList.toggle('show');
                dropdown.setAttribute(
                    'aria-expanded',
                    dropdown.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
                );
            }
        });
    });
}); 
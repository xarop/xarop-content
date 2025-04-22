// Navigation component functionality
export default class Navigation {
    constructor() {
        this.menuToggle = document.querySelector('.menu-toggle');
        this.primaryMenu = document.querySelector('.primary-menu');
        this.dropdowns = document.querySelectorAll('.dropdown-toggle');

        this.init();
    }

    init() {
        if (this.menuToggle && this.primaryMenu) {
            this.menuToggle.addEventListener('click', () => this.toggleMenu());
        }

        if (this.dropdowns.length) {
            this.dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', (e) => this.toggleDropdown(e, dropdown));
            });
        }
    }

    toggleMenu() {
        this.primaryMenu.classList.toggle('active');
        this.menuToggle.setAttribute(
            'aria-expanded',
            this.menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
        );
    }

    toggleDropdown(e, dropdown) {
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
    }
} 
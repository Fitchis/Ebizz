import './bootstrap';
import.meta.glob(["../images/**"]); 

    // JavaScript to toggle the dropdown menu
    const profileButton = document.getElementById('profile-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    profileButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
        dropdownMenu.classList.toggle('scale-95');
        dropdownMenu.classList.toggle('scale-100');
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', (event) => {
        if (!profileButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
    // hambureger menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const offcanvasMenu = document.getElementById('offcanvas-menu');
    const closeMenuButton = document.getElementById('close-menu-button');

    mobileMenuButton.addEventListener('click', () => {
        offcanvasMenu.style.display = 'block';
        setTimeout(() => {
            offcanvasMenu.classList.remove('translate-x-full');
        }, 0);
    });

    closeMenuButton.addEventListener('click', () => {
        offcanvasMenu.classList.add('translate-x-full');
        setTimeout(() => {
            offcanvasMenu.style.display = 'none';
        }, 300);
    });
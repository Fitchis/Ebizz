import './bootstrap';
import.meta.glob(["../images/**"]); 

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const offcanvasMenu = document.getElementById('offcanvas-menu');
    const closeMenuButton = document.getElementById('close-menu-button');

    mobileMenuButton.addEventListener('click', () => {
        offcanvasMenu.style.display = 'block'; // Show the off-canvas menu
        setTimeout(() => {
            offcanvasMenu.classList.remove('translate-x-full'); // Remove translate effect
        }, 0);
    });

    closeMenuButton.addEventListener('click', () => {
        offcanvasMenu.classList.add('translate-x-full'); // Add translate effect to hide
        setTimeout(() => {
            offcanvasMenu.style.display = 'none'; // Hide the menu after the animation
        }, 300); // Match this duration with your CSS transition duration
    });

    // Dropdown Menu Toggle
    const profileButton = document.getElementById('profile-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    profileButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden'); // Toggle the dropdown visibility
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', (event) => {
        if (!profileButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden'); // Hide dropdown if clicked outside
        }
    });
});
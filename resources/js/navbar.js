// resources/js/navbar.js
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.querySelector('.sticky-navbar');
    const mobileMenuLinks = mobileMenu.getElementsByTagName('a');

    // Toggle mobile menu
    function toggleMenu() {
        if (mobileMenu.classList.contains('-translate-y-full')) {
            mobileMenu.classList.remove('-translate-y-full');
            mobileMenu.classList.add('translate-y-0');
        } else {
            mobileMenu.classList.remove('translate-y-0');
            mobileMenu.classList.add('-translate-y-full');
        }
    }

    // Handle scroll behavior
    function handleScroll() {
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('bg-transparent');
            // Update text color when scrolled
            const navLinks = navbar.querySelectorAll('.nav-li');
            navLinks.forEach(link => link.classList.remove('text-white'));
            navLinks.forEach(link => link.classList.add('text-gray-800'));
        } else {
            navbar.classList.remove('scrolled');
            navbar.classList.add('bg-transparent');
            // Restore text color when at top
            const navLinks = navbar.querySelectorAll('.nav-li');
            navLinks.forEach(link => link.classList.remove('text-gray-800'));
            navLinks.forEach(link => link.classList.add('text-white'));
        }
    }

    // Event listeners
    mobileMenuButton.addEventListener('click', toggleMenu);
    closeMenuButton.addEventListener('click', toggleMenu);
    window.addEventListener('scroll', handleScroll);

    // Close menu when clicking on links
    Array.from(mobileMenuLinks).forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // Initial call to set correct state
    handleScroll();
});

import './bootstrap';

import './bootstrap';
import.meta.glob(["../images/**"]);
import 'livewire-sortable'



document.addEventListener("livewire:navigated", () => {

    const toggle = document.getElementById("theme-toggle");

    // Retrieve the saved theme from local storage or default to 'light'
    const currentTheme = localStorage.getItem("theme") || "light";
    document.documentElement.setAttribute("data-theme", currentTheme);

    // Set the checkbox state based on the current theme
    toggle.checked = currentTheme === "dark";

    toggle.addEventListener("change", () => {
        const newTheme = toggle.checked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    });


    /* let lastScrollTop = 0;
    const navbar = document.querySelector('.mynavbar');

    window.addEventListener('scroll', () => {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {

            navbar.style.transform = 'translateY(-100%)'; // Hide navbar
        } else {
            
            navbar.style.transform = 'translateY(0)'; // Show navbar
        }
        lastScrollTop = scrollTop;
    }); */


});






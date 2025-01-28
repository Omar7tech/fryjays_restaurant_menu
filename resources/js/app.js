import './bootstrap';
import.meta.glob(["../images/**"]);
import 'livewire-sortable'



document.addEventListener("livewire:navigated", () => {

    const toggle = document.getElementById("theme-toggle");
    const currentTheme = localStorage.getItem("theme") || "light";
    console.log(currentTheme);
    document.documentElement.setAttribute("data-theme", currentTheme);
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






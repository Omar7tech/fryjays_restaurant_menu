<footer class="footer bg-neutral text-neutral-content p-10">
    <aside>
        <img class="w-32" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Fry Jay's Logo">
        <p>
            Fry Jay's - A Jay's Brand
            <br />
            Serving Crispy Perfection Every Day!
            <br />
            Deep-fried chicken, burgers, wraps, and more—crafted for flavor lovers.
        </p>
    </aside>

    <div class="bg-neutral text-neutral-content text-center w-full p-1 rounded-lg shadow-sm mt-4">
        <p class="text-xs font-semibold">
            Developed by
            <a href="https://omar7tech.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-bold transition-all duration-300">
                Omar7Tech - Omar Abi Farraj
            </a>
        </p>
        <p class="text-xs">
            <span class="font-semibold">Contact:</span>
            <a href="tel:+96171387946" class="text-blue-600 hover:text-blue-800 font-bold transition-all duration-300">
                +961 71 387 946
            </a>
        </p>
    </div>




</footer>
<footer class="footer footer-center bg-neutral p-4 text-neutral-content">
    <aside>
        <p>&copy; <span id="currentYear"></span> Fry Jay's. All rights reserved.</p>
    </aside>
</footer>

<script>
    // Dynamically insert the current year
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>

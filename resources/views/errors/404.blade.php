<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen w-screen flex items-center justify-center bg-gray-100">
    <div class="text-center space-y-6">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="h-24" />
        </div>

        <!-- Error Message -->
        <h1 class="text-6xl font-bold text-gray-800">404</h1>
        <p class="text-lg text-gray-600">Oops! The page you are looking for doesn't exist.</p>

        <!-- Back Button -->
        <button onclick="goBack()" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Go Back
        </button>
    </div>

    <!-- JavaScript for Back Button -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>


<!-- Replace 'logo.png' with your logo path -->

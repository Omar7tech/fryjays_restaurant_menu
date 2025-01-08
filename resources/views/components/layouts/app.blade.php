<!DOCTYPE html>
<html data-theme="black">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <title>{{ $title ?? 'Fry Jay\'s' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/logo.png') }}">
</head>

<body>


    <x-nav.main />



    @if (!(request()->is('admin') || request()->is('admin/*')))
        <div
            class="absolute top-0 z-[-2] h-screen w-screen bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(255,255,255,0.1),rgba(255,255,255,0))]">
        </div>
    @endif
    <section id="main" class="p-3 md:p-5 lg:p-10">
        {{ $slot }}
    </section>

    @if (!(request()->is('admin') || request()->is('admin/*')))
        <x-footer.main />
    @endif

</body>

</html>

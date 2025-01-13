<!DOCTYPE html>
<html data-theme="black">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Fry Jay's - Login</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/logo.png') }}">
</head>

<body>
    <div class="flex justify-center">
        <div class="card w-96 bg-base-100 shadow-xl mt-20 mb-20">
            <div class="card-body">
                <h2 class="card-title">Login!</h2>

                <!-- Display all errors here -->
                @if ($errors->any())
                    <div role="alert" class="alert alert-error mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    <label class="input input-bordered flex items-center gap-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" name="username" class="grow" placeholder="Username"
                            value="{{ old('username') }}" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" name="password" class="grow" placeholder="Password" />
                    </label>

                    <div class="card-actions justify-end">
                        <button type="submit" class="btn btn-primary w-full">Login</button>
                    </div>
                </form>

                <div class="text-sm flex justify-between mt-5">
                    <div>
                        <a class="link link-primary " href="#">Forgot Password?</a>
                    </div>
                    <div>
                        <a class="link link-primary"
                            href="https://wa.me/71387946?text=Hello, I am from Fryjays. I am experiencing issues logging into the admin dashboard. Could you please assist me?">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

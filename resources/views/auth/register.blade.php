<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - {{ $pageTitle }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">

            <div class="w-full">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-gray-900">Register</h1>
                    <p class="mt-2 text-gray-500">Sign up below to access your account</p>
                </div>
                <div class="mt-5">
                    <form action="{{ route('register') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="relative mt-6">
                            <input type="name" name="name" id="name" placeholder="Full Name" required
                                autofocus
                                class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                autocomplete="off" />
                            <label for="name"
                                class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Full
                                Name</label>
                            @error('name')
                                <span class="mt-2 text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative mt-6">
                            <input type="email" name="email" id="email" placeholder="Email Address" required
                                class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                autocomplete="off" />
                            <label for="email"
                                class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email
                                Address</label>
                            @error('email')
                                <span class="mt-2 text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative mt-6">
                            <input type="number" name="phone" id="phone" placeholder="Phone Number" required
                                class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                autocomplete="off" />
                            <label for="phone"
                                class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Phone
                                Number</label>
                            @error('phone')
                                <span class="mt-2 text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative mt-6">
                                <input type="password" name="password" id="password" placeholder="Password" required
                                    class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                    autocomplete="new-password" />
                                <label for="password"
                                    class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password</label>
                                @error('password')
                                    <span class="mt-2 text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative mt-6">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm Password" required
                                    class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                    autocomplete="new-password" />
                                <label for="password_confirmation"
                                    class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Confirm
                                    Password</label>
                                @error('password_confirmation')
                                    <span class="mt-2 text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="my-6">
                            <button type="submit"
                                class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Register</button>
                        </div>
                        <p class="text-center text-sm text-gray-500">Sudah punya akun?
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">Masuk
                            </a>.
                        </p>
                        <a href="{{ route('home') }}"
                            class="items-center flex justify-center text-center text-sm text-gray-500 mt-4 hover:underline">
                            Kembali ke halaman utama</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        @vite('resources/css/app.css')

        <!-- Styles -->
        <style> body {font-family: 'Poppins', sans-serif;} </style>

        <link crossorigin="anonymous" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet"/>
        <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>

<section class="px-2 pt-32 bg-white md:px-0 tails-selected-element">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-gray-900 sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Perizinan Akses <span class="block mt-1 text-purple-500 lg:inline lg:mt-0" data-primary="purple-500">Server DFS</span></span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-500 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            Mau akses server DSF? Silahkan Minta Perizinan Dulu Ya Sob!
        </p>
        <div class="relative flex flex-col justify-center md:flex-row md:space-x-4">
            <a href="{{ route('form.index') }}" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-purple-500 rounded-md md:mb-0 hover:bg-purple-700 md:w-auto" data-primary="purple-500" data-rounded="rounded-md">
                Kirim Permintaan
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
    <div class="container items-center max-w-lg px-5 mx-auto mt-16 text-center">
        <img src={{ asset('images/1.png') }} class="">
    </div>
</section>
</html>
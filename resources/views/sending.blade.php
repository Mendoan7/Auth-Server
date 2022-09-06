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
    <div class="relative p-8 text-center border border-gray-200 rounded-lg">
        <h2 class="text-2xl font-medium">
        Permintaanmu Terkirim
        </h2>
    
        <p class="mt-4 text-sm text-gray-500">
        Tunggu 1x24jam, Pemberitahuan persetujuan akan dikirimkan melalui email kamu.
        </p>
    
        <a
        href=""
        class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500"
        >
        Kembali
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            class="flex-shrink-0 w-4 h-4 ml-3">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
        </a>
    </div>
    </div>
</section>
</html>
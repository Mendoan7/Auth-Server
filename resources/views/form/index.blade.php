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

    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<section class="bg-gray-100">
    <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
        <div class="lg:py-12 lg:col-span-2">
          <p class="max-w-xl text-lg">
            Lakukan permintaan akses server terlebih dahulu, dengan melengkapi form yang tersedia.
          </p>
  
          <div class="mt-8">
            <address class="mt-2 not-italic">Jika ada yang ingin ditanyakan, please contact us.
              Terimakasih banyak atas perhatiannya dan mohon kerjasamanya.</address>
            <a href="" class="text-2xl font-bold text-purple-600"> 085815243464 </a>
          </div>
        </div>
  
        <div class="p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3">
          <form action="" class="space-y-4">
            <div>
              <label class="sr-only" for="name">Name</label>
              <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Nama Lengkap" type="text" id="name" />
            </div>
  
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div>
                <label class="sr-only" for="email">Email</label>
                <input
                  class="w-full p-3 text-sm border-gray-200 rounded-lg"
                  placeholder="Email"
                  type="email"
                  id="email"
                />
              </div>
  
              <div>
                <label class="sr-only" for="phone">Role</label>
                <input
                  class="w-full p-3 text-sm border-gray-200 rounded-lg"
                  placeholder="Status"
                  type="tel"
                  id="phone"
                />
              </div>
            </div>
  
            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                  <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white block w-full p-3 border bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Kantor Cabang <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                </div>
  
                <div>
                  <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white block w-full p-3 border bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Server Tujuan <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                </div>
            
                <div date-rangepicker="" class="flex items-center">
                  <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full pl-10 p-2.5" placeholder="Mulai">
                  </div>
                    <span class="mx-4 text-gray-500">sampai</span>
                    <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full pl-10 p-2.5" placeholder="Selesai">
                    </div>
                  </div>
            </div>
  
            <div>
              <label class="sr-only" for="message">Message</label>
              <textarea
                class="w-full p-3 text-sm border-gray-200 rounded-lg"
                placeholder="Tujuan Akses Server?"
                rows="8"
                id="message"
              ></textarea>
            </div>
  
            <div class="mt-4">
              <button
                type="submit"
                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto"
              >
                <span class="font-medium"> Kirim Permintaan </span>
  
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 ml-3"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</html>
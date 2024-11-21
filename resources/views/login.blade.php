<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body class="min-w-md h-screen bg-white ">
    <x-navbar></x-navbar>
    <main class="px-16 flex justify-center grid-cols-2 py-20 bg-gradient-to-b h-[90vh] from-biru1 to-biru2">
        <div class="flex flex-col items-center w-[72vh] h-[64vh] bg-white rounded-3xl shadow-3xl px-12">
            <p class="text-5xl mt-10 font-display2 font-semibold text-biru2">Login</p>
            <p class="text-2xl mt-4 font-display2 font-semibold text-biru2">Masukkan Username dan Token</p>
            <form action="" class="w-full py-4 text-biru1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 relative left-3 top-9 stroke-biru1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>                  
                <input type="text" autocomplete="off" placeholder="Username" name="Username" id="username" class="pl-11 w-full h-12 border-none ring-[1px] ring-biru1 ring-opacity-50 focus:outline-none focus:ring-[2px] focus:ring-biru1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[22px] relative left-3 top-[36px] stroke-biru1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                  </svg>                  
                <input type="password" autocomplete="off" placeholder="Token" name="Token" id="token" class="pl-11 w-full h-12 border-none ring-[1px] ring-biru1 ring-opacity-50 focus:outline-none focus:ring-[2px] focus:ring-biru1 rounded-md">
            </form>
            <div class="flex gap-2">    
                <p class="text-lg mt-3 text-biru1 font-medium">Informasi:<p class="text-lg mt-3 text-biru1">Angka nol = Ø, huruf o = O</p></p>
            </div>
            <a href="/vote" class="text-center text-xl mt-8 bg-biru1 w-full h-12 text-white font-display2 rounded-lg shadow-xl">
                <button class="h-full">Masuk</button>
            </a>
        </div>
        <img src="img/300ppi/gtw1.png" class="h-[560px] absolute bottom-12 right-[300px] rotate-[18deg]" alt="">
        <img src="img/300ppi/gtw2.png" class="h-[560px] absolute bottom-12 left-[300px] rotate-[-18deg]" alt="">
        <img src="img/300ppi/orang1.png" class="h-[560px] absolute bottom-0 right-[30px]" alt="">
        <img src="img/300ppi/orang_1.png" class="h-[560px] absolute bottom-0 left-[30px]" alt="">
    </main>
</body>
</html>
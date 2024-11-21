<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-w-md h-screen bg-[#E3D8C6]">
    <x-navbar></x-navbar>
    <main class="flex flex-col items-center gap-3 pt-28 text-center">
        <p class="text-7xl text-coklat font-black font-display2">
            WELCOME
        </p>
        <p class="text-4xl text-coklat font-bold font-display2">
            E-KPKO 2024
        </p>
        <div class="w-96 mt-24">
            <hr class="w-full h-[6px] bg-gradient-to-r from-coklat via-coklat via-60% to-[#FFF8EE] to-60% rounded-lg">
            <p class="text-9xl text-coklat absolute top-[309px] left-[750px]">.</p>
            <p class="font-display2 font-bold absolute top-[430px] left-[530px] text-coklat text-sm">1:23</p>
            <p class="font-display2 font-bold absolute top-[430px] right-[530px] text-coklat text-sm">4:56</p>
            <a href="/vote">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 absolute top-[445px] left-[705px] fill-coklat">
                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 absolute top-[445px] left-[635px] fill-coklat">
                <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>              
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 absolute top-[445px] left-[775px] fill-coklat">
                <path fill-rule="evenodd" d="M14.47 2.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H9a5.25 5.25 0 1 0 0 10.5h3a.75.75 0 0 1 0 1.5H9a6.75 6.75 0 0 1 0-13.5h10.19l-4.72-4.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
            <img src="img/asset.png" class="absolute top-[360px] right-[180px] w-[320px] rotate-45" alt="">
        </div>
        p-6 py-5 flex flex-col
        <p class="text-base text-biru3 font-semibold">
            "Di bawah bendera demokrasi, kita belajar bahwa kekuatan sejati berasal dari kebersamaan, bukan dominasi."
        </p>
        <p class="text-base text-biru3 font-semibold italic self-end mt-1">
            - Martin Luther King Jr.
        </p>
        <a href="https://www.instagram.com/osis_stematel/" class="text-base text-biru3 font-bold mt-auto self-center">@osis_stematel</a>
    </main>
</body>
</html>
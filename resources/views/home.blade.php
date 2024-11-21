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
<body class="min-w-md max-w-screen-2xl flex flex-col items-center h-screen bg-white ">
    <x-navbar></x-navbar>
    <main class="px-16 grid-cols-2 py-14 bg-gradient-to-b h-[90vh] w-full from-biru1 to-biru2">
        <div class="relative flex flex-col font-display text-white z-10">
            <p class="text-6xl font-bold mb-2">Selamat Datang di E-KPKO</p>
            <p class="text-3xl font-bold mb-1">Pemilihan Ketua & Wakil Ketua OSIS</p>
            <p class="text-3xl font-bold">SMK Telkom Purwokerto Periode 2024/2025</p>
            <button class="bg-white rounded-md w-[188px] h-12 mt-4  text-biru2 hover:bg-slate-300 hover:text-biru1 transition-colors duration-200 ease-in text-3xl text-center pt-[2px] font-medium">
                <a href="/login">
                    Pilih Sekarang!
                </a>
            </button>
        </div>
        <img src="/img/300ppi/orang_1.png" class="absolute bottom-0 left-[60px] w-60 z-0" alt="">
        <img src="/img/300ppi/orang1.png" class="absolute bottom-0 left-[330px] w-60 z-0" alt="">
        <img src="/img/300ppi/votingbox.png" class="w-[540px] absolute bottom-0 right-[152px] z-10" alt="">
        <img src="img/300ppi/gtw1.png" class="h-[580px] absolute bottom-[90px] right-10" alt="">
        <img src="img/300ppi/gtw2.png" class="h-[580px] absolute bottom-[90px] right-[620px]" alt="">
        <img src="/img/300ppi/cahaya.png" class="w-[680px] absolute bottom-[240px] right-[80px] z-10" alt="">
    </main>
</body>
</html>
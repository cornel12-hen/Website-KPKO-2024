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
<body class="w-screen h-screen overflow-hidden bg-[#E3D8C6]">
    <x-navbar></x-navbar>
    <main class="flex flex-col w-[30vw] h-[70%] justify-self-center items-center justify-center">
        <p class="text-[12vh] font-display2 text-biru3 font-bold">Oops!</p>
        <p class="text-[2vh] font-display2 font-bold text-biru3 text-center">Sepertinya Pemilihan sudah ditutup nih...</p>
    </main>
</body>
</html> 
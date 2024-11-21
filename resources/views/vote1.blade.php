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
<body class="min-w-md h-fit bg-[#E3D8C6]">
    <x-navbar></x-navbar>
    <main class="py-20 px-16 w-full h-full">
        <p class="text-6xl text-biru3 font-bold text-center pb-6">PASLON 1</p>
        <div class="md:grid-cols-3 grid-cols-1 grid gap-6 h-fit">
            <div class="bg-white h-[424px] shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                <img src="img/300ppi/PDHAM.png" alt="Design Service" class="w-full h-64 object-cover" />
                <div class="p-8 pt-6 pb-6">
                    <p class="text-gray-600 font-semibold text-pkk">Ketua</p>
                    <p class="mb-4 font-bold text-xl">Isfahan Arya</p>
                    <p class="font-semibold text-gray-600 text-pkk">Wakil Ketua</p>
                    <p class="font-bold text-xl">Nazwa</p>
                </div>
            </div>
            <div>
                <div class="bg-white p-8 h-[300px] shadow-xl text-center rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                    <p class="text-2xl font-bold mb-8">Visi</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni! Assumenda magnam dolore totam ad iste dolorum nesciunt enim doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
                </div>
                <form action="{{ route('storeVote') }}" method="POST">
                    @csrf
                    <button name="nomor_urut" value="1" type="submit" class="bg-white p-8 mt-6 h-[100px] w-full shadow-xl text-center text-2xl font-bold rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                        Pilih
                    </button>
                </form>
            </div>
            <div class="bg-white p-8 h-[424px] shadow-xl text-center rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                <p class="text-2xl font-bold mb-8">Misi</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quibusdam impedit earum tempore nihil, sequi dolores distinctio possimus, omnis ad quasi amet, ducimus eum! Esse nulla quidem rerum adipisci. Quam non, dolore voluptas blanditiis optio assumenda, distinctio libero, minus ipsam perspiciatis ratione aspernatur mollitia suscipit facere sint debitis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi accusantium ut nesciunt molestias amet! Perspiciatis, ex! Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <p class="text-6xl text-biru3 font-bold text-center pb-6 mt-32">PASLON 2</p>
        <div class="md:grid-cols-3 grid-cols-1 grid gap-6 h-fit">
            <div class="bg-white h-[424px] shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                <img src="img/300ppi/PDHAM.png" alt="Design Service" class="w-full h-64 object-cover" />
                <div class="p-8 pt-6 pb-6">
                    <p class="text-gray-600 font-semibold text-pkk">Ketua</p>
                    <p class="mb-4 font-bold text-xl">Isfahan Arya</p>
                    <p class="font-semibold text-gray-600 text-pkk">Wakil Ketua</p>
                    <p class="font-bold text-xl">Nazwa</p>
                </div>
            </div>
            <div>
                <div class="bg-white p-8 h-[300px] shadow-xl text-center rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                    <p class="text-2xl font-bold mb-8">Visi</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, magni! Assumenda magnam dolore totam ad iste dolorum nesciunt enim doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>    
                </div>
                <form action="{{ route('storeVote') }}" method="POST">
                    @csrf
                    <button onclick="openModal()" type="submit" name="nomor_urut" value="2" class="bg-white p-8 mt-6 h-[100px] w-full shadow-xl text-center text-2xl font-bold rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                        Pilih
                    </button>
                </form>
            </div>
            <div class="bg-white p-8 h-[424px] shadow-xl text-center rounded-lg overflow-hidden transform hover:scale-105 transition duration-500">
                <p class="text-2xl font-bold mb-8">Misi</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quibusdam impedit earum tempore nihil, sequi dolores distinctio possimus, omnis ad quasi amet, ducimus eum! Esse nulla quidem rerum adipisci. Quam non, dolore voluptas blanditiis optio assumenda, distinctio libero, minus ipsam perspiciatis ratione aspernatur mollitia suscipit facere sint debitis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi accusantium ut nesciunt molestias amet! Perspiciatis, ex! Lorem ipsum dolor sit.</p>
            </div>
        </div>
    </main>
    <footer class="bg-biru3 w-full h-[10vh] flex flex-col text-center justify-center">
        <a href="https://www.instagram.com/osis_stematel/" class="text-base text-[#E3D8C6] font-bold self-center">@osis_stematel</a>
    </footer>
</body>
</html>
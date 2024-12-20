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
<body class="min-w-md h-full w-screen bg-[#E3D8C6] overflow-hidden overflow-y-scroll">
    <x-navbar></x-navbar>
    <main class="lg:hidden flex flex-col gap-2 p-8">
        <div class="h-full bg-black rounded-lg pt-[1.2vh]">
            <form action="{{ route('modal') }}" method="GET" class="flex items-center justify-center gap-[1.2vh] pb-[1.2vh]">
                @csrf
                <button type="submit" name="load" value="0" class="w-[5.6vh] h-[5.6vh] flex justify-center items-center">
                    <img src="img/atasan_2.png" alt="" class="w-[3vh] h-[3vh]">
                </button>
                <button type="submit" name="load" value="1" class="w-[5.6vh] h-[5.6vh] rounded-lg flex justify-center items-center">
                    <p class="text-[4.5vh] text-white font-bold mt-[0.1vh] font-display3">1</p>
                </button>
                <button type="submit" name="load" value="2" class="w-[5.6vh] h-[5.6vh] rounded-lg flex justify-center items-center">
                    <p class="text-[4.5vh] text-white font-bold mt-[0.1vh] font-display3">2</p>
                </button>
            </form>       
        </div>
        <div class="flex flex-col h-[90%] bg-black rounded-lg bg-gradient-to-b from-10% from-biru3 to-70% to-black -mb-5">
            <div class="flex flex-col w-full h-[33vh] p-6 gap-6 mb-[1vh] items-center">
                <img src="{{ asset($data['foto2']) }}" loading="lazy" class="w-[36vh] h-[36vh] rounded-lg">
                <div class="flex flex-col text-white -mt-2 w-full px-4">
                    <p class="font-medium text-[3vw] mt-[1.2vh]">For You Page!</p>
                    <p class="text-[8vw] font-extrabold font-display3 -mt-[1vh]">{{ $data['nomor_urut'] }}</p>
                    <p class="font-medium text-[2.25vw] font-display3 -mt-[0.6vh]">OSISTEL, MPK, and more</p>
                    <p class="font-medium text-[2.25vw] text-slate-300 mt-2">Made for You | SMK Telkom Purwokerto, 22 November 2024</p>
                </div>
            </div>
            <div class="flex flex-col bg-black/20 w-full h-[31vh] p-6 rounded-lg mt-[40vw] overflow-y-scroll">
                <div class="flex justify-between px-4">
                    <div class="flex gap-[2.7vw] items-center">
                        <img src="img/pausestart.png" alt="" class="h-[9vw] w-[9vw] mr-[0.2vw]">
                        <img src="img/Shuffle.png" alt="" class="h-[6vw] w-[5.4vw]">
                        <img src="img/plus.png" alt="" class="h-[5.1vw] w-[5.1vw]">
                        <img src="img/down.png" alt="" class="h-[5.1vw] w-[5.1vw]">
                        <img src="img/dot.png" alt="" class="h-auto w-[4.5vw]">
                    </div>
                </div>
                <div class="grid items-center gap-[1vw] grid-cols-[1fr_8fr_6fr_7fr] text-white px-4 mb-[1vh] w-full mt-[4vh]">
                    <p>#</p>
                    <p class="text-[1.8vh]">Title</p>
                    <p class="text-[1.8vh]">Album</p>
                    <p class="text-[1.8vh]">Date</p>
                </div>
                <hr class="border-[0.5px] border-slate-800">

                <div id="modal-trigger-visi-android" class="grid gap-[1.5vw] grid-cols-[1fr_8fr_6fr_7fr] text-white px-4 w-full mt-[2vh] items-center hover:bg-gray-800 py-[0.8vw] hover:cursor-pointer">
                    <p>1</p>
                    <div class="flex gap-[0.8vw]">
                        <img src="{{ asset($data['foto1']) }}" alt="" loading="lazy" class="w-[7.5vw] h-[7.5vw] rounded-md">
                        <div>
                            <p class="text-[3vw] font-medium">{{ $data['visi'] }}</p>
                            <p class="text-[2.1vw] text-slate-400 font-medium">{{ Str::limit($data['nama'], 12) }}</p>
                        </div>
                    </div>
                    <p class="text-[2.55vw] font-medium">E-KPKO 2024</p>
                    <p class="text-[2.55vw] font-medium">22 November 2024</p>
                </div>

                <div id="modal-trigger-misi-android" class="grid gap-[1.5vw] grid-cols-[1fr_8fr_6fr_7fr] text-white px-4 w-full mt-[2vh] items-center hover:bg-gray-800 py-[0.8vw] hover:cursor-pointer">
                    <p>1</p>
                    <div class="flex gap-[0.8vw]">
                        <img src="{{ asset($data['foto1']) }}" alt="" loading="lazy" class="w-[7.5vw] h-[7.5vw] rounded-md">
                        <div>
                            <p class="text-[3vw] font-medium">{{ $data['misi'] }}</p>
                            <p class="text-[2.1vw] text-slate-400 font-medium">{{ Str::limit($data['nama'], 12) }}</p>
                        </div>
                    </div>
                    <p class="text-[2.55vw] font-medium">E-KPKO 2024</p>
                    <p class="text-[2.55vw] font-medium">22 November 2024</p>
                </div>
            </div>
            {{-- <div>
                <img src="img/top.png" alt="" class="h-[20vh] rounded-b-lg">
            </div> --}}
        </div>

        {{-- Modal --}}
        {!! $data['kode2'] !!}

        <div id="modal-visi-android" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[80vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto3']) }}" alt="" loading="lazy" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[5%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-2xl font-body whitespace-pre-wrap">
{{ $data['nomor_urut'] ?? 'Tidak ada data' }} 
                    </p>
                    <p class="mb-[1.2vw] w-full text-white text-[15px] font-medium font-body whitespace-pre-wrap">
{{ $data['visi'] }}:
{{ $data['isivisi'] ?? 'Tidak ada data' }}   
                    </p>
                    <button id="close-modal-visi-android" class="mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <div id="modal-misi-android" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[60vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto3']) }}" alt="" loading="lazy" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[3%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-2xl font-body whitespace-pre-wrap">
{{ $data['nomor_urut'] ?? 'Tidak ada data' }} 
                    </p>
                    <p class="mb-[1.2vw] w-full text-white text-[15px] font-medium font-body whitespace-pre-wrap">
{{ $data['misi'] }}:
{{ $data['isimisi'] ?? 'Tidak ada data' }}   
                    </p>
                    <button id="close-modal-misi-android" class="mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
        <div id="modal-confirm-android" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[80vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto1']) }}" loading="lazy" alt="" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[5%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-[2vh] font-body whitespace-pre-wrap">
Apakah kamu yakin ingin
memilih {{ $data['nomor_urut'] ?? 'Tidak ada data' }}?
                    </p>
                    <div class="flex justify-around mb-[4vh]">
                        <form action="{{ route('storeVote') }}" method="POST">
                            @csrf
                            <button type="submit" name="nomor_urut" value="{{ $data['id'] }}" class="font-bold mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                                Ya
                            </button>
                        </form>
                        <button id="close-modal-confirm-android" class="font-bold mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                            Tidak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="max-lg:hidden grid grid-cols-[4.8vw_auto_25vw] gap-[0.5vw] h-full m-5 rounded-lg">
        <div class="h-full bg-black rounded-lg pt-[1.2vh]">
            <form action="{{ route('modal') }}" method="GET" class="flex flex-col items-center gap-[1.2vh] pt-[1.2vh]">
                @csrf
                <button type="submit" name="load" value="0" class="w-[5.6vh] h-[5.6vh] flex justify-center items-center">
                    <img src="img/atasan_2.png" alt="" class="w-[3vh] h-[3vh]">
                </button>
                <button type="submit" name="load" value="1" class="w-[5.6vh] h-[5.6vh] bg-[#E3D8C6] rounded-lg flex justify-center items-center">
                    <p class="text-[4.5vh] text-biru3 font-bold mt-[0.1vh] font-display3">1</p>
                </button>
                <button type="submit" name="load" value="2" class="w-[5.6vh] h-[5.6vh] bg-[#E3D8C6] rounded-lg flex justify-center items-center">
                    <p class="text-[4.5vh] text-biru3 font-bold mt-[0.1vh] font-display3">2</p>
                </button>
            </form>       
        </div>
        <div class="h-full bg-black rounded-lg bg-gradient-to-b from-10% from-biru3 to-70% to-black">
            <div class="flex w-full h-[33vh] p-6 gap-6 mb-[1vh]">
                <img src="{{ asset($data['foto2']) }}" loading="lazy" class="w-[28vh] h-[28vh] rounded-lg">
                <div class="flex flex-col text-white pt-5">
                    <p class="font-medium text-[2vh] mt-[1.2vh]">For You Page!</p>
                    <p class="text-[10vh] font-extrabold font-display3 -mt-[1vh]">{{ $data['nomor_urut'] }}</p>
                    <p class="font-medium text-[1.8vh] font-display3 -mt-[0.6vh]">OSISTEL, MPK, and more</p>
                    <p class="font-medium text-[1.8vh] text-slate-300 mt-2">Made for You | SMK Telkom Purwokerto, 22 November 2024</p>
                </div>
            </div>
            <div class="flex flex-col bg-black/20 w-full h-[40vh] p-6 rounded-lg">
                <div class="flex justify-between">
                    <div class="flex gap-[1.8vw] items-center">
                        <img src="img/pausestart.png" alt="" class="h-[6vh] w-[6vh] mr-[0.2vw]">
                        <img src="img/Shuffle.png" alt="" class="h-[4vh] w-[3.6vh]">
                        <img src="img/plus.png" alt="" class="h-[3.4vh] w-[3.4vh]">
                        <img src="img/down.png" alt="" class="h-[3.4vh] w-[3.4vh]">
                        <img src="img/dot.png" alt="" class="h-auto w-[3vh]">
                    </div>
                    <div class="flex gap-[1.5vw] items-center">
                        <img src="img/search.png" alt="" class="h-[1.8vh] w-[1.8vh]">
                        <p class="text-[1.8vh] text-white">Custom order</p>
                        <img src="img/line.png" alt="" class="h-[2vh] w-[2.5vh] mr-[1vh]">
                    </div>
                </div>
                <div class="grid grid-cols-[1fr_8fr_6fr_7fr_2fr] text-white px-4 mb-[1vh] w-full mt-[4vh]">
                    <p>#</p>
                    <p class="text-[1.8vh]">Title</p>
                    <p class="text-[1.8vh]">Album</p>
                    <p class="text-[1.8vh]">Date</p>
                    <img src="img/clock.png" alt="" class="w-[1.8vh] h-[1.8vh]">
                </div>
                <hr class="border-[0.5px] border-slate-800">

                <div id="modal-trigger-visi" class="grid grid-cols-[1fr_8fr_6fr_7fr_2fr] text-white px-4 w-full mt-[2vh] items-center hover:bg-gray-800 py-[0.8vw] hover:cursor-pointer">
                    <p>1</p>
                    <div class="flex gap-[0.8vw]">
                        <img src="{{ asset($data['foto1']) }}" alt="" loading="lazy" class="w-[5vh] h-[5vh] rounded-md">
                        <div>
                            <p class="text-[2vh] font-medium">{{ $data['visi'] }}</p>
                            <p class="text-[1.4vh] text-slate-400 font-medium">{{ $data['nama'] }}</p>
                        </div>
                    </div>
                    <p class="text-[1.7vh] font-medium">E-KPKO 2024</p>
                    <p class="text-[1.7vh] font-medium">22 November 2024</p>
                    <p class="text-[1.7vh] font-medium">1:23</p>
                </div>

                <div id="modal-trigger-misi" class="grid grid-cols-[1fr_8fr_6fr_7fr_2fr] text-white px-4 w-full items-center hover:bg-gray-800 py-[0.8vw] hover:cursor-pointer">
                    <p>2</p>
                    <div class="flex gap-[0.8vw]">
                        <img src="{{ asset($data['foto1']) }}" alt="" class="w-[5vh] h-[5vh] rounded-md">
                        <div>
                            <p class="text-[2vh] font-medium">{{ $data['misi'] }}</p>
                            <p class="text-[1.4vh] text-slate-400 font-medium">{{ $data['nama'] }}</p>
                        </div>
                    </div>
                    <p class="text-[1.7vh] font-medium">E-KPKO 2024</p>
                    <p class="text-[1.7vh] font-medium">22 November 2024</p>
                    <p class="text-[1.7vh] font-medium">1:23</p>
                </div>
            </div>
            {{-- <div>
                <img src="img/top.png" alt="" class="h-[20vh] rounded-b-lg">
            </div> --}}
        </div>
        <div class="h-[600px]">
            <div class="overflow-y-scroll bg-black h-full rounded-lg p-5">
                <div class="flex justify-between">
                    <p class="text-white text-[2.2vh] font-bold">{{ $data['nomor_urut'] }}</p>
                    <div class="flex gap-[1.6vw] items-center">
                        <img src="img/dot.png" alt="" class="w-[2.2vh] h-auto">
                        <img src="img/cross.png" alt="" class="w-[1.6vh] h-[1.6vh]">
                    </div>
                </div>
                <img src="{{ asset($data['foto1']) }}" alt="" class="w-full h-fit mt-5 rounded-lg">
                <p class="text-white text-[3vh] font-bold mt-3 -mb-[0.2vh]">{{ $data['nomor_urut'] }}</p>
                <p class="text-[1.8vh] text-slate-200 font-medium">{{ $data['nama'] }}</p> 
                <p class="font-medium text-[1vw] text-slate-400 mt-2">SMK Telkom Purwokerto, 22 November 2024</p>
                {!! $data['kode'] !!}
            </div>  
        </div>

        <!-- Modal -->
        <div id="modal-visi" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[60vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto3']) }}" alt="" loading="lazy" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[5%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-2xl font-body whitespace-pre-wrap">
{{ $data['nomor_urut'] ?? 'Tidak ada data' }} 
                    </p>
                    <p class="mb-[1.2vw] w-full text-white text-[15px] font-medium font-body whitespace-pre-wrap">
{{ $data['visi'] }}:
{{ $data['isivisi'] ?? 'Tidak ada data' }}   
                    </p>
                    <button id="close-modal-visi" class="mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
        <div id="modal-misi" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[60vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto3']) }}" alt="" loading="lazy" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[5%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-2xl font-body whitespace-pre-wrap">
{{ $data['nomor_urut'] ?? 'Tidak ada data' }} 
                    </p>
                    <p class="mb-[1.2vw] w-full text-white text-[15px] font-medium font-body whitespace-pre-wrap">
{{ $data['misi'] }}:
{{ $data['isimisi'] ?? 'Tidak ada data' }}   
                    </p>
                    <button id="close-modal-misi" class="mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <div id="modal-confirm" class="overflow-y-scroll hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50">
            <div class="rounded-lg shadow-lg w-[60vw] h-[90vh] max-w-lg overflow-y-auto">
                <div class="bg-black rounded-t-lg rounded-b-none h-[45%] overflow-hidden">
                    <img src="{{ asset($data['foto1']) }}" loading="lazy" alt="" class="w-full h-fit object-cover">
                </div> 
                <div class="bg-black px-[3%] py-[4%] text-justify">
                    <p class="w-full text-white font-bold text-2xl font-body whitespace-pre-wrap">
Apakah kamu yakin ingin memilih
{{ $data['nomor_urut'] ?? 'Tidak ada data' }}?
                    </p>
                    <div class="flex justify-around mb-[4vh]">
                        <form action="{{ route('storeVote') }}" method="POST">
                            @csrf
                            <button type="submit" name="nomor_urut" value="{{ $data['id'] }}" class="font-bold mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                                Ya
                            </button>
                        </form>
                        <button id="close-modal-confirm" class="font-bold mt-3 bg-biru3 text-white rounded-lg px-4 py-2 cursor-pointer">
                            Tidak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.getElementById('modal-trigger-visi').addEventListener('click', function () {
            const modal = document.getElementById('modal-visi');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex');
        });

        document.getElementById('modal-trigger-visi-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-visi-android');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex');
        });

        document.getElementById('modal-trigger-misi').addEventListener('click', function () {
            const modal = document.getElementById('modal-misi');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex'); 
        });

        document.getElementById('modal-trigger-misi-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-misi-android');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex'); 
        });
        
        document.getElementById('close-modal-visi').addEventListener('click', function () {
            const modal = document.getElementById('modal-visi');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });

        document.getElementById('close-modal-visi-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-visi-android');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });

        document.getElementById('close-modal-misi').addEventListener('click', function () {
            const modal = document.getElementById('modal-misi');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });

        document.getElementById('close-modal-misi-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-misi-android');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });

        document.getElementById('modal-trigger-confirm').addEventListener('click', function () {
            const modal = document.getElementById('modal-confirm');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex'); 
        });

        document.getElementById('modal-trigger-confirm-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-confirm-android');
            modal.classList.remove('hidden'); 
            modal.classList.add('flex'); 
        });

        document.getElementById('close-modal-confirm').addEventListener('click', function () {
            const modal = document.getElementById('modal-confirm');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });

        document.getElementById('close-modal-confirm-android').addEventListener('click', function () {
            const modal = document.getElementById('modal-confirm-android');
            modal.classList.remove('flex'); 
            modal.classList.add('hidden'); 
        });
    </script>
    
</body>
</html>
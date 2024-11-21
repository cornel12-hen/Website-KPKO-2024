<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center bg-coklat w-screen h-screen">
    <main class="lg:hidden flex flex-col bg-[#E3D8C6] max-w-full max-h-full overflow-y-scroll overflow-x-hidden">
        <div class="border border-t-0 border-l-0 border-r-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp3.png" alt="">
        </div>
        <div class="flex flex-col items-center gap-3 pt-9 text-center select-none no-drag">
            <a href="https://www.instagram.com/osis_stematel/" class="text-[1.2vh] text-biru3 font-bold self-center mt-[0.3vw] -mb-[1.6vh]">@osis_stematel</a>
            <p class="text-[5vh] -mb-[2.3vh] text-biru3 font-black font-display2">
                WELCOME
            </p>
            <p class="text-[2.2vh] text-biru3 font-bold font-display2">
                E-KPKO 2024
            </p>
        </div>
        <div class="text-center p-6 select-none no-drag -mb-[34vh]">
            <p class="text-biru3 text-[2vh] font-display2 font-bold mt-5">Pemilihan Ketua OSIS</p>
            <p class="text-biru3 text-[1.3vh] font-display2 font-semibold">SMK Telkom Purwokerto</p>
            <hr class="w-[76vw] h-[0.9vh] relative top-[2vh] left-[6vw] bg-gradient-to-r from-coklat via-coklat via-60% to-[#BCB6AA] to-60% rounded-lg">
            <p class="text-[18vh] text-coklat relative bottom-[18.5vh] left-[7vw]">.</p>
            <p class="font-display2 font-bold relative bottom-[24vh] right-[35vw] text-coklat text-[1.5vh]">1:23</p>
            <p class="font-display2 font-bold relative bottom-[26.35vh] left-[34vw] text-coklat text-[1.5vh]">4:56</p>
            <a href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 relative bottom-[27.2vh] left-[41vw] fill-coklat animate-color-change-scale-up">
                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 relative bottom-[30.6vh] left-[26vw] fill-coklat">
                <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>              
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 relative bottom-[33.7vh] left-[55.4vw] fill-coklat">
                <path fill-rule="evenodd" d="M14.47 2.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H9a5.25 5.25 0 1 0 0 10.5h3a.75.75 0 0 1 0 1.5H9a6.75 6.75 0 0 1 0-13.5h10.19l-4.72-4.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 relative bottom-[32.1vh] left-[49vw] fill-biru3 animate-move-up-left pointer-events-none">
                <path fill-rule="evenodd" d="M12 1.5a.75.75 0 0 1 .75.75V4.5a.75.75 0 0 1-1.5 0V2.25A.75.75 0 0 1 12 1.5ZM5.636 4.136a.75.75 0 0 1 1.06 0l1.592 1.591a.75.75 0 0 1-1.061 1.06l-1.591-1.59a.75.75 0 0 1 0-1.061Zm12.728 0a.75.75 0 0 1 0 1.06l-1.591 1.592a.75.75 0 0 1-1.06-1.061l1.59-1.591a.75.75 0 0 1 1.061 0Zm-6.816 4.496a.75.75 0 0 1 .82.311l5.228 7.917a.75.75 0 0 1-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 0 1-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 0 1-1.247-.606l.569-9.47a.75.75 0 0 1 .554-.68ZM3 10.5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 10.5Zm14.25 0a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H18a.75.75 0 0 1-.75-.75Zm-8.962 3.712a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.06l1.591-1.592a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
              </svg>
                        
        </div>
        {{-- <div class="border border-t-0 border-l-0 border-r-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp2.png" alt="">
        </div> --}}
        <div class="border border-l-0 border-b-0 border-r-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp1.png" alt="">
        </div>
        <div class="border border-b-0 border-t-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp5.png" alt="">
        </div>
    </main>
    <main class="max-lg:hidden grid grid-cols-3 grid-rows-3 bg-[#E3D8C6] max-w-full max-h-full overflow-hidden aspect-[2897/1472]">
        <div class="row-span-2 border border-t-0 border-l-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp2.png" alt="">
        </div>
        <div class="row-span-1 border border-t-0 border-coklat flex flex-col items-center gap-3 pt-9 text-center select-none no-drag">
            <a href="https://www.instagram.com/osis_stematel/" class="text-[1.2vw] text-biru3 font-bold self-center mt-[0.3vw] -mb-[0.8vw]">@osis_stematel</a>
            <p class="text-[5vw] -mb-[1.5vw] text-biru3 font-black font-display2">
                WELCOME
            </p>
            <p class="text-[2.2vw] text-biru3 font-bold font-display2">
                E-KPKO 2024
            </p>
        </div>
        <div class="row-span-1 border border-t-0 border-r-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp3.png" alt="">
        </div>
        <div class="row-span-1 border border-coklat text-center p-6 select-none no-drag">
            <p class="text-biru3 text-[1.6vw] font-display2 font-bold mt-5">Pemilihan Ketua OSIS</p>
            <p class="text-biru3 text-[1.1vw] font-display2 font-semibold">SMK Telkom Purwokerto</p>
            <hr class="w-[26.9vw] h-[0.9vh] absolute top-[50.5vh] left-[36.52vw] bg-gradient-to-r from-coklat via-coklat via-60% to-[#BCB6AA] to-60% rounded-lg">
            <p class="text-[18vh] text-coklat absolute top-[30.75vh] left-[52vw]">.</p>
            <p class="font-display2 font-bold absolute top-[52.5vh] left-[36.8vw] text-coklat text-[1vw]">1:23</p>
            <p class="font-display2 font-bold absolute top-[52.5vh] right-[36.8vw] text-coklat text-[1vw]">4:56</p>
            <a href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 absolute top-[53vh] left-[49.5vw] fill-coklat animate-color-change-scale-up">
                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 absolute top-[53vh] left-[44.6vw] fill-coklat">
                <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>              
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 absolute top-[53vh] left-[54.4vw] fill-coklat">
                <path fill-rule="evenodd" d="M14.47 2.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H9a5.25 5.25 0 1 0 0 10.5h3a.75.75 0 0 1 0 1.5H9a6.75 6.75 0 0 1 0-13.5h10.19l-4.72-4.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 absolute top-[58vh] left-[51.7vw] fill-biru3 animate-move-up-left pointer-events-none">
                <path fill-rule="evenodd" d="M12 1.5a.75.75 0 0 1 .75.75V4.5a.75.75 0 0 1-1.5 0V2.25A.75.75 0 0 1 12 1.5ZM5.636 4.136a.75.75 0 0 1 1.06 0l1.592 1.591a.75.75 0 0 1-1.061 1.06l-1.591-1.59a.75.75 0 0 1 0-1.061Zm12.728 0a.75.75 0 0 1 0 1.06l-1.591 1.592a.75.75 0 0 1-1.06-1.061l1.59-1.591a.75.75 0 0 1 1.061 0Zm-6.816 4.496a.75.75 0 0 1 .82.311l5.228 7.917a.75.75 0 0 1-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 0 1-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 0 1-1.247-.606l.569-9.47a.75.75 0 0 1 .554-.68ZM3 10.5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 10.5Zm14.25 0a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H18a.75.75 0 0 1-.75-.75Zm-8.962 3.712a.75.75 0 0 1 0 1.061l-1.591 1.591a.75.75 0 1 1-1.061-1.06l1.591-1.592a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
              </svg>
                        
        </div>
        <div class="row-span-2 border border-r-0 border-b-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp4-1.png" alt="">
        </div>
        <div class="row-span-1 border border-l-0 border-b-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp1.png" alt="">
        </div>
        <div class="row-span-1 border border-b-0 border-coklat pointer-events-none select-none no-drag">
            <img class="w-full h-full" src="img/stamp5.png" alt="">
        </div>
    </main>
</body>
</html>
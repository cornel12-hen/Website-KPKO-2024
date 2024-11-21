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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="min-w-[480px] h-screen overflow-hidden bg-[#E3D8C6]">
    <x-navbar></x-navbar>
    <main class="justify-center flex bg-[#E3D8C6] h-full">
        <div class="flex flex-col items-center shadow-3xl w-[48vw] min-w-[400px] h-full px-[10vw]">
            <p class="text-[4vh] sm:text-[3.2vw] font-display2 font-bold text-biru3 mt-[12vh] -mb-[1.2vh]">Login</p>
            <p class="text-[1.75vh] sm:text-[1.4vw] mt-4 font-display2 font-semibold text-biru3 -mb-[1.8vh]">Masukkan Username dan Token</p>
            <form action="{{ route('loginpost') }}" method="POST" class="w-full py-4 text-biru3">
                @csrf
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[1.6vw] max-sm:hidden relative left-[0.8vw] top-[4.9vh] stroke-biru3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>                  
                <input type="text" autocomplete="off" placeholder="Username" name="username" id="username" class="pl-[3.2vw] max-sm:mb-[1.2vh] max-sm:mt-[2vh] w-full h-[6.6vh] border-none ring-[1px] ring-biru3 ring-opacity-50 focus:outline-none focus:ring-[2px] focus:ring-biru3 rounded-md">
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[1.5vw] max-sm:hidden relative left-[0.85vw] top-[4.8vh] stroke-biru3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>      
                <div class="flex w-full">
                    <input type="password" autocomplete="off" placeholder="Token" name="token" id="token" class="pl-[3.2vw] w-full h-[6.6vh] border-none ring-[1px] ring-biru3 ring-opacity-50 focus:outline-none focus:ring-[2px] focus:ring-biru3 rounded-md">
                    <button id="togglePassword" type="button" class="w-[15%]">
                        <i id="password-icon" class="fas fa-eye"></i>
                    </button>
                </div>            
                @error('token')
                    <div class="error">{{ $message }}</div>
                @enderror
                {{-- <div class="flex justify-center gap-2">    
                    <p class="text-[1.3vw] mt-[2.7vh] text-biru3 font-medium">Informasi:<p class="text-[1.3vw] mt-[2.7vh] text-biru3">Angka nol = Ø, huruf o = O</p></p>
                </div> --}}
                <button type="submit" class="text-center text-[1.4vw] max-sm:text-[2vh] bg-biru3 w-full h-[6vh] mt-[4vh] text-[#E3D8C6] font-bold font-display2 rounded-lg shadow-xl">
                    Masuk
                </button>
                @if($errors->has('msg'))
                    <div class="error flex gap-2 mt-2 justify-center"><p class="font-bold">Perhatian:</p>{{ $errors->first('msg') }}</div>
                @endif
            </form>
            @if (session('success'))
                <div class="alert alert-success font-bold text-biru3">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger font-bold text-biru3">
                    {{ session('error') }}
                </div>
            @endif
        </div>   
    </main>
    <script>
        const passwordInput = document.getElementById('token'); // Input dengan ID password-input
        const togglePassword = document.getElementById('togglePassword'); // Tombol dengan ID toggle-password
        const passwordIcon = document.getElementById('password-icon'); // Ikon dengan ID password-icon
    
        togglePassword.addEventListener('click', () => {
            // Periksa tipe saat ini dari input
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
    
            // Ganti ikon sesuai tipe
            if (type === 'password') {
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            } else {
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            }
        });
    </script>
        
</body>
</html>
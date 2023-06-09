<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login Dasarata</title>
</head>
<body>

    <section class="bg-gray-300 min-h-screen flex items-center justify-center">
        <div class="bg-gray-200 flex rounded-2xl shadow-lg max-w-3xl">
            <div class="sm:w-96 p-16">
                <img class="rounded-sm" src="/img/logo.png" alt="">
                <h2 class="font-bold text-center text-2xl mt-5 text-[#002D74]">Login</h2>
                @if (session()->has('success'))
                    <div>
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="text-red-400 text-center text-bold">
                        {{ session('loginError') }}
                    </div>
                 @endif
                <form action="/login" method="post" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <input type="text" name="karyawan_nip" class="p-2 mt-8 rounded-xl border w-full " placeholder="NIP">
                    </div>
                    <div>
                        <input class="p-2 rounded-xl border w-full" name="password" type="password" placeholder="Password">
                    </div>
                    <button class="bg-[#002D74] rounded-lg text-white py-2">Login</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>


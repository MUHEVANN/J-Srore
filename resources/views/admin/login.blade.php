<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>
    <button class="px-[80px]"><a href="{{ url('/') }}"
            class="py-2 px-6 text-white bg-[#666666]">kembali</a></button>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full h-screen grid place-content-center">

        <form action="{{ route('login') }}" method="POST"
            class="w-[500px] h-auto bg-[#959393] flex flex-col gap-y-3 p-5">
            @csrf
            <form-group class="flex flex-col">
                <label for="email">Masukkan Email</label>
                <input type="email" name="email" placeholder="masukkan email" class="px-2 py-2 outline-none" />
            </form-group>
            <form-group class="flex flex-col">
                <label for="password">Masukkan Password</label>
                <input type="password" name="password" placeholder="masukkan password" class="px-2 py-2 outline-none" />
            </form-group>
            <div>

                <button type="submit" class="py-2 px-6 text-white bg-[#666666]">Login</button>
            </div>
        </form>
    </div>
</body>

</html>

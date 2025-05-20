<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/build/assets/app-CImqi6kF.css">
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-[450px] h-[650px] border border-black rounded-[10px] flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold mb-8">Регистрация</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4 w-[350px]">
            @csrf
            <input type="text" name="first_name" placeholder="Имя" class="w-[350px] h-[40px] bg-transparent border border-black  rounded">
            <input type="text" name="last_name" placeholder="Фамилия" class="w-[350px] h-[40px] bg-transparent border border-black rounded">
            <input type="text" name="middle_name" placeholder="Отчество" class="w-[350px] h-[40px] bg-transparent border border-black  rounded">
            <input type="email" name="email" placeholder="E-mail" class="w-[350px] h-[40px] bg-transparent border border-black  rounded">
            <input type="text" name="phone" placeholder="Телефон" class="w-[350px] h-[40px] bg-transparent border border-black rounded">
            <input type="password" name="password" placeholder="Пароль" class="w-[350px] h-[40px] bg-transparent border border-black  rounded">
            <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" class="w-[350px] h-[40px] bg-transparent border border-black  rounded">
            <div class="flex justify-between w-full mt-4">
                <a href="{{ route('login') }}" class="text-black hover:text-red-500 transition duration-300">У вас есть аккаунт?</a>
                <button type="submit" class="w-[175px] h-[40px] bg-transparent border border-black text-black text-center leading-[40px] rounded transition duration-300 hover:bg-black hover:text-white">
                    Регистрация
                </button>
            </div>
        </form>
    </div>
</body>
</html>

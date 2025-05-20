<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/build/assets/app-BXS_KchZ.css">
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-[450px] h-[400px] border border-black rounded-[10px] flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold mb-6">Авторизация</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4 w-[350px]">
            @csrf
            <input type="email" name="email" placeholder="E-mail" class="w-[350px] h-[40px] bg-transparent border border-black rounded">
            <input type="password" name="password" placeholder="Пароль" class="w-[350px] h-[40px] bg-transparent border border-black rounded">
            <div class="flex justify-between w-[350px] mt-4">
                <a href="{{ route('register') }}" class="text-black hover:text-red-500 transition duration-300">У вас нет аккаунта?</a>
                <button type="submit" class="w-[150px] h-[40px] bg-transparent border border-black text-black text-center leading-[40px] rounded transition duration-300 hover:bg-black hover:text-white">
                    Войти
                </button>
            </div>
        </form>
    </div>
</body>
</html>

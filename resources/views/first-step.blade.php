<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Первый шаг</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    <link rel="stylesheet" href="/build/assets/app-DhnIsgT-.css">
    <script src="/build/assets/app-BS16X1jf.js" defer></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-[400px] h-[400px] bg-white border border-black rounded-[10px] flex flex-col items-center">
        <h1 class="text-3xl font-bold mt-[100px]">Первый шаг</h1>
        <div class="mt-8 space-y-4">
            <a href="{{ route('login') }}" class="block w-[200px] h-[40px] bg-white border border-black text-black text-center leading-[40px] rounded transition duration-300 hover:bg-black hover:text-white">
                Войти
            </a>
            <a href="{{ route('register') }}" class="block w-[200px] h-[40px] bg-white border border-black text-black text-center leading-[40px] rounded transition duration-300 hover:bg-black hover:text-white">
                Зарегистрироваться
            </a>
            <a href="{{ route('home') }}" class="block w-[200px] h-[40px] bg-white border border-black text-black text-center leading-[40px] rounded transition duration-300 hover:bg-black hover:text-white">
                Продолжить как Гость
            </a>
        </div>
    </div>
</body>
</html>

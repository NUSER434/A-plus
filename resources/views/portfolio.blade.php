<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типография А-Плюс - Главаня страница</title>
    <link rel="icon" type="" href="images/logo.png">
    <link rel="shortcut icon" type="" href="images/logo.png">
    <link rel="stylesheet" href="/build/assets/app-DhnIsgT-.css">
    <script src="/build/assets/app-BS16X1jf.js" defer></script>
</head>
<body>
@include('partials.basic.header')

    <!-- Навигация -->
    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-black hover:text-red-500 transition duration-300">Главная</a>
            <span class="text-gray-400">|</span>
            <span class="text-black hover:text-red-500 transition duration-300">Портфолио</span>
        </div>
    </section>

    <section class="mt-12">
        <div class="max-w-[1200px] mx-auto flex items-center space-x-4">
            <h2 class="text-[28px] font-bold text-black hover:text-red-500 transition duration-300 ">Портфолио</h2>
        </div>
    </section>

    <!-- Основной контент -->
    <main class="mt-16">
        <!-- Контейнеры -->
        <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($categories as $category)
                <div class="group cursor-pointer" onclick="location.href='{{ route('portfolio.show', $category) }}'">
                    <img src="{{ $categoryImages[$category] ?? asset('images/no-image.jpg') }}" alt="{{ $category }}" class="w-[270px] h-[200px] object-cover rounded-lg">
                    <p class="text-center mt-2 text-gray-700 group-hover:text-red-500 transition duration-300">{{ $category }}</p>
                </div>
            @endforeach
        </div>
    </main>

    @include('partials.basic.footer')
    @include('partials.buttons')
</body>
</html>

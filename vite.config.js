import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Основные файлы
                'resources/css/app.css',
                'resources/js/app.js',

                // Дополнительные стили
                'resources/css/header1.css',
                'resources/css/home.css',
                'resources/css/profile.css',

                // Дополнительные скрипты
                'resources/js/about.js',
                'resources/js/caruselt.js',
                'resources/js/headert.js',
                'resources/js/populart.js',
                'resources/js/profilet.js',
                'resources/js/slidert.js',
            ],
            refresh: true,
        }),
    ],
});

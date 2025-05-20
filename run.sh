#!/bin/bash
LOCAL=false
for arg in "$@"; do
    if [ "$arg" == "--local" ]; then
        LOCAL=true
        break
    fi
done

if [ "$LOCAL" == false ]; then
    docker compose down && docker compose build && docker compose up -d
    exit 0
fi

if ! composer update && composer install; then
    echo "Установка зависимостей через composer был завершна неуспешно. Используй docker compose для разработки (https://github.com/midis-institute/laravel/tree/develop?tab=readme-ov-file#%D0%B2%D1%8B%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0-%D0%BD%D0%B0-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80)"
    exit 1
fi

bash ./scripts/init_env.sh

npm install
npm run build || echo "Ошибка сборки фронтенда"

# Проверяем, появились ли файлы
ls -la public/build || echo "Build папка не найдена"

if command -v php >/dev/null 2>&1; then
    php artisan migrate --seed --force || echo "Ошибка миграций или сидов"
    npm run dev&
    php artisan serve --host=0.0.0.0 --port=$PORT
else
    "D:/xampp/php/php" php artisan migrate --seed --force || echo "Ошибка миграций или сидов"
    npm run dev&
    "D:/xampp/php/php" artisan serve --host=0.0.0.0 --port=$PORT
fi

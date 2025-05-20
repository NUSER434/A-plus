

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/build/assets/app-BXS_KchZ.css">
</head>
<body>
    <!-- profile.blade.php -->
<div id="personal" class="profile-content-section">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Данные пользователя -->
        <div class="bg-white rounded-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Данные пользователя
            </h2>
            
            <div class="space-y-3">
                <p class="flex items-center">
                    <span class="w-24 text-sm font-medium text-gray-500">Фамилия:</span>
                    <span class="font-medium">{{ Auth::user()->last_name }}</span>
                </p>
                <p class="flex items-center">
                    <span class="w-24 text-sm font-medium text-gray-500">Имя:</span>
                    <span class="font-medium">{{ Auth::user()->first_name }}</span>
                </p>
                <p class="flex items-center">
                    <span class="w-24 text-sm font-medium text-gray-500">Отчество:</span>
                    <span class="font-medium">{{ Auth::user()->middle_name ?? 'Не указано' }}</span>
                </p>
                <p class="flex items-center">
                    <span class="w-24 text-sm font-medium text-gray-500">Телефон:</span>
                    <span class="font-medium">{{ Auth::user()->phone ?? 'Не указан' }}</span>
                </p>
            </div>
            <button 
                class="mt-4 w-full sm:w-auto h-[40px] px-10 border border-black text-black font-medium rounded-xl hover:bg-black hover:text-white transition-all flex items-center justify-center"
                onclick="openEditModal()">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                Изменить данные
            </button>
        </div>

        <!-- Изменить пароль -->
        <div class="bg-white rounded-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
                Изменить пароль
            </h2>
            
            <form action="{{ route('profile.update.password') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Текущий пароль</label>
                    <input type="password" name="current_password" id="current_password"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                        required>
                </div>
                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Новый пароль</label>
                    <input type="password" name="new_password" id="new_password"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                        required>
                </div>
                <div>
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Подтвердите новый пароль</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                        required>
                </div>
                <button type="submit" 
                        class="group relative inline-flex items-center justify-center h-10 w-full sm:w-auto px-6 rounded-xl bg-white text-black border border-black font-medium overflow-hidden transition-all duration-300 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black/20">
                    <span class="relative z-10">Сохранить</span>
                    <span class="absolute inset-0 bg-red-500 bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
            </form>
        </div>

        <!-- Изменить email -->
        <div class="bg-white rounded-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Изменить email
            </h2>
            
            <form action="{{ route('profile.update.email') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="new_email" class="block text-sm font-medium text-gray-700 mb-1">Новый email</label>
                    <input type="email" name="new_email" id="new_email"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                        required>
                </div>
                <button type="submit" 
                        class="group relative inline-flex items-center justify-center h-10 w-full sm:w-auto px-6 rounded-xl bg-white text-black border border-black font-medium overflow-hidden transition-all duration-300 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black/20">
                    <span class="relative z-10">Сохранить</span>
                    <span class="absolute inset-0 bg-red-500 bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
            </form>
        </div>

        <!-- Удалить аккаунт -->
        <div class="bg-white rounded-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                Удалить аккаунт
            </h2>
            
            <p class="text-red-500 mb-4">Внимание! Аккаунт нельзя восстановить после удаления.</p>
            <button 
                class="group relative inline-flex items-center justify-center h-10 w-full sm:w-auto px-6 rounded-xl bg-transparent text-red-500 border border-red-500 font-medium overflow-hidden transition-all duration-300 hover:bg-red-500 hover:text-white hover:shadow-lg hover:shadow-red-500/20"
                onclick="openDeleteModal()">
                <span class="relative z-10">Удалить аккаунт</span>
                <span class="absolute inset-0 bg-white bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        </div>
    </div>
</div>



<!-- Модальное окно "Изменить данные" -->
<div id="edit-modal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm hidden flex justify-center items-center z-50 p-4">
        <div class="modal-content bg-white rounded-2xl shadow-2xl w-full max-w-[600px] transform transition-all duration-500 scale-95 opacity-0 relative overflow-hidden mx-auto my-8">
            <!-- Градиентный бар сверху -->
            <div class="h-2 bg-gradient-to-r from-red-500 via-rose-500 to-pink-700"></div>
            
            <!-- Контент -->
            <div class="p-6 sm:p-8 space-y-6">
                <!-- Крестик закрытия -->
                <button class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-300 hover:scale-110"
                        onclick="closeEditModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                
                <!-- Заголовок -->
                <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Изменить данные
                </h2>
                
                <!-- Форма -->
                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Имя</label>
                            <input type="text" name="first_name" id="first_name" value="{{ Auth::user()->first_name }}"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                                required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Фамилия</label>
                            <input type="text" name="last_name" id="last_name" value="{{ Auth::user()->last_name }}"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                                required>
                        </div>
                        <div>
                            <label for="middle_name" class="block text-sm font-medium text-gray-700 mb-1">Отчество</label>
                            <input type="text" name="middle_name" id="middle_name" value="{{ Auth::user()->middle_name }}"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                                required>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Телефон</label>
                            <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                                required>
                        </div>
                    </div>
                    
                    <!-- Кнопка отправки -->
                    <div class="flex justify-end pt-4">
                        <button type="submit"
                                class="group relative inline-flex items-center justify-center h-11 px-6 rounded-xl bg-white text-black border border-black font-medium overflow-hidden transition-all duration-300 hover:bg-black hover:text-white hover:shadow-lg hover:shadow-black/20 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                            <span class="relative z-10">Сохранить</span>
                            <span class="absolute inset-0 bg-red-500 bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 relative z-10" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Модальное окно "Удалить аккаунт" -->
    <div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm hidden flex justify-center items-center z-50 p-4">
        <div class="modal-content bg-white rounded-2xl shadow-2xl w-full max-w-[500px] transform scale-95 opacity-0 transition-all duration-500 relative overflow-hidden mx-auto my-8">
            <!-- Градиентный бар сверху -->
            <div class="h-2 bg-gradient-to-r from-red-500 via-rose-500 to-pink-700"></div>
            
            <!-- Контент -->
            <div class="p-6 sm:p-8 space-y-6">
                <!-- Крестик закрытия -->
                <button class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-300 hover:scale-110"
                        onclick="closeDeleteModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                
                <!-- Заголовок -->
                <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Подтвердите удаление аккаунта
                </h2>
                
                <!-- Форма -->
                <form action="{{ route('profile.delete') }}" method="POST" class="space-y-6">
                    @csrf
                    <p class="text-red-500">Введите <strong>"DELETED"</strong> для подтверждения:</p>
                    <div>
                        <input type="text" name="confirmation" id="confirmation"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 bg-white/50 backdrop-blur-sm text-gray-800 py-2 px-3"
                            required>
                    </div>
                    <button type="submit"
                            class="group relative inline-flex items-center justify-center h-11 px-6 rounded-xl bg-red-500 text-white font-medium overflow-hidden transition-all duration-300 hover:bg-red-600 hover:shadow-lg hover:shadow-red-500/20 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        <span class="relative z-10">Удалить</span>
                        <span class="absolute inset-0 bg-white bg-opacity-20 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 relative z-10" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
 // profile.js
    function openEditModal() {
        const modal = document.getElementById('edit-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Сброс анимации
        const modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');

        document.body.style.overflow = 'hidden';
    }

    function closeEditModal() {
        const modal = document.getElementById('edit-modal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');

        // Сброс анимации для повторного открытия
        const modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');

        document.body.style.overflow = 'auto';
    }

    // Открытие модального окна "Удалить аккаунт"
    function openDeleteModal() {
        const modal = document.getElementById('delete-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Сброс анимации
        const modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');

        document.body.style.overflow = 'hidden';
    }

    // Закрытие модального окна "Удалить аккаунт"
    function closeDeleteModal() {
        const modal = document.getElementById('delete-modal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');

        // Сброс анимации для повторного открытия
        const modalContent = modal.querySelector('.modal-content');
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');

        document.body.style.overflow = 'auto';
    }
</script>
</html>


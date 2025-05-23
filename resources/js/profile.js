// Логика для модального окна
const deleteModal = document.getElementById('delete-modal');
const deleteBtn = document.getElementById('delete-account-btn');
const closeModalBtn = document.getElementById('close-modal-btn');

deleteBtn.addEventListener('click', () => {
    deleteModal.classList.remove('hidden');
});

closeModalBtn.addEventListener('click', () => {
    deleteModal.classList.add('hidden');
});


















function updateOrderStatus() {
    document.querySelectorAll('.progress-bar').forEach(bar => {
        const currentWidth = parseFloat(bar.style.width);
        const orderId = bar.dataset.orderId;
        
        // Логика смены статуса (пример)
        if (currentWidth < 33) {
            bar.style.width = '33%';
        } else if (currentWidth < 66) {
            bar.style.width = '66%';
        } else if (currentWidth < 100) {
            bar.style.width = '100%';
        } else {
            // Завершаем цикл
            clearInterval(window[`interval_${orderId}`]);
        }
    });
}

// Запускаем анимацию для каждого заказа
document.querySelectorAll('.progress-bar').forEach(bar => {
    const orderId = bar.dataset.orderId;
    window[`interval_${orderId}`] = setInterval(updateOrderStatus, 3000); // Обновление каждые 3 секунды
});
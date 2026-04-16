document.getElementById('schedule-consultation').addEventListener('click', function() {
    document.getElementById("hero").scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('services-button').addEventListener('click', function() {
    document.getElementById("hero").scrollIntoView({ behavior: 'smooth' });
});

const questionItems = document.querySelectorAll('.question-item');

questionItems.forEach(item => {
    item.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        // Fecha todos os itens antes de abrir o novo (Opcional)
        questionItems.forEach(el => el.classList.remove('active'));

        // Se o item clicado não estava aberto, abre ele
        if (!isActive) {
            item.classList.add('active');
        }
    });
});
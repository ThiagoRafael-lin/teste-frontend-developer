const contactForm = document.getElementById('contactForm');
const successMessage = document.getElementById('successMessage');
const errorMessage = document.getElementById('errorMessage');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const telephone = document.getElementById('telephone').value.trim();
        const message = document.getElementById('message').value.trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const isValidEmail = emailRegex.test(email);

        if (name && isValidEmail && telephone && message) {
            successMessage.classList.add('show');
            errorMessage.classList.remove('show');

            contactForm.reset();

            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);
        } else {
            errorMessage.classList.add('show');
            successMessage.classList.remove('show');

            setTimeout(() => {
                errorMessage.classList.remove('show');
            }, 4000);
        }
    });
}


document.getElementById('schedule-consultation').addEventListener('click', function() {
    document.getElementById('hero').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('services-button').addEventListener('click', function() {
    document.getElementById('hero').scrollIntoView({ behavior: 'smooth' });
});

const questionItems = document.querySelectorAll('.question-item');

questionItems.forEach(item => {
    item.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        questionItems.forEach(el => el.classList.remove('active'));

        if (!isActive) {
            item.classList.add('active');
        }
    });
});

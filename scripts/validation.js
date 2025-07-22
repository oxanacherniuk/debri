document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('bookingForm');
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function (e) {
            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            e.target.value = !x[2] ? '+7 (' + x[1] : '+7 (' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '') + (x[4] ? '-' + x[4] : '');
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            let isValid = true;

            document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.reservation-form__input').forEach(el => el.classList.remove('error'));
            document.querySelector('.agreement-square').classList.remove('error');

            const serviceSelect = document.getElementById('city-select');
            if (!serviceSelect.value) {
                showError(serviceSelect, 'Выберите услугу');
                isValid = false;
            }

            const nameInput = document.getElementById('name');
            if (!nameInput.value.trim()) {
                showError(nameInput, 'Введите имя');
                isValid = false;
            } else if (nameInput.value.trim().length < 2) {
                showError(nameInput, 'Имя слишком короткое');
                isValid = false;
            }

            const guestsInput = document.getElementById('guests');
            if (!guestsInput.value) {
                showError(guestsInput, 'Укажите количество гостей');
                isValid = false;
            } else if (guestsInput.value < 1 || guestsInput.value > 20) {
                showError(guestsInput, 'Допустимо от 1 до 20 гостей');
                isValid = false;
            }

            const phoneValue = phoneInput.value.replace(/\D/g, '');
            if (!phoneValue) {
                showError(phoneInput, 'Введите номер телефона');
                isValid = false;
            } else if (phoneValue.length < 11) {
                showError(phoneInput, 'Номер слишком короткий');
                isValid = false;
            }

            if (!document.getElementById('agreement').checked) {
                document.querySelector('.agreement-error').textContent = 'Необходимо ваше согласие';
                document.querySelector('.agreement-error').style.display = 'block';
                document.querySelector('.agreement-square').classList.add('error');
                isValid = false;
            }

            if (isValid) {
                alert('Форма успешно отправлена!');
                form.reset();
            }
        });

        function showError(input, message) {
            const wrapper = input.closest('.input-wrapper');
            if (wrapper) {
                const errorEl = wrapper.querySelector('.error-message');
                errorEl.textContent = message;
                errorEl.style.display = 'block';
                input.classList.add('error');
            }
        }

        document.querySelectorAll('.reservation-form__input').forEach(input => {
            input.addEventListener('blur', function () {
                if (!this.value) {
                    if (this.id === 'city-select') {
                        showError(this, 'Выберите услугу');
                    } else if (this.id === 'phone') {
                        showError(this, 'Введите номер телефона');
                    } else if (this.id === 'name') {
                        showError(this, 'Введите имя');
                    } else if (this.id === 'guests') {
                        showError(this, 'Укажите количество гостей');
                    }
                }
            });
        });

        document.querySelectorAll('.reservation-form__input').forEach(input => {
            input.addEventListener('input', function () {
                if (this.value) {
                    this.classList.remove('error');
                    const wrapper = this.closest('.input-wrapper');
                    if (wrapper) {
                        wrapper.querySelector('.error-message').style.display = 'none';
                    }
                }
            });
        });

        document.getElementById('agreement').addEventListener('change', function () {
            if (this.checked) {
                this.classList.remove('error');
                document.querySelector('.agreement-error').style.display = 'none';
            }
        });
    }
);
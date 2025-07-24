document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('bookingForm');
    const phoneInput = document.getElementById('phone');
    const modal = document.getElementById('reservationModal');
    const closeBtn = document.querySelector('.reservation-inner__close');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;

        document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.reservation-form__input').forEach(el => el.classList.remove('error'));
        document.querySelector('.agreement-square').classList.remove('error');

        const serviceSelect = document.getElementById('servise-select');
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
            sendFormData();
        }
    });

    //Функция запуска AJAX
    function GoAddres(formData) {
    console.log(formData);
    
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: { 
            servise_select: formData.servise_select, 
            name: formData.name, 
            guests: formData.guests, 
            phone: formData.phone
        }
    }).done(function(result) {
        alert("Форма успешно отправлена!");
        $("#reservationModal").hide();
        document.getElementById("bookingForm").reset();
    }).fail(function(error) {
        console.error("Ошибка при отправке:", error);
        alert("Произошла ошибка при отправке формы. Пожалуйста, попробуйте ещё раз.");
    });
}

    function sendFormData() {
        const formData = {
            service: document.getElementById('servise-select').options[document.getElementById('servise-select').selectedIndex].text,
            name: document.getElementById('name').value.trim(),
            guests: document.getElementById('guests').value,
            phone: document.getElementById('phone').value,
            agreement: document.getElementById('agreement').checked ? 'Да' : 'Нет'
        };

        console.log(GoAddres(formData));
    }

    function showError(input, message) {
        const wrapper = input.closest('.input-wrapper');
        if (wrapper) {
            const errorEl = wrapper.querySelector('.error-message');
            errorEl.textContent = message;
            errorEl.style.display = 'block';
            input.classList.add('error');
        }
    }

    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    document.querySelectorAll('.reservation-form__input').forEach(input => {
        input.addEventListener('blur', function() {
            if (!this.value) {
                if (this.id === 'servise-select') {
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
        input.addEventListener('input', function() {
            if (this.value) {
                this.classList.remove('error');
                const wrapper = this.closest('.input-wrapper');
                if (wrapper) {
                    wrapper.querySelector('.error-message').style.display = 'none';
                }
            }
        });
    });

    document.getElementById('agreement').addEventListener('change', function() {
        if (this.checked) {
            this.classList.remove('error');
            document.querySelector('.agreement-error').style.display = 'none';
        }
    });
});
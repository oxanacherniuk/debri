document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('validationForm');
    const phoneInput = document.getElementById('phoneInput');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        
        document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.fourth-step__input').forEach(el => el.classList.remove('error'));
        document.querySelector('.agreement-square').classList.remove('error');
        
        const nameInput = document.getElementById('nameInput');
        if (!nameInput.value.trim()) {
            showError(nameInput, 'Обязательное поле');
            isValid = false;
        } else if (nameInput.value.trim().length < 2) {
            showError(nameInput, 'Имя слишком короткое');
            isValid = false;
        }
        
        const phoneValue = phoneInput.value.replace(/\D/g, '');
        if (!phoneValue) {
            showError(phoneInput, 'Обязательное поле');
            isValid = false;
        } else if (phoneValue.length < 11) {
            showError(phoneInput, 'Слишком короткое значение');
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
    
    document.querySelectorAll('.fourth-step__input').forEach(input => {
        input.addEventListener('blur', function() {
            if (!this.value) {
                if (this.id === 'phoneInput') {
                    showError(this, 'Обязательное поле');
                } else if (this.id === 'nameInput') {
                    showError(this, 'Введите имя');
                }
            }
        });
    });
    
    document.querySelectorAll('.fourth-step__input').forEach(input => {
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
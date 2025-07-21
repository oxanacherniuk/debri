document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.about-box__col');
    const cards = document.querySelectorAll('.about-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => {
                const title = btn.querySelector('.col-title');
                const text = btn.querySelector('.col-text');
                title.style.color = 'white';
                text.style.color = 'white';
            });

            const currentTitle = this.querySelector('.col-title');
            const currentText = this.querySelector('.col-text');
            currentTitle.style.color = '#8AAF90';
            currentText.style.color = '#8AAF90';

            const filterValue = this.getAttribute('data-filter'); 
            cards.forEach(card => {
                card.style.display = 'none';
            });

            if (filterValue === 'all') {
                cards.forEach(card => {
                    card.style.display = 'block';
                });
            } else {
                const filteredCards = document.querySelectorAll(`.about-card.${filterValue}`);
                filteredCards.forEach(card => {
                    card.style.display = 'block';
                });
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const bookBtn = document.querySelector('.banner-info__btn');
    const modal = document.getElementById('reservationModal');
    const closeBtn = document.querySelector('.reservation-inner__close');

    bookBtn.addEventListener('click', function() {
        modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; 
        });
        
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = ''; 
        });
            
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.style.display === 'flex') {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }
        }
    );
});
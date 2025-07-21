document.addEventListener('DOMContentLoaded', function() {
    const contactBtn = document.querySelector('.contact-btn__btn');
    const contactBox = document.querySelector('.contact-btn__box');
    const closeBtn = document.querySelector('.close-btn');
    
    contactBtn.addEventListener('click', function(e) {
        e.stopPropagation(); 
        contactBox.classList.add('active');
        contactBtn.style.display='none';
    });
    
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        contactBox.classList.remove('active');
        contactBtn.style.display='block';
    });
    
    document.addEventListener('click', function(e) {
        if (!contactBox.contains(e.target) && e.target !== contactBtn) {
            contactBox.classList.remove('active');
        }
    });
    
    contactBox.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
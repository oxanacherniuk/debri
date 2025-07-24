document.addEventListener('DOMContentLoaded', function() {
    const poolBox = document.querySelector('.pool-box');
    const poolInfo = poolBox.querySelector('.pool-info');
    
    poolBox.addEventListener('mouseenter', function() {
        this.style.zIndex = '10'; 
        poolInfo.style.display = 'flex';
    });
    
    poolBox.addEventListener('mouseleave', function() {
        this.style.zIndex = '1'; 
        poolInfo.style.display = 'none';
    });
});
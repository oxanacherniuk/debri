document.addEventListener('DOMContentLoaded', function() {
    const poolBox = document.querySelector('.pool-box');
    const poolImage = poolBox.querySelector('img[src="img/welcome_1.png"]');
    const poolInfo = poolBox.querySelector('.pool-info');
    
    poolBox.addEventListener('mouseenter', function() {
        poolImage.style.transform = 'scale(1.1)';
        poolInfo.style.display = 'flex';
        this.style.setProperty('--after-opacity', '0.82');
    });
    
    poolBox.addEventListener('mouseleave', function() {
        poolImage.style.transform = 'scale(1)';
        poolInfo.style.display = 'none';
        this.style.setProperty('--after-opacity', '0');
    });
});
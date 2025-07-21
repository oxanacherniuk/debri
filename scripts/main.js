document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.reviews-inner');
    const slides = document.querySelectorAll('.review');
    const prevBtn = document.querySelector('.arrow-left');
    const nextBtn = document.querySelector('.arrow-right');
    const dotsContainer = document.querySelector('.circles-btns');
    
    const slidesToShow = 2;
    let currentSlide = 0;
    let slideCount = slides.length;
    let autoSlideInterval;
    const slideIntervalTime = 5000;
    let isAnimating = false;
    const animationDuration = 500; 

    const slidesWrapper = document.createElement('div');
    slidesWrapper.className = 'slides-wrapper';
    slider.innerHTML = '';
    slider.appendChild(slidesWrapper);
    
    slides.forEach(slide => {
        slidesWrapper.appendChild(slide);
    });

    function createDots() {
        dotsContainer.innerHTML = '';
        const dotsCount = Math.ceil(slideCount / slidesToShow);
        
        for (let i = 0; i < dotsCount; i++) {
            const dot = document.createElement('button');
            dot.className = 'circle-btn';
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i * slidesToShow));
            dotsContainer.appendChild(dot);
        }
    }
    
    function initSlider() {
        slider.style.overflow = 'hidden';
        slidesWrapper.style.display = 'flex';
        slidesWrapper.style.transition = `transform ${animationDuration}ms ease`;
        
        createDots();
        updateSliderPosition(false);
        startAutoSlide();
    }

    function updateSliderPosition(animate = true) {
        if (isAnimating) return;
        isAnimating = true;
        
        const slideWidth = slider.offsetWidth / slidesToShow;
        const offset = -currentSlide * slideWidth;
        
        if (animate) {
            slidesWrapper.style.transform = `translateX(${offset}px)`;
            
            setTimeout(() => {
                isAnimating = false;
            }, animationDuration);
        } else {
            slidesWrapper.style.transition = 'none';
            slidesWrapper.style.transform = `translateX(${offset}px)`;
            
            setTimeout(() => {
                slidesWrapper.style.transition = `transform ${animationDuration}ms ease`;
                isAnimating = false;
            }, 50);
        }
        
        updateDots();
    }
    
    function updateDots() {
        const dots = document.querySelectorAll('.circle-btn');
        const activeDotIndex = Math.floor(currentSlide / slidesToShow);
        
        dots.forEach((dot, index) => {
            dot.classList.remove('active');
            if (index === activeDotIndex % dots.length) {
                dot.classList.add('active');
            }
        });
    }
    
    function nextSlide() {
        if (isAnimating) return;
        
        currentSlide = (currentSlide + slidesToShow) % slideCount;
        if (currentSlide + slidesToShow > slideCount) {
            currentSlide = 0; 
        }
        updateSliderPosition();
    }
    
    function prevSlide() {
        if (isAnimating) return;
        
        currentSlide = (currentSlide - slidesToShow + slideCount) % slideCount;
        updateSliderPosition();
    }
    
    function goToSlide(index) {
        if (isAnimating) return;
        
        currentSlide = index % (slideCount - slidesToShow + 1);
        updateSliderPosition();
    }
    
    function startAutoSlide() {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, slideIntervalTime);
    }
    
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    nextBtn.addEventListener('click', function() {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });
    
    prevBtn.addEventListener('click', function() {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });
    
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
    
    initSlider();
});
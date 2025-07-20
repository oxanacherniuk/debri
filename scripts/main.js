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
    const animationDuration = 500; // Длительность анимации в мс

    // Создаем обертку для слайдов
    const slidesWrapper = document.createElement('div');
    slidesWrapper.className = 'slides-wrapper';
    slider.innerHTML = '';
    slider.appendChild(slidesWrapper);
    
    // Переносим слайды в обертку
    slides.forEach(slide => {
        slidesWrapper.appendChild(slide);
    });

    // Создаем точки навигации
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
    
    // Инициализация слайдера
    function initSlider() {
        // Настройка CSS для анимации
        slider.style.overflow = 'hidden';
        slidesWrapper.style.display = 'flex';
        slidesWrapper.style.transition = `transform ${animationDuration}ms ease`;
        
        createDots();
        updateSliderPosition(false); // Без анимации при инициализации
        startAutoSlide();
    }

    // Обновление позиции слайдера с анимацией
    function updateSliderPosition(animate = true) {
        if (isAnimating) return;
        isAnimating = true;
        
        const slideWidth = slider.offsetWidth / slidesToShow;
        const offset = -currentSlide * slideWidth;
        
        if (animate) {
            slidesWrapper.style.transform = `translateX(${offset}px)`;
            
            // Завершение анимации
            setTimeout(() => {
                isAnimating = false;
            }, animationDuration);
        } else {
            slidesWrapper.style.transition = 'none';
            slidesWrapper.style.transform = `translateX(${offset}px)`;
            
            // Возвращаем transition после применения позиции
            setTimeout(() => {
                slidesWrapper.style.transition = `transform ${animationDuration}ms ease`;
                isAnimating = false;
            }, 50);
        }
        
        updateDots();
    }
    
    // Обновление активной точки
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
    
    // Переход к следующей группе слайдов
    function nextSlide() {
        if (isAnimating) return;
        
        currentSlide = (currentSlide + slidesToShow) % slideCount;
        if (currentSlide + slidesToShow > slideCount) {
            currentSlide = 0; // Возврат к началу если не хватает слайдов
        }
        updateSliderPosition();
    }
    
    // Переход к предыдущей группе слайдов
    function prevSlide() {
        if (isAnimating) return;
        
        currentSlide = (currentSlide - slidesToShow + slideCount) % slideCount;
        updateSliderPosition();
    }
    
    // Переход к конкретному слайду
    function goToSlide(index) {
        if (isAnimating) return;
        
        currentSlide = index % (slideCount - slidesToShow + 1);
        updateSliderPosition();
    }
    
    // Запуск автоматической прокрутки
    function startAutoSlide() {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, slideIntervalTime);
    }
    
    // Остановка автоматической прокрутки
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    // Обработчики событий для кнопок
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
    
    // Остановка автоматической прокрутки при наведении на слайдер
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
    
    // Инициализация слайдера
    initSlider();
});
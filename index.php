<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>ДЕБРИ - банно-оздоровительный комплекс</title>
</head>
<body>
    <header class="banner">
        <div class="header">
            <div class="container">
                <div class="header-box">
                    <a href="" class="header-box__logo">
                        <img src="img/logo_header.svg" alt="ДЕБРИ">
                    </a>
                    <ul class="header-box__nav">
                        <li class="nav-link" data-category="sauna"><a href="#">сауны</a></li>
                        <li class="nav-link" data-category="house"><a href="#">гостевой домик</a></li>
                        <li class="nav-link" data-category="rooms"><a href="#">гостевые номера</a></li>
                        <li class="nav-link last" data-category="sport"><a href="#">спортивная комната</a></li>
                    </ul>
                    <div class="header-box__links">
                        <a href=""><img src="img/vk_icon.svg" alt="VK"></a>
                        <a href=""><img src="img/tg_icon.svg" alt="Telegram"></a>
                        <a href="tel:+79272709208" class="header-number">+7 927 270-92-08</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="annons">
            <div class="announcement">
                <div class="announcement-box">
                    <div class="marquee">
                        <p>Аванс не возвращается при отказе от брони менее чем за трое суток</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <img class="main__img" src="img/banner_text.svg">
            </div>
        </div>
        <div class="main-footer">
            <div class="container">
                <div class="main-box">
                    <div class="main-box__buttons">
                        <button class="main-box__button">подобрать отдых</button>
                        <div class="round-banner__button">
                            <img src="img/round_text.svg" class="round-text" alt="Текст">
                            <button class="round-button">
                                <img src="img/play_icon.svg" class="static-icon" alt="Play">
                            </button>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location-box">
                            <img class="location-box__pin" src="img/pin_icon.svg">
                            <p>г. Ульяновск, ул. Галактионова, 41.</p>
                        </div>
                        <a target="_blank" href="https://yandex.ru/maps/-/CHHWAN7Y">смотреть на карте</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="modal-overlay" id="quizModal">
            <div class="modal-content">
                <div class="quiz active">
                    <div class="container">
                        <div class="quiz-inner">
                            <button class="quiz-inner__close">
                                <img src="img/close-light.svg" alt="Закрыть" srcset="">
                            </button>
                            <div class="quiz-box">
                                <div class="quiz-box__col">
                                    <h2 class="quiz-box__title title">подберите свою идеальную сауну за 4 шага</h2>
                                    <p>Ответьте на 4 вопроса и наш администратор подберет вам идеальный вариант сауны для отдыха</p>
                                    <button class="start-quiz__btn">
                                        начать
                                    </button>
                                </div>
                                <div class="quiz-box__col">
                                    <img src="img/start-quiz_1.png" alt="Дебри">
                                    <div class="quiz-box__row-img">
                                        <img src="img/start-quiz_2.png" alt="Дебри">
                                        <img src="img/start-quiz_3.png" alt="Дебри">
                                    </div>
                                </div>
                            </div>
                            <div class="first-step">
                                <div class="first-step__col">
                                    <p class="steps-text">Шаг 1 из 4</p>
                                    <h2 class="quiz-box__title title">Какой тип отдыха <br> вы предпочитаете?</h2>
                                    <div class="first-step__buttons">
                                        <button class="first-step__btn">Активный отдых с компанией</button>
                                        <button class="first-step__btn">Семейные посиделки</button>
                                        <button style="margin-bottom: 0;" class="first-step__btn">Корпоративные мероприятия</button>
                                    </div>
                                </div>
                                <div class="first-step__col row average">
                                    <button class="quiz-nav back nav-back__first">
                                        <img src="img/quiz-arrow_left.svg" alt="Назад">
                                    </button>
                                    <button class="quiz-nav" id="lastNavFirst">
                                        <p>Далее</p>
                                        <img src="img/quiz-arrow_right.svg" alt="Далее">
                                    </button>
                                </div>
                                <div class="first-step__col">
                                    <img src="img/first-step_1.png" alt="Дебри">
                                    <img src="img/first-step_2.png" style="margin-bottom: 0;" alt="Дебри">
                                </div>
                            </div>
                            <div class="second-step row">
                                <div class="first-step__col">
                                    <p class="steps-text">Шаг 2 из 4</p>
                                    <h2 class="quiz-box__title title">Сколько человек<br>будет в сауне? </h2>
                                    <div class="first-step__buttons">
                                        <button class="first-step__btn">До 6 человек</button>
                                        <button class="first-step__btn">6 - 10 человек</button>
                                        <button style="margin-bottom: 0;" class="first-step__btn">Более 10 человек</button>
                                    </div>
                                </div>
                                <div class="first-step__col row average">
                                    <button class="quiz-nav back nav-back__second">
                                        <img src="img/quiz-arrow_left.svg" alt="Назад">
                                    </button>
                                    <button class="quiz-nav" id="secondNavFirst">
                                        <p>Далее</p>
                                        <img src="img/quiz-arrow_right.svg" alt="Далее">
                                    </button>
                                </div>
                                <img class="d-block" src="img/second-step_img.png" alt="Дебри">
                            </div>
                            <div class="third-step">
                                <div class="first-step__col">
                                    <p class="steps-text">Шаг 3 из 4</p>
                                    <h2 class="quiz-box__title title">какой тип сауны
                                    <br>вы предпочитаете?</h2>
                                    <div class="third-step__buttons">
                                        <button class="first-step__btn left">Русская баня на дровах</button>
                                        <button class="first-step__btn left">Греческая сауна</button>
                                        <button style="margin-bottom: 0;" class="first-step__btn left">Турецкий хамам</button>
                                        <button style="margin-bottom: 0;" class="first-step__btn left">Комбинированный вариант</button>
                                    </div>
                                </div>
                                <div class="first-step__col row average average-third">
                                    <button class="quiz-nav back nav-back__third">
                                        <img src="img/quiz-arrow_left.svg" alt="Назад">
                                    </button>
                                    <button class="quiz-nav" id="thirdNavFirst">
                                        <p>Далее</p>
                                        <img src="img/quiz-arrow_right.svg" alt="Далее">
                                    </button>
                                </div>
                            </div>
                            <div class="fourth-step">
                                <div class="first-step__col">
                                    <p class="steps-text">Шаг 4 из 4</p>
                                    <h2 class="quiz-box__title fourth title">Всего один шаг до подбора лучшего варианта <br> для отдыха вашей компании
                                    </h2>
                                    <p class="fourth-step__text">Оставьте свои контактные данные и вы получите персональное предложение в течение 30 минут</p>
                                    <form action="" class="fourth-step__form" id="validationForm">
                                        <div class="input-wrapper">
                                            <input placeholder="Введите имя" type="text" class="fourth-step__input" id="nameInput" required minlength="2">
                                            <div class="error-message"></div>
                                        </div>
                                    
                                        <div class="input-wrapper">
                                            <input placeholder="+7 (___) ___-____" type="tel" class="fourth-step__input" id="phoneInput" required>
                                            <div class="error-message"></div>
                                        </div>
                                    
                                        <button type="submit" class="fourth-step__btn">отправить</button>
                                    
                                        <div class="agreement-box">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" id="agreement" name="agreement" class="agreement-square" required>
                                                <span class="checkmark"></span>
                                                <span class="agreement-text">Я согласен(на) на обработку персональных данных и принимаю условия политики
                                                    конфиденциальности.</span>
                                            </label>
                                            <div class="error-message agreement-error"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <h2 class="about__title title">
                    Банно-оздоровительный комплекс дебри - <br>
                    масштабные пространства для больших компаний.
                </h2>
                <div class="about-box">
                    <div class="about-box__col" data-filter="sauna">
                        <p class="col-title">Сауны</p>
                        <p class="col-text first">5 саун с индивидуальным дизайном и оснащением</p>
                    </div>
                    <div class="about-box__col" data-filter="house">
                        <p class="col-title">гостевой <br> домик</p>
                        <p class="col-text">Большой банкетный зал <br> с мангальной зоной, сауна, <br>4 спальни</p>
                    </div>
                    <div class="about-box__col" data-filter="rooms">
                        <p class="col-title">гостевые <br> номера</p>
                        <p class="col-text">3 больших гостевых номера <br> с разными интерьерами</p>
                    </div>
                    <div class="about-box__col" data-filter="sport">
                        <p class="col-title">Спортивная <br> комната</p>
                        <p class="col-text">Бильярдный теннисный стол <br> на сланцевом камне, домашний <br>кинотеатр</p>
                    </div>
                </div>
                <div class="about-cards">
                    <a class="about-card sauna" href="saunalux.php">
                        <img src="img/sauna_photo1.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 10 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">Сауна Люкс</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>С 6.00 до 18.00 <span class="card-uppercase">4500 р/час</span></p>
                                    <p>С 18.00 до 6.00 <span class="card-uppercase"> 5500 р/час</span></p>
                                </div>
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">200</span> м²</p>
                                    <p>Площадь сауны</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card sauna" href="#">
                        <img src="img/sauna_photo2.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 6 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">русская баня на дровах</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>С 6.00 до 18.00 <span class="card-uppercase">3500 р/час</span></p>
                                    <p>С 18.00 до 6.00 <span class="card-uppercase"> 4000 р/час</span></p>
                                </div>
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">170</span> м²</p>
                                    <p>Площадь сауны</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card sauna" href="#">
                        <img src="img/sauna_photo3.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 10 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">большая сауна</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>С 6.00 до 18.00 <span class="card-uppercase">3800 р/час</span></p>
                                    <p>С 18.00 до 6.00 <span class="card-uppercase"> 4500 р/час</span></p>
                                </div>
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">200</span> м²</p>
                                    <p>Площадь сауны</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card sauna" href="#">
                        <img src="img/sauna_photo4.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 6 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">малая сауна</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>С 6.00 до 18.00 <span class="card-uppercase">3500 р/час</span></p>
                                    <p>С 18.00 до 6.00 <span class="card-uppercase"> 4500 р/час</span></p>
                                </div>
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">100</span> м²</p>
                                    <p>Площадь сауны</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card sauna" href="#">
                        <img src="img/sauna_photo5.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 10 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">греческая сауна</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>С 6.00 до 18.00 <span class="card-uppercase">3500 р/час</span></p>
                                    <p>С 18.00 до 6.00 <span class="card-uppercase">4500 р/час</span></p>
                                </div>
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">200</span> м²</p>
                                    <p>Площадь сауны</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card house" href="#">
                        <img src="img/sauna_photo6.png" class="card-photo">
                        <div class="card-billet">
                            <img src="img/people_icon.svg" class="card-billet__icon">
                            <p class="card-billet__text">до 20 человек</p>
                        </div>
                        <div class="card-inner">
                            <p class="card-title">гостевой домик</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p>Понедельник - четверг <span class="card-uppercase"> 22000 р/сутки</span></p>
                                    <p>Пятница - воскресенье <span class="card-uppercase"> 25000 р/сутки</span></p>
                                </div>
                                <div class="card-info__col">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card rooms" href="#">
                        <img src="img/sauna_photo7.png" alt="гостевой номер" class="card-photo">
                        <div class="card-inner">
                            <p class="card-title">гостевой номер</p>
                            <p class="card-subtitle">в греческом стиле</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">4000 р/ сутки</span></p>
                                    <p><span class="card-uppercase">1500 Р/ 2 ЧАСА,</span> последующие 650р</p>
                                </div>
                                <div class="card-info__col">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card rooms" href="#">
                        <img src="img/sauna_photo8.png" alt="гостевой номер" class="card-photo">
                        <div class="card-inner">
                            <p class="card-title">гостевой номер</p>
                            <p class="card-subtitle">в китайском стиле</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">4000 р/ сутки</span></p>
                                    <p><span class="card-uppercase">1500 Р/ 2 ЧАСА,</span> последующие 750р</p>
                                </div>
                                <div class="card-info__col">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="about-card sport" href="#">
                        <img src="img/sauna_photo9.png" alt="Спортивно-игровая комната" class="card-photo">
                        <div class="card-inner">
                            <p class="card-title">Спортивно-игровая комната</p>
                            <p class="card-subtitle">с бильярдом и кальяном</p>
                            <div class="card-info">
                                <div class="card-info__col">
                                    <p><span class="card-uppercase">600 р/ ЧАС</span></p>
                                </div>
                                <div class="card-info__col">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="possibilities">
                    <hr class="white-line">
                    <h2 class="possibilities__title title">Возможности для мероприятий</h2>
                    <h3 class="possibilities__subtitle">идеально подходит для</h3>
                    <div class="possibilities-box">
                        <div class="possibilities-box__col">
                            <img src="img/corporate_icon.svg" alt="Иконка корпоративные встречи">
                            <p>Корпоративные встречи и праздники</p>
                        </div>
                        <div class="possibilities-box__col">
                            <img src="img/holiday_icon.svg" alt="Иконка праздники">
                            <p>Дни рождения</p>
                        </div>
                        <div class="possibilities-box__col">
                            <img src="img/champagne_icon.svg" alt="Иконка шампанское">
                            <p>Мальчишники и девичники</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/bowler.png" class="bowler-img" alt="Котелок">
            <img src="img/bucket of leaves_right.png" class="bucket-img__right" alt="Ведро для бани">
            <img src="img/bucket of leaves_left.png" class="bucket-left" alt="Ведро для бани">
        </section>

        <section class="circumscribing">
            <div class="container">
                <div class="circumscribing-box">
                    <div class="circumscribing-box__col">
                        <h2 class="circumscribing-box__title title">
                            Способ снять стресс <br> и расслабиться
                        </h2>
                        <p class="circumscribing-box__text">
                            Согласно сложившейся еще с давних времен традиции, <br> сауна - это прекрасный способ расслабиться.
                            <br><br>
                            Оборудованная по всем правилам сауна гарантирует вам безопасный <br> отдых, а комфортные номера - уединенность и
                            конфиденциальность. <br> Уютная атмосфера и дружелюбный персонал окажут вам помощь <br> в том, чтобы насладиться отдыхом в
                            одиночестве или в компании.
                            <br><br>
                            А если вы предпочитаете отдых в компании друзей или семьи, <br> тогда мы рады предложить вам снять сауну с просторными
                            залами, <br> способными вместить до 25 человек. В них вы найдете <br> все необходимое для того, чтобы приятно провести время и
                            забыть <br> о тревогах и заботах. 
                        </p>
                    </div>
                    <div class="circumscribing-box__col">
                        <div class="circumscribing-images">
                            <div class="circumscribing-images__col">
                                <img src="img/circumscribing-img_1.png" alt="Дебри">
                            </div>
                            <div class="circumscribing-images__col">
                                <img src="img/circumscribing-img_2.png" alt="Дебри">
                                <img class="circumscribing-img last" src="img/circumscribing-img_3.png" alt="Дебри">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="reviews__title title">Что о нас говорят</div>
                <div class="reviews-box">
                    <div class="reviews-buttons">
                        <button class="reviews-button arrow-left">
                            <img src="img/arrow-left_icon.svg" alt="Листать">
                        </button>
                        <button class="reviews-button arrow-right">
                            <img src="img/arrow-right_icon.svg" alt="Листать">
                        </button>
                    </div>
                    <div class="reviews-inner">
                        <div class="reviews-inner">
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="Фон">
                                <div class="review-box">
                                    <img src="img/tatyana.png" alt="Фото" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Татьяна Егорова</p>
                                        <p class="client-date">6 августа 2025</p>
                                        <p class="client-review">Отдыхали с компанией в комплексе Дебри, очень понравилось. Были в Люксе, все на высшем уровне. Бассейн выше всяких
                                        похвал, идеальная температура, без запаха, ощущение, что в чистом теплом море плаваешь... <a href="" class="read-btn">Читать ещё</a>
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="Фон">
                                <div class="review-box">
                                    <img src="img/ilya.png" alt="Фото" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Илья Ильич</p>
                                        <p class="client-date">19 февраля 2025</p>
                                        <p class="client-review">Банный комплекс сам по себе замечательный. Я побывал в двух помещениях. Всё чисто, аккуратно. Всё что надо для дыхание
                                        имеется и посуда и столы и кресла качалки и музыка и видео. Бассейны тоже чистые... <a href="" class="read-btn">Читать ещё</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="Фон">
                                <div class="review-box">
                                    <img src="img/alexey.png" alt="Фото" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Алексей Гуреев</p>
                                        <p class="client-date">29 апреля 2024</p>
                                        <p class="client-review">Классная сауна. Всегда ходим в сауну "Люкс". Стол большой, диваны, большой бассейн, сауна, хамам, джакузи, душевые, душ Шарко, есть маленький глубокий бассейн, мангал для шашлыков, холодильник, массажное новое кресло, на втором этаже бильярд и три комнаты...<a href=""
                                        class="read-btn">Читать ещё</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="Фон">
                                <div class="review-box">
                                    <img src="img/endocr.png" alt="Фото" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Эндокринология ГУЗ УОКБ</p>
                                        <p class="client-date">12 февраля 2024</p>
                                        <p class="client-review">Хорошая, просторная, чистая сауна, предусмотрено всё необходимое оборудование, вплоть до мелочей ( шампунь, гель для душа и др). Наши гости были очень довольны. Очень понравился хамам. Большой бассейн. Внимательный персонал. Наша ошибка - 4 часа очень мало... <a href=""
                                                class="read-btn">Читать ещё</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="">
                                <div class="review-box">
                                    <img src="img/anna.png" alt="Фото" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Анна К.</p>
                                        <p class="client-date">12 мая 2024</p>
                                        <p class="client-review">Очень понравилось! Водичка в бассейне теплая! Сауна и хамам огонь 🔥 персонал вежливый!</p>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="">
                                <div class="review-box">
                                    <img src="img/alexey2.png" alt="Фото Ильи" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Алексей Земченко</p>
                                        <p class="client-date">29 октября 2023</p>
                                        <p class="client-review">Шикарная сауна, наверное лучшая из тех что я был в Ульяновске. Брали 6ти местный номер с бассейном, сауной и хамамом. Интерьер выглядит свежо, оформлено все в охотничьем стиле.
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="">
                                <div class="review-box">
                                    <img src="img/elv.png" alt="Фото Татьяны" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Эльвира Трэвел</p>
                                        <p class="client-date">4 августа 2023</p>
                                        <p class="client-review">Сауна так сауна.прекрасное место для отдыха. Хозяин видно, что душу вложил. Вплоть до туалета все идеально. Бассейн тёплый, холодный, горячий. Хамам, сауна, прекрасная зона отдыха. Все пять с плюсом этому заведению.
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="">
                                <div class="review-box">
                                    <img src="img/irina.png" alt="Фото Ильи" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Ирина</p>
                                        <p class="client-date">6 января 2024</p>
                                        <p class="client-review">Сауна отличная. Персонал приветливый и отзывчивый. Были в малой сауне и на самом деле не такая она уж и малая 🤣 большим залом даже не пользовались, все время плескались в бассейне (бассейн чистый, теплый, без ужасного хлорированного запаха)...<a href=""
                                                class="read-btn">Читать ещё</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="">
                                <div class="review-box">
                                    <img src="img/andrey.png" alt="Фото Татьяны" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Павлов Андрей Валерьевич</p>
                                        <p class="client-date">3 августа 2024</p>
                                        <p class="client-review">Одна из лучших саун города, качественный сервис, большой выбор саун для отдыха, добрый и вежливый персонал, любим отдыхать там с друзьями, были много раз, советую!</p>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="">
                                <div class="review-box">
                                    <img src="img/vadim.png" alt="Фото Ильи" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Вадим Григорьев</p>
                                        <p class="client-date">5 февраля 2024</p>
                                        <p class="client-review">Лучшая сауна в городе! Были в Русской сауне. Всё супер. Расчитан зал на компанию из 6-8 человек. Площади большие, зал отдыха огромный. Жаркая русская парилка с вениками, холодная купель, тёплый большой бассейн и уютный хамам. Всё понравилось... <a href=""
                                                class="read-btn">Читать ещё</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_1.png" alt="">
                                <div class="review-box">
                                    <img src="img/magic.png" alt="Фото Татьяны" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Магия мыла</p>
                                        <p class="client-date">29 мая 2023</p>
                                        <p class="client-review">Отмечали день рождения. Были первый раз. Полный восторг! Даже не знала, что у нас в городе есть такое чудесное место. Чисто, красиво. Персонал дружелюбный. Были в римской сауне, теперь имеем цель побывать во всех.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img class="review__bg" src="img/review-bg_2.png" alt="">
                                <div class="review-box">
                                    <img src="img/alexa.png" alt="Фото Ильи" class="client-img">
                                    <div class="review-info">
                                        <p class="client-name">Александра Буркина</p>
                                        <p class="client-date">16 июня 2022</p>
                                        <p class="client-review">Отличный и очень внимательный персонал. Везде чистота и порядок, всё предусмотрено для отличного отдыха. Спасибо вам большое за такой отдых. Вся наша большая и дружная семья, благодарна вам за такой отдых. Мы у вас были уже три раза.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="circles-btns">
                    <button class="circle-btn"></button>
                    <button class="circle-btn"></button>
                    <button class="circle-btn active"></button>
                    <button class="circle-btn"></button>
                    <button class="circle-btn"></button>
                    <button class="circle-btn"></button>
                </div>
            </div>
        </section>

        <section class="contacts">
            <div class="container">
                <h2 class="contacts__title title">контакты</h2>
                <img src="img/logo_header.svg" alt="ДЕБРИ" class="contacts__logo">
                <div class="contacts-box">
                    <div class="contacts-box__col first">
                        <p class="contacts-box__title">Адрес</p>
                        <p class="contacts-box__text">г. Ульяновск, <br> ул. Галактионова, 41.</p>
                        <p class="contacts-box__text">тел +7 927 270-92-08</p>
                        <p class="contacts-box__text">debrisaun@mail.ru</p>
                        <div class="contacts-box__socials">
                            <a href="" class="vk_icon"><img src="img/vk_icon.svg" alt="VK"></a>
                            <a href=""><img src="img/tg_icon.svg" alt="Telegram"></a>
                        </div>
                    </div>
                    <div class="contacts-box__col">
                        <div style="position:relative;overflow:hidden;">
                            <a href="https://yandex.ru/maps/org/debri/148293410018/?utm_medium=mapframe&utm_source=maps"
                                style="color:#eee;font-size:12px;position:absolute;top:0px;">Дебри</a>
                            <a href="https://yandex.ru/maps/195/ulyanovsk/category/guest_house/131994109947/?utm_medium=mapframe&utm_source=maps"
                                style="color:#eee;font-size:12px;position:absolute;top:14px;">Гостевой дом в Ульяновске</a>
                            <iframe class="cart"
                                src="https://yandex.ru/map-widget/v1/?ll=48.381004%2C54.332376&mode=poi&poi%5Bpoint%5D=48.379990%2C54.332246&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D148293410018&z=18.3"
                                frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                        </div>
                    </div>
                    <div class="contacts-box__col">
                        <img src="img/contacts_img.png" alt="ДЕБРИ" class="contacts-box__photo">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p class="footer__text">
                2025 © «ДЕБРИ». Все права защищены <br> Сайт не является публичной офертой и носит информационный характер. <br>
                Политика конфиденциальности
            </p>
        </div>
    </footer>

    <div class="contact-btn">
        <button class="contact-btn__btn">
            <img src="img/contact-btn.svg" alt="Заказать звонок">
        </button>
        <form class="contact-btn__box">
            <input placeholder="+ 7 Ваш телефон" class="contact-btn__input" type="tel" name="tel" id="tel">
            <button class="order-btn" type="button">
                <img src="img/order-btn.svg" alt="Заказать звонок">
                <p>Заказать звонок</p>
            </button>
            <button class="close-btn" type="button">
                <img src="img/close-light.svg" alt="Закрыть">
            </button>
        </form>
    </div>

    <script src="scripts/main.js"></script>
    <script src="scripts/form.js"></script>
    <script src="scripts/sorting.js"></script>
    <script src="scripts/modalQuiz.js"></script>
    <script src="scripts/modalNav.js"></script>
    <script src="scripts/miniFormValid.js"></script>
</body>
</html>
document.addEventListener('DOMContentLoaded', function() {
    const quizBox = document.querySelector('.quiz-box');
    const firstStep = document.querySelector('.first-step');
    const secondStep = document.querySelector('.second-step');
    const thirdStep = document.querySelector('.third-step');
    const fourthStep = document.querySelector('.fourth-step');

    const startBtn = document.querySelector('.start-quiz__btn');
    const lastNavFirst = document.getElementById('lastNavFirst');
    const secondNavFirst = document.getElementById('secondNavFirst');
    const thirdNavFirst = document.getElementById('thirdNavFirst');

    const navBack = document.querySelector('.nav-back__first');
    const navSecondBack = document.querySelector('.nav-back__second');
    const navThirdBack = document.querySelector('.nav-back__third');

    startBtn.addEventListener('click', function() {
        quizBox.style.display='none';
        firstStep.style.display='flex';
    });

    lastNavFirst.addEventListener('click', function() {
        firstStep.style.display='none';
        secondStep.style.display='flex';
    });

    secondNavFirst.addEventListener('click', function() {
        secondStep.style.display='none';
        thirdStep.style.display='block';
    });

    thirdNavFirst.addEventListener('click', function() {
        thirdStep.style.display='none';
        fourthStep.style.display='block';
    });

    navBack.addEventListener('click', function() {
        firstStep.style.display='none';
        quizBox.style.display='flex';
    });

    navSecondBack.addEventListener('click', function() {
        secondStep.style.display='none';
        firstStep.style.display='flex';
    });

    navThirdBack.addEventListener('click', function() {
        thirdStep.style.display='none';
        secondStep.style.display='flex';
    });
});
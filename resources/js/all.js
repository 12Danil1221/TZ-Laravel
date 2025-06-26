//Попапы
const FAQButton = document.querySelectorAll("button.font-bold");
FAQButton.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hidden");
    })
})

//Слайдеры
const mySlider = new Splide('#mySlider', {
    gap: '30px',
    pagination: false,
    breakpoints: {
        1024: {
            perPage: 1
        },
        768: {
            arrows: false,
            pagination: true
        }
    }
})
var splide = new Splide('.splide');
splide.mount();

mySlider.mount();

//swiper slider
const swiper = new Swiper('.swiper', {
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

//Карусель
const slides = document.querySelectorAll('.slide');

slides.forEach(slide => {
    slide.addEventListener('click', () => {
        clearActiveClasses()

        slide.classList.add('active');
    })
})

function clearActiveClasses() {
    slides.forEach(slide => {
        slide.classList.remove('active');
    })
}
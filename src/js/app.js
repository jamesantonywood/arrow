
import Swiper from "swiper";

console.log('hello world');

const hamburger = document.querySelector('.hamburger')
const navigationTag = document.querySelector('.c12-custom-navigation')

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active')
})

window.addEventListener('scroll', (e) => {
    if (window.scrollY >= 300) {
        navigationTag.classList.add('sticky-active');
    } else {
        navigationTag.classList.remove('sticky-active');
    }
}, { 
    passive: true, 
})

const teamMembersTag = document.querySelector('.team-members-swiper');

const swiper = new Swiper(teamMembersTag, {
    direction: 'horizontal',
    slidesPerView: 'auto',
    // loopedSlides: 1,

    spaceBetween: 20,
    // loop: true,
    centeredSlides: false,
    // breakpoints: {
    //     600: {
    //       centeredSlides: true,
    //     },
    // },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

}
)
swiper.init();
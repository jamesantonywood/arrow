import { cssVar } from "./modules/utils"
import { gsap } from "gsap"
import { ScrollTrigger } from 'gsap/ScrollTrigger'
gsap.registerPlugin(ScrollTrigger)
import Splitting from "splitting"
import swipers from "./modules/swipers"



swipers()

Splitting()
const titles = [...document.querySelectorAll('h2[data-splitting]')]
const scroll = () => {
    titles.forEach(title => {
        const start = cssVar(title.getAttribute('data-start'))
        const end = cssVar(title.getAttribute('data-end'))
        const chars = title.querySelectorAll('.char')
       
        gsap.fromTo(chars, {
            'will-change': 'color',
            color: start,
        }, {
            ease: 'power4',
            color: end,
            stagger: 0.4,
            scrollTrigger: {
                trigger: title,
                start: 'center+=20% bottom',
                end: '+=50%',
                scrub: true,
                debug: true,
            },
        })
    })
}
scroll()


















const menuBtn = document.querySelector('.menu-btn')
menuBtn.addEventListener('click', () => {
    document.body.classList.toggle('menu-open')
    menuBtn.classList.toggle('is-active')
    handleFixedBody()
})

// TODO: This isnt the greatest!...
// let prev = 0
// const mainMenu = document.querySelector('.c12-custom-navigation')

// window.onscroll = function() {
//     document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`)
//     const currentScrollPos = window.scrollY
//     if (currentScrollPos > 200) {
//         mainMenu.classList.add('scrolled')
//     } else {
//         mainMenu.classList.remove('scrolled')
//     }
//     // TODO: Add a little scroll padding so its not so reactive (50px...)
//     if (currentScrollPos > 300) {
//         if (currentScrollPos < prev) {
//             mainMenu.classList.add('show')
//         } else {
//             mainMenu.classList.remove('show')
//         }
//         prev = currentScrollPos
//     } else {
//         mainMenu.classList.remove('show')
//     }
// }

// When the menu is open keep the body tag in position
const handleFixedBody = () => {
    let scrollY = document.documentElement.style.getPropertyValue('--scroll-y')
    const bodyTag = document.querySelector('body')
    if (bodyTag.classList.contains('menu-open')) {
        bodyTag.style.position = 'fixed'
        bodyTag.style.top = `-${scrollY}`
    } else {
        scrollY = bodyTag.style.top
        bodyTag.style.position = 'relative'
        bodyTag.style.top = 0
        window.scrollTo(0, parseInt(scrollY || '0') * -1)
    }
}

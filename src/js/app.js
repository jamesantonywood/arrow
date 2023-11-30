import { cssVar } from "./modules/utils"
import { gsap } from "gsap"
import { ScrollTrigger } from 'gsap/ScrollTrigger'
gsap.registerPlugin(ScrollTrigger)
import Splitting from "splitting"
import swipers from "./modules/swipers"



swipers()
// 

const marquee = () => {
    const marqueeContainers = document.querySelectorAll('.marquee-container')
    marqueeContainers.forEach(marqueeContainer => {
        const marquee = marqueeContainer.querySelector('.marquee')
        const dir = marquee.getAttribute('data-direction')
        let operator = ''
        dir === 'left' ? operator = '-' : operator = ''
        const item = marquee.querySelector('.marquee-item').cloneNode(true)
        marquee.appendChild(item)
       
        const animation = marquee.animate([
            { transform: `translate(0, 0)` },
            { transform: `translate(${operator}50%, 0)` }
        ], {
            duration: 60000,
            iterations: Infinity
        })

        marquee.addEventListener('mouseenter', () => {
            animation.pause();
        })
        marquee.addEventListener('mouseleave', () => {
            animation.play();
        })

    })
}
marquee()
























const mq870 = window.matchMedia('(min-width: 870px)')

const whatWeDoAnimation = () => {
    const testArrow = document.querySelector('[data-animation="what-we-do"]')
    if (!testArrow) return

    const stepsTag = document.querySelector('.steps-trigger')
    const animationEnder = document.querySelector('.animation-ender')
    const bottomArm = testArrow.querySelector('.bottom-arm')
    const topArm = testArrow.querySelector('.top-arm')

    const timeline = gsap.timeline({
        defaults: { 
            scrollTrigger: {   
                trigger: stepsTag,
                start: 'top bottom',
                end: 'top top',
                scrub: true,
                debug: true,
            }
        }
    })
    timeline.to(testArrow, {
        debug: true,
        top: "50%",
        left: "35%",
    }).to(topArm, {
        rotate: '135deg'
    }).to(bottomArm, {
        rotate: '45deg'
    })

    gsap.to(testArrow, {
        debug: true,
        opacity: 0,
        scrollTrigger: {
            trigger: animationEnder,
            start: 'bottom bottom',
            end: 'bottom 75%',
            scrub: true,
            debug: true,
        },
    })
}

whatWeDoAnimation()
mq870.addEventListener('change', () => {
    whatWeDoAnimation()
})

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

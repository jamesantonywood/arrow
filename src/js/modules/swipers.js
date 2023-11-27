import Swiper from "swiper"
import { Navigation, Pagination } from 'swiper/modules';

export default () => {

    // University graphic swiper
    const universitiesSwiper = new Swiper('.university-swiper', {
        modules: [Navigation, Pagination],
        pagination: {
            el: ".pagination",
            type: "fraction",
          },
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
          },
    })

    const whatWeDoSwiper = new Swiper('.what-we-do-swiper', {
      direction: "vertical",
      modules: [Navigation, Pagination],
        pagination: {
            el: ".pagination",
            type: "fraction",
          },
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
          },
    })


}
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

    const factSwiper = new Swiper('.facts-swiper', {
        modules: [Navigation, Pagination],
        pagination: {
            el: ".pagination",
            type: "custom",
            renderCustom: function (swiper, current, total) {
                var paginationHtml = '';
                for (var i = 0; i < total; i++) {
                    var className = 'dot swiper-pagination-bullet';
                    if (i === current - 1) {
                        className += 'dot swiper-pagination-bullet-active';
                    }
                    paginationHtml += '<span class="' + className + '"></span>';
                }

                // Combine the progress bar and pagination numbers
                return paginationHtml;
            }

        },
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    })




}

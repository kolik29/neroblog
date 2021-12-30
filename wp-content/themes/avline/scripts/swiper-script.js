$(() => {
    const jsArticleSlider = new Swiper('.js-article-slider', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,

        breakpoints: {
            768: {
                slidesPerView: 6,
                loop: false,
                centeredSlides: false,
                spaceBetween: 10
            }
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const jsArticleSliderFull = new Swiper('.js-article-slider-full', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $('.js-article-slider .swiper-slide').on('click', function() {
        $('.js-article-slider-full').toggleClass('show');

        if ($('.js-article-slider-full').hasClass('show'))
            $('header').css({
                'z-index': 'unset'
            });
        else
            $('header').css({
                'z-index': '20'
            });
    })

    $('.js-article-slider-full').on('click', function(e) {
        if (!($(e.target).hasClass('swiper-button-next') || $(e.target).hasClass('swiper-button-prev'))) {
            $('.js-article-slider-full').removeClass('show');

            $('header').css({
                'z-index': '20'
            });
        }
    })
})
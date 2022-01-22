$(() => {
    $('body').on('click', '.js-load_more_posts', function() {
		$.post( '/wp-admin/admin-ajax.php', {
			action: 'jq_get_posts',
			offset: $('.articles-list .article-item').length,
            post_per_page: $(this).data('count'),
            cat_ID: $(this).data('cat-id'),
            show_paginations: $(this).data('show-paginations'),
		}, (response) => {
            response = JSON.parse(response);

            history.pushState(null, null, '?PAGE=' + (parseInt($(this).data('offset') / $(this).data('count')) + 2));
            
            if (response.page) {
                $(this).closest('.article-load').remove();
                $('.js-page-nav').remove();
                $('.articles-list').append($(response.page).find('.articles-list').html());

                console.log(location)

                $('.js-page-nav a').each(function() {
                    $(this).attr('href', $(this).attr('href').replace('https://neroblog.ru/wp-admin/admin-ajax.php/', location.origin + location.pathname))
                })
            }
		});
    })

    $('#scroll_top').on('click', function() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    })

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 100)
            $('#scroll_top').fadeIn();
        else
            $('#scroll_top').fadeOut();
    })

    $('.js-social-icons__button').on('click', function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active'))
            $(this).next('.social-icons__list').css({
                'height': $(this).next('.social-icons__list').find('.social-icons__link').length * 60
            })
        else
            $(this).next('.social-icons__list').css({
                'height': ''
            })
    })

    $('.js-show-menu-slide').on('click', () => {
        $('#menu-slide-bg').fadeIn();
        $('#menu-slide').addClass('active');
    })

    $('.js-hide-menu-slide').on('click', () => {
        $('#menu-slide-bg').fadeOut();
        $('#menu-slide').removeClass('active');
    })

    $('blockquote').each(function() {
        $(this).addClass($(this).find('div[data-quoute-class]').data('quoute-class'));
    })

    $('ul.menu a:contains("Статьи")').after($('<ul>', {
        class: 'sub-menu'
    }).append($('.js-categories-list').html()))

    $('#js-gdpr_accept').on('click', function() {
        $('#js-gdpr').addClass('display_none');
        document.cookie = "gdpr=close"
    })

    if (getCookie('gdpr') == undefined)
        $('#js-gdpr').removeClass('display_none');
})

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
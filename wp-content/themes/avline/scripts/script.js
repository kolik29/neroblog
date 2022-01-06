$(() => {
    $('body').on('click', '.js-load_more_posts', function() {
        console.log($('.articles-list .article-item').length)
		$.post( '/wp-admin/admin-ajax.php', {
			action: 'jq_get_posts',
			offset: $('.articles-list .article-item').length,
            post_per_page: $(this).data('count'),
            cat_ID: $(this).data('cat-id'),
		}, (response) => {
            response = JSON.parse(response);
            if (response.page) {
                $(this).closest('.article-load').remove();
                $('.articles-list').append($(response.page).find('.articles-list').html());
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
})
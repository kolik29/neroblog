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
        if ($(this).scrollTop() + $(this).height() >= $('body').height())
            $('#scroll_top').fadeIn();
        else
            $('#scroll_top').fadeOut();
    })
})
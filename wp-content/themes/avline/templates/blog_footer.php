<?php $telegram = get_option('telegram'); ?>
<?php if ($telegram != ''): ?>
    <section id="blog_footer" class="display_flex justify-content_center">
        <div class="wrapper">
            <div class="blog-footer display_grid align-items_center font-transform_uppercase font-family_cuprum">
                <span>
                    подпишитесь на мой телеграм-канал, чтобы ничего не пропустить
                </span>
                <a target="_blank" href="<?=$telegram?>" class="button button__sienna button--active social-bg--telegram">
                    ПОДПИСАТЬСЯ
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>
<div class="article-slider js-article-slider swiper">
    <div class="swiper-wrapper">
        <?php while (have_rows('картинки')): the_row(); ?>
            <div class="swiper-slide">
                <?=wp_get_attachment_image(get_sub_field('фото')['ID'], 'medium')?>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="article-slider-full js-article-slider-full position_fixed">
    <div class="swiper-wrapper">
        <?php while (have_rows('картинки')): the_row(); ?>
            <div class="swiper-slide">
                <?=wp_get_attachment_image(get_sub_field('фото')['ID'], 'large')?>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
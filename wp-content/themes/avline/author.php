<?php get_header(); ?>


    <main>
        <div class="space"></div>
        <div class="display_flex">
            <div class="wrapper">
                <div class="display_grid author-blog margin-top_60px margin-top_30px--425px">
                    <div>
                        <div class="display_flex justify-content_center margin-bottom_1_5em">
                            <img class="width_100" src="<?=get_field('картинка', 'user_1')['sizes']['medium_large']?>">
                        </div>
                    </div>

                    <div class="font-family_roboto margin-bottom_60px">
                        <?php print_r(get_field('текст', 'user_1')); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
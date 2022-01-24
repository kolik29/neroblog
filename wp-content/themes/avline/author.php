<?php get_header(); ?>


    <main>
        <div class="space"></div>
        <div class="display_flex justify-content_center">
            <div class="display_flex">
                <div class="wrapper">
                    <div class="author-blog margin-top_60px margin-top_30px--425px font-family_roboto margin-bottom_60px">
                        <?php echo get_field('текст', 'user_1'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
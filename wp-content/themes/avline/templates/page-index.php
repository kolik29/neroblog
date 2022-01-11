<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<main>
    <?php if (is_front_page()): ?>
        <?php get_template_partial('blog_title'); ?>
    <?php else: ?>
        <div class="space"></div>
        <section class="display_flex justify-content_center">
            <div class="wrapper">
                <div class="blog-title__menu display_flex justify-content_center position_relative display_none--425px">
                    <?php get_template_partial('blog_menu'); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php get_template_partial('blog_articles'); ?>
</main>

<?php get_footer(); ?>
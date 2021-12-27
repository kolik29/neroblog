<?php
/*
Template Name: Blog title
*/
?>

<?php $main_page_id = get_option('page_on_front'); ?>
<?php $post = get_post($main_page_id); ?>
<?php setup_postdata($post); ?>

<section id="blog_title" class="min-height_100vh display_flex justify-content_center">
    <div class="wrapper">
        <div class="display_flex justify-content_center flex-direction_column font-align_center">
            <h1 class="font-size_46px font-size_35px--768px">
                <?=get_the_title($post)?>
            </h1>
            <h2>
                <?=get_field('подзаголовок', $main_page_id)?>
            </h2>
        </div>
        <div class="blog-title__menu display_flex justify-content_center position_relative">
            <?php get_template_partial('blog_menu'); ?>
        </div>

        <div class="blog-title__content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
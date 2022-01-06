<?php
/*
Template Name: Blog title
*/
?>

<?php $main_page_id = get_option('page_on_front'); ?>
<?php $post = get_post($main_page_id); ?>
<?php setup_postdata($post); ?>

<section id="blog_title" class="min-height_100vh min-height_unset--425px display_flex justify-content_center">
    <div class="wrapper">
        <div class="display_flex justify-content_center flex-direction_column font-align_center">
            <h1 class="font-size_46px font-size_37px--425px font-align_left--425px">
                <?=get_field('заголовок', $main_page_id)?>
            </h1>
            <h2 class="font-align_left--425px">
                <?=get_field('подзаголовок', $main_page_id)?>
            </h2>
        </div>
        <div class="blog-title__menu display_flex justify-content_center position_relative">
            <?php get_template_partial('blog_menu'); ?>
        </div>

        <div class="blog-title__content display_none--425px">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_header(); ?>

<main>
    <?php get_template_partial('blog_article'); ?>

    <?php $cat_ID = get_cat_ID(get_the_category(get_the_ID())[0]->cat_name) ?>

    <div class="page_post_bottom">
        <?php get_template_partial('blog_post_articles', [
            'post_per_page' => 3,
            'cat_ID' => $cat_ID,
            'exclude' => get_the_ID()
        ]); ?>

        <section id="blog_post_menu" class="display_flex justify-content_center display_none--425px">
            <div class="wrapper">
                <?php get_template_partial('blog_menu', [
                    'cat_ID' => $cat_ID
                ]); ?>
            </div>
        </section>
    </div>
        
    <?php if (get_field('кнопка_в_подвале')): ?>
        <?php get_template_partial('blog_footer'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
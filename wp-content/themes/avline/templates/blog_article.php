<?php
/*
Template Name: blog_article
*/
?>

<?php setup_postdata(get_post()); ?>

<section id="blog_article" class="display_flex justify-content_center">
    <div class="wrapper">
        <?php get_template_partial('breadcrumbs') ?>

        <article>
            <div class="article-head">
                <h1 class="font-size_46px">
                    <?php the_title() ?>
                </h1>
                <div class="article-author display_grid justify-content_start">
                    <span class="article-author__date"><?php the_date('d.m.Y') ?></span> <span class="article-author__name">Автор: <?php the_author() ?></span>
                </div>
            </div>

            <div class="article-preview display_grid align-items_start">
                <div class="article-preview__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php the_excerpt(); ?>
            </div>

            <div class="article-body">
                <?php the_content(); ?>
                <?php $button = get_field('кнопка_в_конце_статьи'); ?>
                <?php if($button['текст'] != ''): ?>
                <div class="article-button display_flex justify-content_center">
                    <a href="<?=$button['ссылка']?>" class="button button__border button__sienna">
                        <?=$button['текст']?>
                    </a>
                </div>
                <?php endif; ?>
            </div>

        </article>
    </div>
</section>
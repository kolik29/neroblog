<?php
$category = get_category(get_query_var('cat'));

$post_per_page = 5;

$cat_ID = 0;

$exclude = [];

$offset = 0;

$current_page = 1;

if (isset($_GET['PAGE']))
    $current_page = $_GET['PAGE'];

if (property_exists($category, 'cat_ID'))
    $cat_ID = $category->cat_ID;

if (array_key_exists('post_per_page', $parameters))
    $post_per_page = $parameters['post_per_page'] ? $parameters['post_per_page'] : $post_per_page;

if (array_key_exists('cat_ID', $parameters))
    $cat_ID = $parameters['cat_ID'] ? $parameters['cat_ID'] : $cat_ID;

if (array_key_exists('exclude', $parameters))
    $exclude = $parameters['exclude'] ? $parameters['exclude'] : [];

if (array_key_exists('offset', $parameters))
    $offset = $parameters['offset'] ? $parameters['offset'] : $offset;

if (isset($_GET['PAGE']))
    $offset = $post_per_page * ($current_page - 1);
?>

<?php $posts = get_posts([
    'numberposts' => $post_per_page,
    'category'    => $cat_ID,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'exclude'     => $exclude,
    'post_type'   => 'post',
    'offset'      => $offset,
    'suppress_filters' => true,
]);
global $post;?>

<?php if (count($posts) > 0): ?>
    <section id="blog_articles" class="display_flex justify-content_center">
        <div class="wrapper">
            <?php $_SESSION['prev_cat'] = $cat_ID ?>

            <div class="articles-title display_flex--425px justify-content_center">
                <?php $term = get_queried_object(); ?>
                <?php if (get_field('статьи_о', $term) == ''): ?>
                    <h2 class="h1 font-size_46px font-size_35px--768px font-size_26px--425px font-align_center--425px<?php if (is_front_page()): ?> display_none--425px<?php endif; ?>">
                        СТАТЬИ ДЛЯ РУКОВОДИТЕЛЕЙ
                    </h2>
                <?php else: ?>
                    <div class="h1 font-size_46px font-size_35px--768px font-size_26px--425px font-align_center--425px<?php if (is_front_page()): ?> display_none--425px<?php endif; ?>">
                        <?php
                        echo 'Статьи о '.get_field('статьи_о', $term);
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="articles-list">
                <?php foreach ($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="article-item display_grid">
                        <div class="article-item__img position_relative display_none--425px">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="article-item__content">
                            <div class="article-item__content-subject font-family_cuprum" aria-current="page">
                                <?php the_category(); ?>
                            </div>
                            <div class="h1">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

                <?php get_template_partial('blog_load_more', [
                    'cat_ID' => $cat_ID,
                    'exclude' => $exclude,
                    'post_per_page' => $post_per_page,
                    'offset' => $offset,
                    'show_paginations' => $parameters['show_paginations']
                ]); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
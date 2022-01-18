<?php
$category = get_category(get_query_var('cat'));

$post_per_page = 3;

$cat_ID = 0;

$exclude = [];

if (property_exists($category, 'cat_ID'))
    $cat_ID = $category->cat_ID;

if (array_key_exists('post_per_page', $parameters))
    $post_per_page = $parameters['post_per_page'] ? $parameters['post_per_page'] : $post_per_page;

if (array_key_exists('cat_ID', $parameters))
    $cat_ID = $parameters['cat_ID'] ? $parameters['cat_ID'] : $cat_ID;

if (array_key_exists('exclude', $parameters))
    $exclude = $parameters['exclude'] ? $parameters['exclude'] : [];
?>

<?php $posts = get_posts([
    'numberposts' => $post_per_page,
    'category'    => $cat_ID,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'exclude'     => $exclude,
    'post_type'   => 'post',
    'suppress_filters' => true,
]);
global $post;?>

<?php if (count($posts) > 0): ?>
    <section id="blog_articles" class="display_flex justify-content_center">
        <div class="wrapper">
            <div class="articles-title">
                <h1 class="font-transform_uppercase">
                    Статьи НА ТЕМУ <?=get_cat_name($cat_ID);?>
                </h1>
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
                            <div class="article-item__content-subject font-family_cuprum">
                                <?php the_category(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <div></div>
            </div>
        </div>
    </section>
<?php endif; ?>
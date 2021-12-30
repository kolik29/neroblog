<?php
$category = get_category(get_query_var('cat'));

$post_per_page = 5;

$cat_ID = 0;

$exclude = [];

$offset = 0;

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
            <div class="articles-title">
                <h1 class="font-size_46px font-size_35px--768px">
                    СТАТЬИ ДЛЯ РУКОВОДИТЕЛЕЙ 
                </h1>
                <h2 class="font-family_oswald font-transform_uppercase font-weight_400">
                    Это нужно знать о сайтах, рекламе и разработчиках 
                </h2>
            </div>
            <div class="articles-list">

                <?php foreach ($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="article-item display_grid">
                        <div class="article-item__img position_relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="article-item__content">
                            <div class="article-item__content-subject font-family_cuprum">
                                <?php the_category(); ?>
                            </div>
                            <h1>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h1>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

                <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category'    => $cat_ID,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'exclude'     => $exclude,
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ]);

                $offset = $post_per_page;

                if (array_key_exists('offset', $_POST))
                    $offset = $_POST['offset'] ? $_POST['offset'] : $offset;
                
                ?>

                <?php if (count($posts) >= $post_per_page + $offset): ?>
                <div class="article-load display_flex justify-content_center">
                    <button class="article-load__button button button__border button__sienna js-load_more_posts" data-count="5" data-cat-id="<?=$cat_ID?>">
                        ЗАГРУЗИТЬ ЕЩЕ
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
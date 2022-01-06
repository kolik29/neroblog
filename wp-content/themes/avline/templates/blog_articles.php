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
                <h1 class="font-size_46px font-size_35px--768px font-size_26px--425px">
                    <?php $term = get_queried_object(); ?>
                    <?php if (get_field('статьи_о', $term) == ''): ?>
                        СТАТЬИ ДЛЯ РУКОВОДИТЕЛЕЙ 
                    <?php else: ?>
                        <?php
                        echo 'Статьи о '.get_field('статьи_о', $term);
                        ?>
                    <?php endif; ?>
                </h1>
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

                if (array_key_exists('offset', $_POST))
                    $offset = $_POST['offset'] ? $_POST['offset'] : $offset;
                ?>

                <?php if (count($posts) >= $post_per_page + $offset): ?>
                <div class="article-load display_flex justify-content_center">
                    <button class="article-load__button button button__black js-load_more_posts" data-count="5" data-cat-id="<?=$cat_ID?>">
                        ЗАГРУЗИТЬ ЕЩЕ
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
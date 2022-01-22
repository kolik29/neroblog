<?php
$cat_ID = $parameters['cat_ID'];
$exclude = $parameters['exclude'];
$post_per_page = $parameters['post_per_page'];
$offset = $parameters['offset'];

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
    <?=count($posts)?> >= <?=$post_per_page?> + <?=$offset?>
<div class="article-load display_flex justify-content_center">
    <button class="article-load__button button button__black js-load_more_posts" data-count="<?=$post_per_page?>" data-cat-id="<?=$cat_ID?>" data-offset="<?=$offset?>" data-show-paginations="<?=$parameters['show_paginations']?>">
        ЗАГРУЗИТЬ ЕЩЕ
    </button>
</div>
<?php endif; ?>

<?php if ($parameters['show_paginations']): ?>
    <div class="display_flex justify-content_start justify-content_center--425px js-page-nav">
        <?php
            $current_page = intval($offset / $post_per_page) + 1;
            
            $args = [
                'format'  => '?PAGE=%#%',
                'current' => max(1, $current_page),
                'total'   => count($posts) / $post_per_page,
                'prev_text' => '',
                'next_text' => '',
            ];

            $pagination = paginate_links($args);

            $pagination = str_replace('prev page-numbers"', 'prev page-numbers" rel="prev"', $pagination);
            $pagination = str_replace('next page-numbers"', 'next page-numbers" rel="next"', $pagination);
            $pagination = str_replace('page-numbers', 'button button__border button__sienna', $pagination);                    

            echo '<div class="page-nav">'.$pagination.'</div>';
        ?>
    </div>
<?php endif; ?>
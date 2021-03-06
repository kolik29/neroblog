<?php $categories_list = get_categories(); ?>
<menu class="display_flex font-family_cuprum">
    <?php
    $category = get_category(get_query_var('cat'));

    $cat_ID = 0;

    if (property_exists($category, 'cat_ID'))
        $cat_ID = $category->cat_ID;

    if (array_key_exists('cat_ID', $parameters))
        $cat_ID = $parameters['cat_ID'];
    ?>

    <li>
        <a href="/blog/"<?php if ($cat_ID == 13): ?> class="active"<?php endif; ?>>
            Все статьи
        </a>
    </li>
    <?php foreach ($categories_list as $categorie): ?>
        <?php if ($categorie->name != 'Блог'): ?>
        <li>
            <a href="<?=get_category_link($categorie->cat_ID)?>" <?php if ($cat_ID == $categorie->cat_ID): ?> class="active"<?php endif; ?>>
                <?=$categorie->name ?>
            </a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
</menu>
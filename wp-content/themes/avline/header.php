<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <header class="display_flex justify-content_center position_fixed width_100">
        <nav class="display_flex align-items_center justify-content_space-between wrapper">
            <a href="/" class="logo display_grid">
                <img src="<?=get_template_directory_uri();?>/img/logo_brown.png" alt="">
                <div class="logo__cat" style="mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png'); -webkit-mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png');"></div>
            </a>
            <div class="menu display_grid">
                <?php $telegram = get_option('telegram'); ?>
                <?php if ($telegram != ''): ?>
                <a href="<?=$telegram?>" class="display_none--768px button button__border button__sienna">
                    Подписаться на телеграм канал
                </a>
                <a href="<?=$telegram?>" class="display_block--768px display_none button button__border button__sienna">
                    телеграм
                </a>
                <?php endif; ?>
                <?php wp_nav_menu([
                    'menu' => 10,
                    'container' => false
                ]); ?>
            </div>
        </nav>
    </header>
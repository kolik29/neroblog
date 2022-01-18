<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQ2FLT2');</script>
    <!-- End Google Tag Manager -->


	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2FLT2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php wp_body_open(); ?>
    <header class="display_flex justify-content_center position_fixed width_100 flex-direction_column align-items_center">
        <nav class="display_flex align-items_center justify-content_space-between wrapper">
            <span class="logo display_grid">
                <img src="<?=get_template_directory_uri();?>/img/logo_brown.svg" alt="">
                <div class="logo__cat" style="mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png'); -webkit-mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png');"></div>
            </span>
            <div class="menu display_grid align-items_center display_none--768px">
                <?php $telegram = get_option('telegram'); ?>
                <?php if ($telegram != ''): ?>
                <a target="_blank" href="<?=$telegram?>" class="button button__border button__sienna">
                    Подписаться на телеграм-канал
                </a>
                <?php endif; ?>
                <?php wp_nav_menu([
                    'menu' => 10,
                    'container' => false
                ]); ?>
            </div>
            <div class="menu-slide-icon display_none display_flex--425px js-show-menu-slide"></div>
        </nav>
        <nav class="display_none display_flex--425px align-items_center justify-content_space-between wrapper" id="social-networks-header">
            <div class="social-icons__list width_100 justify-content_space-between">
                <?php $email = get_option('email'); ?>
                <?php if ($email != ''): ?>
                    <a href="mailto:<?=$email?>" class="social-icons__link social-icons__link--email"></a>
                <?php endif; ?>
                <?php $skype = get_option('skype'); ?>
                <?php if ($skype != ''): ?>
                    <a href="<?=$skype?>" class="social-icons__link social-icons__link--skype"></a>
                <?php endif; ?>            
                <?php $messenger = get_option('messenger'); ?>
                <?php if ($messenger != ''): ?>
                    <a href="<?=$messenger?>" class="social-icons__link social-icons__link--messenger"></a>
                <?php endif; ?>            
                <?php $viber = get_option('viber'); ?>
                <?php if ($viber != ''): ?>
                    <a href="<?=$viber?>" class="social-icons__link social-icons__link--viber"></a>
                <?php endif; ?>            
                <?php $whatsapp = get_option('whatsapp'); ?>
                <?php if ($whatsapp != ''): ?>
                    <a href="<?=$whatsapp?>" class="social-icons__link social-icons__link--whatsapp"></a>
                <?php endif; ?>            
                <?php $telegram = get_option('telegram'); ?>
                <?php if ($telegram != ''): ?>
                    <a href="<?=$telegram?>" class="social-icons__link social-icons__link--telegram"></a>
                <?php endif; ?>
                <span class="font-family_roboto font-size_16px width_40 font-align_center white-space_nowrap">
                    — Задать вопрос
                </span>
            </div>
        </nav>
    </header>
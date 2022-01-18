    <footer class="display_flex justify-content_center flex-direction_column align-items_center">
        <div class="footer-content display_grid wrapper">
            <div class="footer-content__copyright display_flex--768px flex-direction_column--768px justify-content_center--768px align-items_center--768px font-align_center--768px">
                <span href="/">
                    <div href="/" class="logo" style="mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png'); -webkit-mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png');"></div>
                </span>
                <div class="h2">
                    <span href="/">
                        МАРКЕТИНГ<br>
                        ВЕРЕТЕННИКОВА 
                    </span>
                </div>
                <p class="font-family_roboto margin-top_1em">
                    Создание результативных <br>
                    сайтов: от позиционирования <br>
                    до выхода на поток заказов
                </p>
            </div>
            <div class="footer-content__menu display_grid">
                <div class="display_flex align-items_center--425px flex-direction_column font-align_center--425px">
                    <div class="h2">МОИ УСЛУГИ</div>
                    <div class="font-family_roboto font-weight_200">
                        <div class="menu-">
                            <ul class="menu">
                                <?php
                                    $categories_list = get_categories();
                                    
                                    $category = get_category(get_query_var('cat'));

                                    $cat_ID = 0;

                                    if (property_exists($category, 'cat_ID'))
                                        $cat_ID = $category->cat_ID;
                                ?>

                                <?php foreach ($categories_list as $categorie): ?>
                                    <?php if ($categorie->name != 'Блог'): ?>
                                        <li>
                                            <a href="<?=get_category_link($categorie->cat_ID)?>" <?php if ($cat_ID == $categorie->cat_ID): ?> class="active"<?php endif; ?>>
                                                <?=$categorie->name ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="display_flex align-items_center--425px flex-direction_column font-align_center--425px margin-top_1em--425px">
                    <div class="h2">КОНТАКТЫ</div>
                    <menu class="font-family_roboto font-weight_200">
                        <li>
                            <?php $email = get_option('email'); ?>
                            <?php if ($email != ''): ?>
                            <a href="mailto:<?=$email?>" class="font-color_white font-decoration_none text-transform_initial">
                                <?=$email?>
                            </a>
                            <?php endif; ?>
                        </li>
                    </menu>
                    <div class="contacts display_grid">
                        <?php $personal_telegram = get_option('personal_telegram'); ?>
                        <?php if ($personal_telegram != ''): ?>
                        <a target="_blank" href="<?=$personal_telegram?>" class="button button__border button__white font-align_center social-bg--telegram">
                            telegram
                        </a>
                        <?php endif; ?>
                        <?php $whatsapp = get_option('whatsapp'); ?>
                        <?php if ($whatsapp != ''): ?>
                        <a target="_blank" href="<?=$whatsapp?>" class="button button__border button__white font-align_center social-bg--whatsapp">
                            whatsapp   
                        </a>
                        <?php endif; ?>
                        <?php $viber = get_option('viber'); ?>
                        <?php if ($viber != ''): ?>
                        <a target="_blank" href="<?=$viber?>" class="button button__border button__white font-align_center social-bg--viber">
                            viber
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="display_flex align-items_center--425px flex-direction_column font-align_center--425px margin-top_1em--425px">
                    <div class="h2 font-family_cuprum margin_0">ПОДПИШИТЕСЬ</div>
                    <div class="subscribe display_grid">
                        <?php $telegram = get_option('telegram'); ?>
                        <?php if ($telegram != ''): ?>
                        <a target="_blank" href="<?=$telegram?>" class="button button__border button__white social-bg--telegram">
                            <div class="width_100 height_100" style="-webkit-mask-image: url('<?=get_template_directory_uri();?>/img/telegram.png'); mask-image: url('<?=get_template_directory_uri();?>/img/telegram.png')"></div>
                        </a>
                        <?php endif; ?>
                        <?php $youtube = get_option('youtube'); ?>
                        <?php if ($youtube != ''): ?>
                        <a target="_blank" href="<?=$youtube?>" class="button button__border button__white social-bg--youtube">
                            <div class="width_100 height_100" style="-webkit-mask-image: url('<?=get_template_directory_uri();?>/img/video.png'); mask-image: url('<?=get_template_directory_uri();?>/img/video.png')"></div>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="delimeter"></div>
        <div class="wrapper footer-bottom font-family_roboto">
            <div class="display_flex justify-content_space-between flex-direction_column--425px align-items_center--425px font-align_center--425px">
                <div>
                    © <?=date('Y')?> Андрей Веретенников | Все права защищены <br>
                    Использовать материалы сайта запрещено
                </div>
                <div>
                    <a href="/policy" class="policy-link">
                        Политики конфиденциальности и соглашения
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div id="scroll_top">
        <div class="text">
            Наверх
        </div>
    </div>

    <div id="social-networks">
        <div class="social-icons__button js-social-icons__button"></div>
        <div class="social-icons__list">
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
            <?php $personal_telegram = get_option('personal_telegram'); ?>
            <?php if ($personal_telegram != ''): ?>
                <a href="<?=$personal_telegram?>" class="social-icons__link social-icons__link--telegram"></a>
            <?php endif; ?>
        </div>
    </div>

    <div id="menu-slide-bg" class="js-hide-menu-slide"></div>

    <div id="menu-slide">
        <div class="menu-list">
            <div class="menu-list-close js-hide-menu-slide"></div>

            <div class="display_none js-categories-list">
                <?php
                    $categories_list = get_categories();
                    
                    $category = get_category(get_query_var('cat'));

                    $cat_ID = 0;

                    if (property_exists($category, 'cat_ID'))
                        $cat_ID = $category->cat_ID;
                ?>

                <?php foreach ($categories_list as $categorie): ?>
                    <?php if ($categorie->name != 'Блог'): ?>
                        <li>
                            <a href="<?=get_category_link($categorie->cat_ID)?>" <?php if ($cat_ID == $categorie->cat_ID): ?> class="active"<?php endif; ?>>
                                <?=$categorie->name ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <?php wp_nav_menu([
                'menu' => 22,
                'container' => false
            ]); ?>

            <div class="menu-social">
                <?php $facebook = get_option('facebook'); ?>
                <?php if ($facebook != ''): ?>
                    <a class="button button__border button__white font-align_center social-bg--facebook" href="<?=$facebook?>">facebook</a>
                <?php endif; ?>
                <?php $youtube = get_option('youtube'); ?>
                <?php if ($youtube != ''): ?>
                    <a class="button button__border button__white font-align_center social-bg--youtube" href="<?=$youtube?>">youtube</a>
                <?php endif; ?>
                <?php $telegram = get_option('telegram'); ?>
                <?php if ($telegram != ''): ?>
                    <a class="button button__border button__white font-align_center social-bg--telegram" href="<?=$telegram?>">telegram</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="gdpr display_grid display_none" id="js-gdpr">
        <div class="display_flex align-items_center justify-content_center">
            <?=get_field('текст_плашки_политики', 5)?>
        </div>
        <div class="display_flex align-items_center justify-content_center">
            <span href="" class="button button__border button__sienna cursor_pointer" id="js-gdpr_accept">
                <?=get_field('кнопки_плашки_политики', 5)?>
            </span>
        </div>
    </div>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87121272, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                trackHash:true,
                ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87121272" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    
</body>
</html>
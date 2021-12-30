    <footer class="display_flex justify-content_center flex-direction_column align-items_center">
        <div class="footer-content display_grid wrapper">
            <div class="footer-content__copyright display_flex--768px flex-direction_column--768px justify-content_center--768px align-items_center--768px font-align_center--768px">
                <a href="/">
                    <div href="/" class="logo" style="mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png'); -webkit-mask-image: url('<?=get_template_directory_uri();?>/img/cat_header.png');"></div>
                </a>
                <h2>
                    <a href="/">
                        МАРКЕТИНГ<br>
                        ВЕРЕТЕННИКОВА 
                    </a>
                </h2>
                <p class="font-family_roboto cuprum margin-top_1em">
                    Создание результативных <br>
                    сайтов: от позиционирования <br>
                    до выхода на поток заказов
                </p>
            </div>
            <div class="footer-content__menu display_grid">
                <div>
                    <h2>МОИ УСЛУГИ</h2>
                    <div class="font-family_roboto font-weight_200">
                        <?php wp_nav_menu([
                            'menu' => 9,
                        ]); ?>
                    </div>
                </div>
                <div>
                    <h2>КОНТАКТЫ</h2>
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
                        <a href="<?=$personal_telegram?>" class="button button__border button__white font-align_center social-bg--telegram">
                            Телеграм   
                        </a>
                        <?php endif; ?>
                        <?php $whatsapp = get_option('whatsapp'); ?>
                        <?php if ($whatsapp != ''): ?>
                        <a href="<?=$whatsapp?>" class="button button__border button__white font-align_center social-bg--whatsapp">
                            whatsapp   
                        </a>
                        <?php endif; ?>
                        <?php $viber = get_option('viber'); ?>
                        <?php if ($viber != ''): ?>
                        <a href="<?=$viber?>" class="button button__border button__white font-align_center social-bg--viber">
                            viber
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <h2 class="font-family_cuprum margin_0">ПОДПИШИТЕСЬ</h2>
                    <div class="subscribe display_grid">
                        <?php $telegram = get_option('telegram'); ?>
                        <?php if ($telegram != ''): ?>
                        <a href="<?=$telegram?>" class="button button__border button__white social-bg--telegram">
                            <div class="width_100 height_100" style="-webkit-mask-image: url('<?=get_template_directory_uri();?>/img/telegram.png'); mask-image: url('<?=get_template_directory_uri();?>/img/telegram.png')"></div>
                        </a>
                        <?php endif; ?>
                        <?php $youtube = get_option('youtube'); ?>
                        <?php if ($youtube != ''): ?>
                        <a href="<?=$youtube?>" class="button button__border button__white social-bg--youtube">
                            <div class="width_100 height_100" style="-webkit-mask-image: url('<?=get_template_directory_uri();?>/img/video.png'); mask-image: url('<?=get_template_directory_uri();?>/img/video.png')"></div>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="delimeter"></div>
        <div class="wrapper footer-bottom font-family_roboto">
            <div class="display_flex justify-content_space-between">
                <div>
                    © <?=date('Y')?> Андрей Веретенников | Все права защищены <br>
                    Использовать материалы сайта запрещено
                </div>
                <div>
                    <!-- <a href="#">
                        Политики конфиденциальности и соглашения
                    </a> -->
                </div>
            </div>
        </div>
    </footer>

    <div id="scroll_top"></div>
</body>
</html>
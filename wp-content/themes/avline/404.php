<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    
    <section id="page404">
        <img src="<?=get_template_directory_uri()?>/img/404/404.png" alt="" class="number-404">

        <div class="wrapper-404">
            <div class="display_grid height_100">
                <div class="display_flex align-items_end">
                    <img src="<?=get_template_directory_uri()?>/img/404/cat.png" alt="" class="cat-404">
                </div>
                <div class="text-404 display_flex justify-content_center flex-direction_column align-items_start">
                    <h1>
                        ВИДИМО, ДАННАЯ СТРАНИЦА УШЛА В НЕБЫТИЕ... <br>
                        НО ЖИЗНЬ НА ЭТОМ НЕ ЗАКАНЧИВАЕТСЯ!
                    </h1>
                    <p class="display_none--768px">
                        Перейдите на главную и напишите мне, чтобы я сообщил программисту.
                    </p>
                    <p class="sign-404 display_none--768px">
                        Кот Снипет, который тут главный
                    </p>
                    <div>
                        <a href="/" class="button button__border button__sienna">
                            ПЕРЕЙТИ НА ГЛАВНУЮ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
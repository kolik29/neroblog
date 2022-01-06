<div class="repeater repeater_1">
    <div class="repeater-number">
        <?=get_field('номер')?>
    </div>
    <?php if (get_field('название') != ''): ?>
        <h3 class="repeater-title"><?=get_field('название')?></h3>
    <?php endif; ?>
    <div class="display_grid flex-direction_column--425px repeater-text">
        <div><?=get_field('текст_слева')?></div>
        <div>
            <?php if (get_field('текст_справа_как_цитата')): ?><blockquote class="article-quote article-quote--icon"><?php endif; ?>
                <?=get_field('текст_справа')?>
            <?php if (get_field('текст_справа_как_цитата')): ?></div><?php endif; ?>
        </div>
    </div>
</div>

<?php get_header(); ?>

<?php if (is_single()): ?>
    <?php get_template_partial('page-post'); ?>
<?php else: ?>
    <main>
        <div class="display_flex justify-content_center">
            <div class="wrapper">
            <?php get_template_partial('breadcrumbs', [
                'class' => 'margin-top_120px margin-top_150px--425px'
            ]) ?>
                <?php the_content(); ?>
            </div>
        </div>
    </main>
<?php endif; ?>

<?php get_footer(); ?>
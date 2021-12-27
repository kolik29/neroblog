<?php get_header(); ?>

<?php if (is_single()): ?>
    <?php get_template_partial('page-post'); ?>
<?php else: ?>
    <main>
        <?php the_content(); ?>
    </main
<?php endif; ?>

<?php get_footer(); ?>
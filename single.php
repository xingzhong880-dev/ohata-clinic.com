<?php
get_header();
$post_type = get_query_var('post_type');
?>
<?php if ($post_type == 'news'): ?>
    <?php get_template_part('single/news'); ?>
<?php else: ?>
    <?php get_template_part('single/post'); ?>
<?php endif; ?>
<section class="page-common-head">
    <div class="page-common-head__inner inner860">
        <h1 class="page-common-head__title"><?php the_title(); ?></h1>
    </div>
    <img class="page-common-head__image" src="..." alt="">
</section>
<?php if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
} ?>
<section class="page-common-content page-common-content-template">
    <div class="page-common-content__inner inner860">
        <?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>
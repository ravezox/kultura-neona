<?php
/** Fallback template for Культура Неона. */
if (!defined('ABSPATH')) exit;
get_header();
?>
<main style="max-width:1100px;margin:50px auto;padding:20px;font-family:sans-serif">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article><h1><?php the_title(); ?></h1><?php the_content(); ?></article>
<?php endwhile; else : ?><h1>Культура Неона</h1><p>Страница готовится.</p><?php endif; ?>
</main>
<?php get_footer();

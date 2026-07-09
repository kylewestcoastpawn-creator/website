<?php
/**
 * WooCommerce - Single Product
 */
defined('ABSPATH') || exit;

get_header();
?>

<main>
    <div class="woo-single-wrapper">
        <?php while (have_posts()) : the_post(); ?>

            <?php wc_get_template_part('content', 'single-product'); ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>

<?php
/**
 * WooCommerce - Shop / Product Archive
 */
defined('ABSPATH') || exit;

get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/gunrack.jpg') center 40%/cover no-repeat;">
        <h1><?php woocommerce_page_title(); ?></h1>
        <p>Browse our inventory online</p>
    </div>

    <section class="services">
        <div class="woo-shop-wrapper">
            <aside class="shop-sidebar">
                <?php if (is_active_sidebar('shop-sidebar')) : ?>
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                <?php else : ?>
                    <?php
                    the_widget('WC_Widget_Product_Categories', array(
                        'title' => 'Categories',
                        'orderby' => 'name',
                        'count' => 1,
                        'hierarchical' => 1,
                    ));
                    the_widget('WC_Widget_Price_Filter', array('title' => 'Filter by Price'));
                    ?>
                <?php endif; ?>
            </aside>

            <div class="shop-products">
                <?php if (woocommerce_product_loop()) : ?>

                    <?php do_action('woocommerce_before_shop_loop'); ?>

                    <?php woocommerce_product_loop_start(); ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php wc_get_template_part('content', 'product'); ?>
                    <?php endwhile; ?>

                    <?php woocommerce_product_loop_end(); ?>

                    <?php do_action('woocommerce_after_shop_loop'); ?>

                <?php else : ?>
                    <?php do_action('woocommerce_no_products_found'); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

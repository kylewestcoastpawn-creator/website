<?php
/**
 * West Coast Pawn & Gun Theme Functions
 */

if (!defined('ABSPATH')) exit;

define('WESTCOAST_VERSION', '1.0.0');

function westcoast_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 48,
        'width'       => 48,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(array(
        'primary'     => __('Primary Menu', 'westcoast'),
        'footer'      => __('Footer Menu', 'westcoast'),
        'footer-legal' => __('Footer Legal Menu', 'westcoast'),
    ));
}
add_action('after_setup_theme', 'westcoast_setup');

function westcoast_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Inter:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('westcoast-style', get_stylesheet_uri(), array('google-fonts'), WESTCOAST_VERSION);
    wp_enqueue_script('westcoast-custom', get_template_directory_uri() . '/js/custom.js', array(), WESTCOAST_VERSION, true);
}
add_action('wp_enqueue_scripts', 'westcoast_scripts');

function westcoast_widgets_init() {
    register_sidebar(array(
        'name'          => __('Shop Sidebar', 'westcoast'),
        'id'            => 'shop-sidebar',
        'description'   => __('Sidebar for WooCommerce shop pages', 'westcoast'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'westcoast'),
        'id'            => 'footer-widgets',
        'description'   => __('Footer widget area', 'westcoast'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'westcoast_widgets_init');

function westcoast_woocommerce_wrapper_before() {
    echo '<main><section class="services" style="background:#111;"><div style="max-width:1200px;margin:0 auto;">';
}
function westcoast_woocommerce_wrapper_after() {
    echo '</div></section></main>';
}
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'westcoast_woocommerce_wrapper_before');
add_action('woocommerce_after_main_content', 'westcoast_woocommerce_wrapper_after');

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

function westcoast_products_per_page() {
    return 12;
}
add_filter('loop_shop_per_page', 'westcoast_products_per_page');

function westcoast_loop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'westcoast_loop_columns');

function westcoast_logo_svg() {
    return '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="1" fill="#C0A060"/><line x1="12" y1="1" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="1" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="23" y2="12"/></svg>';
}

function westcoast_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'westcoast_body_classes');

function westcoast_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'westcoast_excerpt_length');

function westcoast_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'westcoast_excerpt_more');

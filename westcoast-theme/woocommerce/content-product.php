<?php
/**
 * WooCommerce - Product Card in Loop
 */
defined('ABSPATH') || exit;

global $product;

if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<li <?php wc_product_class('wc-product-card', $product); ?>>
    <a href="<?php the_permalink(); ?>" class="wc-product-link">
        <div class="wc-product-thumb">
            <?php
            if ($product->is_on_sale()) {
                echo '<span class="onsale">Sale!</span>';
            }
            echo woocommerce_get_product_thumbnail('woocommerce_thumbnail');
            ?>
        </div>
        <h2 class="wc-product-title"><?php the_title(); ?></h2>
        <div class="wc-product-price">
            <?php echo $product->get_price_html(); ?>
        </div>
    </a>
    <?php
    echo apply_filters(
        'woocommerce_loop_add_to_cart_link',
        sprintf(
            '<a href="%s" data-quantity="1" class="%s btn btn-primary" %s>%s</a>',
            esc_url($product->add_to_cart_url()),
            esc_attr(implode(' ', array_filter(array(
                'button',
                'product_type_' . $product->get_type(),
                $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                $product->supports('ajax_add_to_cart') && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
            )))),
            isset($product) ? wc_implode_html_attributes(array(
                'data-product_id'  => $product->get_id(),
                'data-product_sku' => $product->get_sku(),
                'aria-label'       => $product->add_to_cart_description(),
                'rel'              => 'nofollow',
            )) : '',
            esc_html($product->add_to_cart_text())
        ),
        $product,
        array()
    );
    ?>
</li>

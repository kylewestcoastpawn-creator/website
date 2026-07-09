<?php get_header(); ?>

<main>
    <div class="page-header">
        <h1>Page Not Found</h1>
        <p>The page you're looking for doesn't exist or has been moved.</p>
    </div>

    <section class="services" style="text-align:center;">
        <p style="color:var(--muted);margin-bottom:30px;">Try heading back to the homepage or checking our navigation.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go Home</a>
        <?php if (class_exists('WooCommerce')) : ?>
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btn-outline" style="margin-left:15px;">Browse Shop</a>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>

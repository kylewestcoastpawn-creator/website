<?php
/**
 * Template Name: Privacy Policy
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/colt.jpg') center/cover no-repeat;">
        <h1>Privacy Policy</h1>
        <p>How we handle your information</p>
    </div>

    <section class="services">
        <div class="entry-content fade-in">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

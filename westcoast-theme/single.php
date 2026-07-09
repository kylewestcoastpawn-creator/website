<?php get_header(); ?>

<main>
    <div class="page-header">
        <h1><?php the_title(); ?></h1>
        <p><?php echo get_the_date(); ?></p>
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

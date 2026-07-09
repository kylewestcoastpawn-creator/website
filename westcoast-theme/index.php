<?php get_header(); ?>

<main>
    <div class="page-header">
        <h1><?php echo is_search() ? 'Search Results' : 'Blog'; ?></h1>
        <p><?php echo is_search() ? 'Results for: ' . esc_html(get_search_query()) : 'Latest news and updates'; ?></p>
    </div>

    <section class="services" aria-label="Blog posts">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="policy-box fade-in" style="margin-bottom:30px;">
                    <h3><a href="<?php the_permalink(); ?>" style="color:var(--accent);text-decoration:none;"><?php the_title(); ?></a></h3>
                    <p style="color:#555;font-size:0.85rem;margin-bottom:10px;"><?php echo get_the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="margin-top:15px;font-size:0.8rem;padding:8px 20px;">Read More</a>
                </article>
            <?php endwhile; ?>
                <div style="text-align:center;margin-top:40px;">
                    <?php the_posts_pagination(array(
                        'prev_text' => '&laquo; Previous',
                        'next_text' => 'Next &raquo;',
                    )); ?>
                </div>
            <?php else : ?>
                <p style="text-align:center;color:var(--muted);">No posts found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

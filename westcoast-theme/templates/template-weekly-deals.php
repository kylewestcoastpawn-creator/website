<?php
/**
 * Template Name: Weekly Deals
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/glock.jpg') center/cover no-repeat;padding:220px 40px 180px;">
        <h1>Weekly Deals</h1>
        <p>Fresh deals drop every week &mdash; subscribe so you don't miss out</p>
    </div>

    <section class="services" aria-labelledby="deals-heading">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <div class="fade-in" style="text-align:center;margin-bottom:40px;">
                <p style="color:#ccc;font-size:1.05rem;line-height:1.8;margin-bottom:15px;">Sale prices are only valid until the next sales letter comes out. All items must be paid in full &mdash; no layaway on sale items.</p>
                <p style="color:var(--accent);font-size:1rem;">Subscribe to our email list to get the deals before they hit the floor.</p>
            </div>

            <?php
            // Display page content (deals can be edited in WP admin)
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>

            <div class="fade-in" style="background:#111;border:2px solid var(--accent);border-radius:12px;padding:30px;text-align:center;margin-top:40px;">
                <h3 style="font-family:'Oswald',sans-serif;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:15px;">Get Deals First</h3>
                <p style="color:#aaa;margin-bottom:20px;font-size:0.95rem;">Join our email list. No spam. Unsubscribe anytime.</p>
                <form action="https://westcoastpawn.us12.list-manage.com/subscribe/post?u=734a9d157eec02c5218892b87&amp;id=efdddca3f9&amp;f_id=0051e8e1f0" method="post" target="_blank" style="max-width:400px;margin:0 auto;">
                    <input type="email" name="EMAIL" placeholder="Enter your email *" required style="width:100%;padding:12px 16px;border:1px solid #333;border-radius:6px;background:#1a1a1a;color:#fff;font-size:1rem;margin-bottom:12px;box-sizing:border-box;">
                    <input type="text" name="PHONE" placeholder="Phone number (optional)" style="width:100%;padding:12px 16px;border:1px solid #333;border-radius:6px;background:#1a1a1a;color:#fff;font-size:1rem;margin-bottom:12px;box-sizing:border-box;">
                    <div aria-hidden="true" style="position:absolute;left:-5000px;"><input type="text" name="b_734a9d157eec02c5218892b87_efdddca3f9" tabindex="-1" value=""></div>
                    <button type="submit" class="btn btn-primary" style="width:100%;border-radius:6px;">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Front Page
 * Homepage template for West Coast Pawn & Gun
 */
get_header();
?>

<main>
    <!-- HERO -->
    <section class="hero" aria-label="Hero banner">
        <div class="hero-content">
            <h2><svg width="20" height="20" viewBox="0 0 24 24" fill="#C0A060" style="vertical-align:middle;margin-right:4px"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg> Lakelands Local Gun Shop</h2>
            <h1>West Coast<br><span>Pawn &amp; Gun</span></h1>
            <p>We buy, sell, trade, and pawn firearms, ammo, and accessories. Walk in, see what we've got, and talk to someone who actually knows guns.</p>
            <div class="btn-group">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">Get In Touch</a>
                <?php if (class_exists('WooCommerce')) : ?>
                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btn-outline">Shop Online</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- TICKER -->
    <div class="ticker" aria-hidden="true">
        <div class="ticker-track">
            <div class="ticker-item"><?php echo westcoast_logo_svg(); ?> Handguns <span>&#9733;</span> Rifles <span>&#9733;</span> Shotguns <span>&#9733;</span> Ammo <span>&#9733;</span> Accessories <span>&#9733;</span> Scopes <span>&#9733;</span> Holsters <span>&#9733;</span> Pawn Loans <span>&#9733;</span> Free Appraisals <span>&#9733;</span> Layaway Available <span>&#9733;</span> FFL Transfers <span>&#9733;</span>&nbsp;&nbsp;&nbsp;</div>
            <div class="ticker-item"><?php echo westcoast_logo_svg(); ?> Handguns <span>&#9733;</span> Rifles <span>&#9733;</span> Shotguns <span>&#9733;</span> Ammo <span>&#9733;</span> Accessories <span>&#9733;</span> Scopes <span>&#9733;</span> Holsters <span>&#9733;</span> Pawn Loans <span>&#9733;</span> Free Appraisals <span>&#9733;</span> Layaway Available <span>&#9733;</span> FFL Transfers <span>&#9733;</span>&nbsp;&nbsp;&nbsp;</div>
        </div>
    </div>

    <!-- SERVICES PREVIEW -->
    <section class="home-services" aria-labelledby="home-services-heading">
        <div class="section-title">
            <h2 id="home-services-heading">What We Do</h2>
            <div class="divider"></div>
            <p>Here's what we can do for you</p>
        </div>
        <div class="home-services-grid">
            <div class="home-service-card fade-in fade-in-delay-1">
                <div class="icon" aria-hidden="true"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="1.5"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1" fill="#C0A060"/><line x1="12" y1="1" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="1" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="23" y2="12"/></svg></div>
                <h3>Buy &amp; Sell</h3>
                <p>We've got 500+ guns in stock. Looking to sell? Bring it in and we'll give you a fair offer, cash on the spot.</p>
            </div>
            <div class="home-service-card fade-in fade-in-delay-2">
                <div class="icon" aria-hidden="true"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17,1 21,5 17,9"/><path d="M3 11V9a4 4 0 014-4h14"/><polyline points="7,23 3,19 7,15"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg></div>
                <h3>Trade &amp; Pawn</h3>
                <p>Want to upgrade? Trade in what you've got. Need cash? We do pawn loans too. Quick, easy, no questions asked.</p>
            </div>
            <div class="home-service-card fade-in fade-in-delay-3">
                <div class="icon" aria-hidden="true"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="8" y1="16" x2="12" y2="16"/></svg></div>
                <h3>FFL Transfers</h3>
                <p>Bought a gun online? Ship it to us and we'll take care of the paperwork. $40 per transfer.</p>
            </div>
        </div>
        <div style="text-align:center; margin-top: 40px;">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="btn btn-outline">View All Services</a>
        </div>
    </section>

    <!-- CCW BANNER -->
    <div class="home-ccw-banner fade-in">
        <h2><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><polygon points="12,3 1,9 12,15 23,9"/><path d="M5 12v6c0 2 3 4 7 4s7-2 7-4v-6"/><line x1="23" y1="9" x2="23" y2="17"/></svg> Conceal Carry Class</h2>
        <p>Get your concealed carry certificate in one day. 4.5-hour class and live-fire qualification.</p>
        <div class="home-ccw-details">
            <div class="home-ccw-detail">
                <div class="value">$59.99</div>
                <div class="label">Per Person</div>
            </div>
            <div class="home-ccw-detail">
                <div class="value">4.5 hrs</div>
                <div class="label">Class + Range</div>
            </div>
            <div class="home-ccw-detail">
                <div class="value">JUL 19</div>
                <div class="label">Next Class &mdash; Sunday</div>
            </div>
            <div class="home-ccw-detail">
                <div class="value">20</div>
                <div class="label">Max Class Size</div>
            </div>
        </div>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('conceal-carry-class'))); ?>" class="btn btn-primary">Learn More &amp; Sign Up</a>
    </div>

    <?php if (class_exists('WooCommerce')) : ?>
    <!-- FEATURED PRODUCTS -->
    <section class="home-services" style="background:#1a1a1a;" aria-labelledby="featured-heading">
        <div class="section-title">
            <h2 id="featured-heading">Featured Products</h2>
            <div class="divider"></div>
            <p>Check out what we've got in stock</p>
        </div>
        <div style="max-width:1200px;margin:0 auto;">
            <?php echo do_shortcode('[products limit="6" columns="3" orderby="popularity" class="featured-products"]'); ?>
        </div>
        <div style="text-align:center; margin-top: 40px;">
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btn-outline">View All Products</a>
        </div>
    </section>
    <?php endif; ?>

    <!-- WHY US -->
    <section class="why-us" aria-labelledby="why-heading">
        <div class="section-title">
            <h2 id="why-heading">Why Choose Us</h2>
            <div class="divider"></div>
        </div>
        <div class="why-grid">
            <div class="why-item fade-in fade-in-delay-1">
                <div class="number">15+</div>
                <h4>Years in Business</h4>
                <p>Been here since 2008 and we're not going anywhere</p>
            </div>
            <div class="why-item fade-in fade-in-delay-2">
                <div class="number">500+</div>
                <h4>Firearms in Stock</h4>
                <p>New and used: handguns, rifles, shotguns, you name it</p>
            </div>
            <div class="why-item fade-in fade-in-delay-3">
                <div class="number">FFL/SOT</div>
                <h4>Licensed Dealer</h4>
                <p>We do everything by the book, always have, always will</p>
            </div>
            <div class="why-item fade-in fade-in-delay-4">
                <div class="number">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <h4>Top Rated</h4>
                <p>Our customers keep coming back and bring their friends</p>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="home-contact" aria-labelledby="home-contact-heading">
        <div class="section-title">
            <h2 id="home-contact-heading">Visit Our Store</h2>
            <div class="divider"></div>
        </div>
        <div class="home-contact-grid">
            <div class="home-contact-info fade-in">
                <h3>Come See Us</h3>
                <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> 5619 US Hwy 98 N, Lakeland, FL 33809</p>
                <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg> Mon&ndash;Fri 10am&ndash;6pm &middot; Sat 9am&ndash;6pm &middot; Sun Closed (we're at the range)</p>
                <a href="tel:+18638165830" class="phone-big">(863) 816-5830</a>
                <div class="btn-group" style="justify-content: flex-start;">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">Contact Us</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('policies'))); ?>" class="btn btn-outline">Store Policies</a>
                </div>
            </div>
            <div class="home-contact-map fade-in fade-in-delay-2">
                <iframe
                    src="https://maps.google.com/maps?q=5619+US+Hwy+98+N+Lakeland+FL+33809&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    title="Store location on Google Maps"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

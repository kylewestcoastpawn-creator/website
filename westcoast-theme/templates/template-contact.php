<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/1911.jpg') center/cover no-repeat;">
        <h1>Contact Us</h1>
        <p>Stop by, give us a call, or drop us a line</p>
    </div>

    <section class="contact" aria-labelledby="contact-heading">
        <div class="contact-wrapper">
            <div class="contact-info fade-in">
                <h3>Get In Touch</h3>
                <div class="info-item">
                    <div class="info-icon">&#128205;</div>
                    <div>
                        <h4>Address</h4>
                        <p>5619 US Hwy 98 N, Lakeland, FL 33809</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">&#128222;</div>
                    <div>
                        <h4>Phone</h4>
                        <a href="tel:+18638165830">(863) 816-5830</a>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">&#9993;</div>
                    <div>
                        <h4>Email</h4>
                        <a href="mailto:westcoastpawn@gmail.com">westcoastpawn@gmail.com</a>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">&#128336;</div>
                    <div>
                        <h4>Hours</h4>
                        <table class="hours-table">
                            <tr><td>Mon &ndash; Fri</td><td>10am &ndash; 6pm</td></tr>
                            <tr><td>Saturday</td><td>9am &ndash; 6pm</td></tr>
                            <tr><td>Sunday</td><td>Closed (we're at the range)</td></tr>
                        </table>
                    </div>
                </div>
                <div class="map-embed">
                    <iframe
                        src="https://maps.google.com/maps?q=5619+US+Hwy+98+N+Lakeland+FL+33809&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        title="Store location on Google Maps"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="contact-form fade-in fade-in-delay-2">
                <h3>Send Us a Message</h3>
                <?php
                // If WPForms is installed, use a shortcode. Otherwise show a basic form placeholder.
                if (shortcode_exists('wpforms')) {
                    echo do_shortcode('[wpforms id="contact-form"]');
                } else {
                    ?>
                    <p style="color:var(--muted);margin-bottom:20px;">Install <strong>WPForms</strong> plugin and create a contact form, then add the shortcode here via the WordPress editor.</p>
                    <p style="color:var(--muted);">Or just call us at <a href="tel:+18638165830" style="color:var(--accent);">(863) 816-5830</a></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

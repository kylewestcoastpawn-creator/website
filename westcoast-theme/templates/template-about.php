<?php
/**
 * Template Name: About / Who We Are
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/benelli.jpg') center/cover no-repeat;padding:220px 40px 180px;">
        <h1>Who We Are</h1>
        <p>The people behind the counter</p>
    </div>

    <section class="services" aria-labelledby="about-heading">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <div class="ccw-info fade-in">
                <h3>Our Story</h3>
                <p style="color:#ccc;line-height:1.8;margin-bottom:20px;">West Coast Pawn &amp; Gun is a family-owned shop right here in Lakeland. We opened in 2008 and we've been doing the same thing ever since: buying, selling, trading, and pawning firearms and just about anything else of value.</p>
                <p style="color:#ccc;line-height:1.8;margin-bottom:20px;">We're gun people. We shoot, we collect, and we know what we're talking about. If you've got questions, we'll give you a straight answer, not a sales pitch.</p>
                <p style="color:#ccc;line-height:1.8;margin-bottom:20px;">Whether you're a first-time buyer or you've been around guns your whole life, you'll get the same thing from us: a fair deal and honest service. No games, no pressure.</p>
                <p style="color:#ccc;line-height:1.8;margin-bottom:30px;">We live and work in Lakeland, and this community is home. Stop by sometime. We'd love to meet you.</p>

                <h3>Why People Come to Us</h3>
                <ul class="ccw-list">
                    <li>Family-owned, not a chain, not a big box store</li>
                    <li>Staff that actually knows firearms, not just reading off a tag</li>
                    <li>Fair prices. We're not trying to rip anyone off.</li>
                    <li>Silencer Shop Elite Dealer with a kiosk right in the store</li>
                    <li>Licensed FFL/SOT. Everything we do is by the book.</li>
                </ul>

                <h3>How We Do Business</h3>
                <p style="color:#ccc;line-height:1.8;">We keep it simple. Fair prices, straight talk, and we follow the law every single time. That's how we've done it since day one, and that's how we'll keep doing it.</p>
            </div>
        </div>
    </section>

    <section class="services" style="padding-top:0;">
        <div style="max-width:1000px;margin:0 auto;padding:0 20px;">
            <div class="ccw-info fade-in">
                <h3 style="text-align:center;margin-bottom:40px;">Meet the Team</h3>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-photo">
                            <img src="https://placehold.co/300x300/1a1a1a/C0A060?text=Photo" alt="Team member photo">
                        </div>
                        <h4 class="team-name">Name Here</h4>
                        <p class="team-role">Owner / Title</p>
                        <p class="team-bio">Short bio goes here. A couple sentences about this person, their background, what they do at the shop, and what they bring to the team.</p>
                    </div>
                    <div class="team-card">
                        <div class="team-photo">
                            <img src="https://placehold.co/300x300/1a1a1a/C0A060?text=Photo" alt="Team member photo">
                        </div>
                        <h4 class="team-name">Name Here</h4>
                        <p class="team-role">Title</p>
                        <p class="team-bio">Short bio goes here. A couple sentences about this person, their background, what they do at the shop, and what they bring to the team.</p>
                    </div>
                    <div class="team-card">
                        <div class="team-photo">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/clark.jpeg" alt="Clark — team member at West Coast Pawn &amp; Gun" style="object-position: top;">
                        </div>
                        <h4 class="team-name">Clark</h4>
                        <p class="team-role">Title</p>
                        <p class="team-bio">Clark Impastato is an 8-year U.S. military veteran who served in the Navy aboard the USS Shiloh and with SEAL Team 5, deploying to the Persian Gulf and Southeast Asia. He later served with the 19th Special Forces Group and worked as a private military contractor with deployments to Israel, Afghanistan, and Iraq. After returning home, he spent 8 years with the Phoenix Police Department. Today, he brings experience, energy, and a great sense of humor to the team.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center; margin-top: 40px;">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">Get In Touch</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

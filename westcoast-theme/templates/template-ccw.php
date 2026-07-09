<?php
/**
 * Template Name: Conceal Carry Class
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/glizzy.jpg') center/cover no-repeat;">
        <h1>Conceal Carry Class</h1>
        <p>One class, one day. You'll leave ready to carry.</p>
    </div>

    <section class="ccw" aria-labelledby="ccw-heading">
        <div class="ccw-wrapper">
            <div class="ccw-info fade-in">
                <h3>What You'll Learn</h3>
                <ul class="ccw-list">
                    <li>How to handle a firearm safely</li>
                    <li>The concealed carry laws you need to know</li>
                    <li>How to stay aware and avoid trouble</li>
                    <li>Drawing from a holster the right way</li>
                    <li>Live-fire range qualification</li>
                </ul>
                <h3>Class Details</h3>
                <ul class="ccw-list">
                    <li><strong>Duration:</strong> 4.5 hours (classroom + range time)</li>
                    <li><strong>Cost:</strong> $59.99 per person</li>
                    <li><strong>Includes:</strong> All materials, firearm, and ammo for qualification</li>
                    <li><strong>Requirements:</strong> Valid government-issued ID, must be 21+</li>
                    <li><strong>Class Size:</strong> Limited to 20 students per session</li>
                </ul>
            </div>
            <div class="ccw-cta fade-in fade-in-delay-2">
                <div class="ccw-card">
                    <div class="ccw-card-icon" aria-hidden="true"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12,3 1,9 12,15 23,9"/><path d="M5 12v6c0 2 3 4 7 4s7-2 7-4v-6"/><line x1="23" y1="9" x2="23" y2="17"/></svg></div>
                    <h3>Upcoming Class Dates</h3>
                    <p style="font-size:1.1rem;margin-bottom:8px;"><strong>Sunday, July 19th, 2026</strong></p>
                    <p style="color:#aaa;">10:45 AM to 3:30 PM</p>
                    <p style="margin-top:15px;color:#999;font-size:0.9rem;">Call or visit the store to reserve your spot. Class size is limited.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="instructor fade-in" aria-labelledby="instructor-heading" style="max-width:800px;margin:0 auto 60px;padding:0 20px;">
        <div class="section-title">
            <h2 id="instructor-heading">Meet Your Instructor</h2>
            <div class="divider"></div>
        </div>
        <div style="display:flex;gap:30px;align-items:center;flex-wrap:wrap;justify-content:center;margin-top:30px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/instructor.jpg" alt="Concealed carry class instructor at West Coast Pawn &amp; Gun in Lakeland FL" style="width:220px;height:220px;object-fit:cover;border-radius:12px;border:3px solid var(--accent);">
            <div style="flex:1;min-width:250px;">
                <p style="color:#ccc;line-height:1.8;">Meet Mike, a retired law enforcement professional with nearly 30 years of service. He has led international investigations, trained at the FBI Academy, and served as a Chief of Police. He is now dedicated to teaching responsible firearms use as an NRA and USCCA-certified instructor.</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

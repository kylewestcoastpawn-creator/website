<?php
/**
 * Template Name: NFA Items
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/gunrack.jpg') center 40%/cover no-repeat;padding:0 40px;aspect-ratio:16/9;display:flex;flex-direction:column;align-items:center;justify-content:center;">
        <h1>NFA Items</h1>
        <p>Silencers, SBRs, and other regulated firearms</p>
    </div>

    <section class="services" aria-labelledby="nfa-heading">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <div class="ccw-info fade-in">
                <h3>What We Carry</h3>
                <ul class="ccw-list">
                    <li>Silencers / Suppressors: major brands in stock including Rugged, Dead Air, SilencerCo, SureFire, Q LLC, Otter Creek, Resilient Suppressors, and more</li>
                    <li>Short-Barreled Rifles (SBRs)</li>
                    <li>Short-Barreled Shotguns (SBSs)</li>
                </ul>

                <h3>The NFA Process: We Make It Easy</h3>
                <div style="display:flex;gap:30px;align-items:center;flex-wrap:wrap;justify-content:center;margin:20px 0 40px;">
                    <div style="flex:1;min-width:280px;">
                        <ul class="ccw-list">
                            <li><strong>Step 1:</strong> Choose your NFA item in-store or order one for transfer</li>
                            <li><strong>Step 2:</strong> Use our in-house Silencer Shop kiosk to capture your fingerprints and photo</li>
                            <li><strong>Step 3:</strong> Complete your ATF Form 4 paperwork with our help</li>
                            <li><strong>Step 4:</strong> Wait for ATF approval (processing times vary)</li>
                            <li><strong>Step 5:</strong> Pick up your item once your stamp is approved</li>
                        </ul>
                    </div>
                    <div style="text-align:center;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ss-kiosk.png" alt="Silencer Shop kiosk at West Coast Pawn &amp; Gun" style="width:220px;height:280px;object-fit:cover;border-radius:12px;border:3px solid var(--accent);">
                        <p style="color:#888;margin-top:10px;font-size:0.9rem;">Our in-house Silencer Shop kiosk</p>
                    </div>
                </div>

                <h3>Why Buy NFA Through Us?</h3>
                <ul class="ccw-list">
                    <li>$0 processing fees</li>
                    <li>We're a Silencer Shop Elite Dealer</li>
                    <li>Fingerprints and photos done right here with our in-house kiosk</li>
                    <li>We'll walk you through the ATF Form 4 step by step</li>
                    <li>Good prices on silencers and SBRs</li>
                    <li>Bought something online? We handle the transfer paperwork</li>
                    <li>New to NFA stuff? No worries, ask us anything</li>
                </ul>
            </div>
        </div>

        <div style="text-align:center; margin-top: 40px;">
            <h3 style="color:#fff;margin-bottom:15px;">How to Use the Silencer Shop Kiosk</h3>
            <p style="color:#888;margin-bottom:20px;">First time using the kiosk? Here's a quick walkthrough.</p>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/how-to-use-ss-kiosk.webp" alt="How to use the Silencer Shop kiosk" style="max-width:500px;width:100%;border-radius:12px;border:3px solid var(--accent);margin-bottom:40px;">
        </div>

        <div style="text-align:center; margin-top: 40px;">
            <h3 style="color:#fff;margin-bottom:10px;">Shop From Your Couch</h3>
            <p style="color:#888;margin-bottom:20px;">Browse silencers online through our Silencer Shop page, buy what you want, and pick it up here. No transfer fees, ever.</p>
            <a href="https://www.silencershop.com/westcoastpawn" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-bottom:30px;">Shop Silencer Shop</a>
            <br>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-outline" style="margin-top:20px;">Ask Us About NFA Items</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

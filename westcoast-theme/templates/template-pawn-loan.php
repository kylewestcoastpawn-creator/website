<?php
/**
 * Template Name: Pawn & Loan
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/knifes.jpg') center 42%/cover no-repeat;padding:180px 40px 140px;">
        <h1>Pawn &amp; Loan</h1>
        <p>Fast cash when you need it &mdash; no credit check required</p>
    </div>

    <section class="services" aria-labelledby="pawn-heading">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <div class="ccw-info fade-in">
                <h3>How It Works</h3>
                <ul class="ccw-list">
                    <li><strong>Step 1:</strong> Bring in your firearms or anything of value</li>
                    <li><strong>Step 2:</strong> We appraise your item and make you a fair loan offer</li>
                    <li><strong>Step 3:</strong> Accept the offer and walk out with cash &mdash; same day</li>
                    <li><strong>Step 4:</strong> Pay back your loan within the term to get your item back</li>
                </ul>

                <h3>What We Accept as Collateral</h3>
                <ul class="ccw-list">
                    <li>Firearms (handguns, rifles, shotguns)</li>
                    <li>Gold, silver, and precious metals</li>
                    <li>Electronics</li>
                    <li>Other items of value &mdash; ask us</li>
                </ul>

                <h3>Why Pawn With Us?</h3>
                <ul class="ccw-list">
                    <li>No credit check &mdash; your item is your credit</li>
                    <li>Quick and private &mdash; we keep your business your business</li>
                    <li>We'll give you an honest number, no games</li>
                    <li>Loan terms and rates told to you upfront before you sign anything</li>
                    <li>No pressure &mdash; if it doesn't work for you, no hard feelings</li>
                </ul>
            </div>
        </div>

        <div style="text-align:center; margin-top: 40px;">
            <a href="https://pawnmate.net/mobile/westcoastpawn" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-right:15px;">Pay on Your Loan</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">Contact Us About a Pawn Loan</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

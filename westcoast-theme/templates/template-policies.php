<?php
/**
 * Template Name: Policies
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/colt.jpg') center/cover no-repeat;">
        <h1>Store Policies</h1>
        <p>What you need to know before visiting</p>
    </div>

    <section class="policies" aria-labelledby="policies-heading">
        <div class="policy-box fade-in">
            <h3>Background Checks</h3>
            <p>All firearm purchases require a completed ATF Form 4473 and a NICS background check. No exceptions. This is federal law and we follow it every single time.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Denied Sales</h3>
            <p>If your background check comes back denied, we cannot complete the sale. A 15% restocking fee applies to denied transactions.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Valid ID Required</h3>
            <p>You'll need a valid, government-issued photo ID to purchase a firearm. If your ID doesn't show your current address, bring a secondary proof of Florida residency (utility bill, voter registration, etc.).</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Returns &amp; Exchanges</h3>
            <p>All sales are final. We do not offer refunds or exchanges on firearms or ammunition. Please ask questions and inspect your purchase before completing the sale.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Pawn Loan Policy</h3>
            <p>Items left as collateral for a pawn loan must be redeemed within the agreed-upon term. Items not redeemed by the due date become property of the store.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Layaway Terms</h3>
            <p>Layaway requires a 25% down payment. You have up to 4 months to pay the balance. Payments are non-refundable. If payments are missed and the item is not paid in full within 4 months, the deposit is forfeited.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>No Photography or Video</h3>
            <p>We do not allow photographs or video inside the store. This policy exists to protect our customers and help prevent straw purchases.</p>
        </div>
        <div class="policy-box fade-in">
            <h3>Right to Refuse Service</h3>
            <p>We reserve the right to refuse service to anyone, for any reason, at any time. Our priority is the safety of our staff, customers, and community.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>

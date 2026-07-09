<?php
/**
 * Template Name: Precious Metals
 */
get_header();
?>

<main>
    <div class="page-header" style="background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),url('<?php echo esc_url(get_template_directory_uri()); ?>/img/badger.jpg') center/cover no-repeat;padding:220px 40px 180px;">
        <h1>Precious Metals</h1>
        <p>Turn your gold, silver, and platinum into cash</p>
    </div>

    <section class="services" aria-labelledby="metals-heading">
        <div style="max-width:800px;margin:0 auto;padding:0 20px;">
            <div class="fade-in" style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;margin-bottom:40px;">
                <div style="background:#111;border:2px solid var(--accent);border-radius:12px;padding:25px 40px;text-align:center;min-width:200px;">
                    <p style="color:#aaa;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">Gold (per oz)</p>
                    <p id="goldPrice" style="color:var(--accent);font-family:'Oswald',sans-serif;font-size:2rem;font-weight:700;">Loading...</p>
                </div>
                <div style="background:#111;border:2px solid #aaa;border-radius:12px;padding:25px 40px;text-align:center;min-width:200px;">
                    <p style="color:#aaa;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">Silver (per oz)</p>
                    <p id="silverPrice" style="color:#ccc;font-family:'Oswald',sans-serif;font-size:2rem;font-weight:700;">Loading...</p>
                </div>
            </div>
            <p id="priceUpdated" style="text-align:center;color:#555;font-size:0.8rem;margin-bottom:30px;"></p>

            <div class="ccw-info fade-in">
                <h3>What We Buy</h3>
                <ul class="ccw-list">
                    <li>Gold &mdash; rings, chains, bracelets, coins, bars, and scrap</li>
                    <li>Silver &mdash; coins, bars, and flatware</li>
                    <li>Platinum &mdash; jewelry and bullion</li>
                    <li>Other precious metals &mdash; palladium and more</li>
                </ul>

                <h3>How It Works</h3>
                <ul class="ccw-list">
                    <li><strong>Step 1:</strong> Bring your items in &mdash; no appointment needed</li>
                    <li><strong>Step 2:</strong> We test and weigh your metals on the spot</li>
                    <li><strong>Step 3:</strong> Receive a fair cash offer based on current market prices</li>
                    <li><strong>Step 4:</strong> Accept the offer and walk out with cash &mdash; same day</li>
                </ul>

                <h3>Why Sell to Us?</h3>
                <ul class="ccw-list">
                    <li>We pay based on what the market says &mdash; not what we feel like</li>
                    <li>No appointment needed &mdash; just walk in</li>
                    <li>We'll tell you exactly what it's worth, no obligation to sell</li>
                    <li>Cash in your hand the same day</li>
                    <li>No pressure, no pushy sales tactics &mdash; just a straight deal</li>
                </ul>
            </div>
        </div>

        <div style="text-align:center; margin-top: 40px;">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">Contact Us About Precious Metals</a>
        </div>
    </section>
</main>

<script>
(async function() {
    try {
        var goldRes = await fetch('https://api.gold-api.com/price/XAU');
        var silverRes = await fetch('https://api.gold-api.com/price/XAG');
        var gold = await goldRes.json();
        var silver = await silverRes.json();
        if (gold.price && silver.price) {
            document.getElementById('goldPrice').textContent = '$' + Number(gold.price).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('silverPrice').textContent = '$' + Number(silver.price).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('priceUpdated').textContent = 'Live spot prices — updated ' + new Date().toLocaleString();
            return;
        }
    } catch(e) {}
    document.getElementById('goldPrice').textContent = '—';
    document.getElementById('silverPrice').textContent = '—';
    document.getElementById('priceUpdated').textContent = 'Prices unavailable — call for current rates';
})();
</script>

<?php get_footer(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- AGE VERIFICATION -->
<div id="ageGate">
    <div class="age-gate-box">
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" style="margin-bottom:15px;"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="1" fill="#C0A060"/><line x1="12" y1="1" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="1" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="23" y2="12"/></svg>
        <h2>Age Verification</h2>
        <p>You must be 18 years or older to access this website.</p>
        <p style="font-family:'Oswald',sans-serif;color:#fff;font-size:1.2rem;letter-spacing:2px;text-transform:uppercase;margin:0 0 20px;">Are you 18 or older?</p>
        <div style="display:flex;gap:15px;justify-content:center;">
            <button onclick="verifyAge();" class="btn btn-primary" style="border-radius:6px;">Yes</button>
            <button onclick="window.location.href='https://www.google.com';" class="btn" style="background:#333;color:#fff;border:1px solid #555;border-radius:6px;">No</button>
        </div>
    </div>
</div>

<!-- NAV -->
<nav role="navigation" aria-label="<?php esc_attr_e('Main navigation', 'westcoast'); ?>">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php bloginfo('name'); ?> — Home">
        <div class="logo-icon" aria-hidden="true"><?php echo westcoast_logo_svg(); ?></div>
        <div class="logo-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p>Buy &middot; Sell &middot; Trade &middot; Loan</p>
        </div>
    </a>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'       => false,
        'menu_class'      => 'nav-links',
        'menu_id'         => 'navLinks',
        'fallback_cb'     => false,
        'items_wrap'      => '<ul id="%1$s" class="%2$s" role="list">%3$s</ul>',
    ));
    ?>
    <button class="hamburger" id="hamburger" onclick="toggleNav()" aria-label="<?php esc_attr_e('Toggle navigation menu', 'westcoast'); ?>" aria-expanded="false" aria-controls="navLinks">
        <span></span><span></span><span></span>
    </button>
</nav>

<!-- FOOTER -->
<footer>
    <div class="footer-top">
        <div class="footer-brand">
            <div class="footer-logo">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" style="vertical-align:middle;margin-right:6px"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="1" fill="#C0A060"/><line x1="12" y1="1" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="1" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="23" y2="12"/></svg>
                <?php bloginfo('name'); ?>
            </div>
            <p>Locally owned gun shop and pawn dealer in Lakeland, FL. Licensed FFL/SOT. Stop in and see us.</p>
            <a href="https://www.facebook.com/lakeland.pawn.shop" target="_blank" rel="noopener noreferrer" class="social-btn social-btn-facebook">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                Like Us on Facebook!
            </a>
            <a href="https://www.instagram.com/westcoastpawngun" target="_blank" rel="noopener noreferrer" class="social-btn social-btn-instagram">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                Follow Us on Instagram!
            </a>
            <a href="https://fes.fdle.state.fl.us/fes/status" target="_blank" rel="noopener noreferrer" class="social-btn social-btn-fdle">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f4f4f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                Firearm Transfer Status Check
            </a>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container'       => false,
                'fallback_cb'     => false,
            ));
            ?>
        </div>
        <div class="footer-col">
            <h4>Hours</h4>
            <ul>
                <li><a>Mon &ndash; Fri: 10am &ndash; 6pm</a></li>
                <li><a>Saturday: 9am &ndash; 6pm</a></li>
                <li><a>Sunday: Closed (we're at the range)</a></li>
            </ul>
            <h4 style="margin-top:20px;">Legal</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-legal',
                'container'       => false,
                'fallback_cb'     => false,
            ));
            ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="disclaimer">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#C0A060" stroke-width="2" style="vertical-align:middle;margin-right:4px"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            All firearm sales are conducted in full compliance with federal, state, and local laws. A valid government-issued ID and completed ATF Form 4473 with NICS background check are required for all firearm purchases. We reserve the right to refuse service to anyone.
        </div>
        <p style="margin-top: 20px;">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. |
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms'))); ?>" style="color:#C0A060;">Terms &amp; Conditions</a> |
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacy'))); ?>" style="color:#C0A060;">Privacy Policy</a>
        </p>
    </div>
</footer>

<a href="#" class="back-to-top" id="backToTop" aria-label="<?php esc_attr_e('Back to top', 'westcoast'); ?>">&uarr;</a>

<?php wp_footer(); ?>
</body>
</html>

<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="display:flex;gap:10px;">
    <input type="search" class="search-field" placeholder="<?php esc_attr_e('Search...', 'westcoast'); ?>" value="<?php echo get_search_query(); ?>" name="s" style="background:#1a1a1a;border:1px solid #333;color:#fff;padding:10px 15px;flex:1;font-family:inherit;">
    <button type="submit" class="btn btn-primary" style="padding:10px 20px;"><?php esc_html_e('Search', 'westcoast'); ?></button>
</form>

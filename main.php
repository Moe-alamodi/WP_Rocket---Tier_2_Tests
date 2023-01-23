<?php
/* ------------- Q1 solution -------------- */

add_action('after_rocket_clean_domain', 'purge_superhoster_cache');

// Assuming that the logic of the purge_superhoster_cache is provided by the hoster
function purge_superhoster_cache() {
    // do something
}

/* ------------- Q2 solution -------------- */
// See remove-recaptcha-delay-exclusion.php

/* ------------- Q3 solution -------------- */
// 2- A customer reported an issue that requires you to debug that function. How would you log the URLs that are purged when rocket_clean_post() runs?

function rocket_clean_post( $post_id, $post = null ) {
    // code goes her 
    $purge_urls = rocket_get_purge_urls( $post_id, $post );

    error_log( 'Purged URLs: ' . implode( ', ', $purge_urls ) );
    // the reset of the code
}

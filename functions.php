/* ------------------------ Q1 ------------------------- */

/* WP Rocket is using the rocket_clean_domain() function to clear the site's cache whenever that's necessary.
When an additional layer of cache is used, e.g. that of the hosting provider, that should be cleared in sync with WP Rocket's.
SuperHoster, a fictionary host, provides the purge_superhoster_cache() function to clear their cache.
Using the appropriate WP Rocket's hook, write a code snippet to clear SuperHoster's cache after WP Rocket's cache is cleared. */

/* ------------- Q1 solution -------------- */

// Assuming that the logic of the purge_superhoster_cache is provided by the hoster

function purge_superhoster_cache() {
    // do something
}

add_action('after_rocket_clean_domain', 'purge_superhoster_cache');


/* ------------------------ Q2 ------------------------- */

/* WP Rocket's Delay JavaScript Execution feature is used to lazily load scripts upon user interaction.
There are some exclusions added by default in WP Rocket's core, one of them being recaptcha/api.js.
A customer wants that script to be delayed, i.e. removed from the list of built-in exclusions. 
Using WP Rocket's respective filter, write a code snippet or a small plugin to remove that exclusion and allow the delay of the script.
 */

/* ------------- Q2 solution -------------- */

function remove_recaptcha_exclusion( $delay_js_exclusions ) {
    $excluded_scripts = array_diff( $delay_js_exclusions, array( 'recaptcha/api.js' ) );
    return $excluded_scripts;
} 

add_filter( 'rocket_lazyload_excluded', 'remove_recaptcha_exclusion' );



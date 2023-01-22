/* WP Rocket is using the rocket_clean_domain() function to clear the site's cache whenever that's necessary.
When an additional layer of cache is used, e.g. that of the hosting provider, that should be cleared in sync with WP Rocket's.
SuperHoster, a fictionary host, provides the purge_superhoster_cache() function to clear their cache.

Using the appropriate WP Rocket's hook, write a code snippet to clear SuperHoster's cache after WP Rocket's cache is cleared. */

add_action('after_rocket_clean_domain', 'purge_superhoster_cache');
function purge_superhoster_cache() {
    // code to clear SuperHoster's cache
}

<?php
/*
* Plugin Name: Remove recaptcha
* Description: Removes recaptcha/api.js. from the list of built-in  delay exclusions. 
*/

// $exclude_defer_js An array of URLs for the JS files to be excluded.
function remove_recaptcha_exclusion( $exclude_defer_js ) {
    $excluded_scripts = array_diff( $exclude_defer_js, array( 'recaptcha/api.js' ) );
    return $excluded_scripts;
} 
add_filter( 'rocket_exclude_defer_js', 'remove_recaptcha_exclusion' );
# WP Rocket - Tier 2 Tests
<p align="center">
  <a href="https://docs.wp-rocket.me/">
    <img src="https://d33v4339jhl8k0.cloudfront.net/docs/assets/5415e7bfe4b01e2a68fe8243/images/60dc6f558556b07a2884aed1/wp-rocket-logo-dark@2.png" alt="Logo" width="400" height="150">
  </a>

  <h3 align="center">WP Rocket - Tier2 Tests</h3>

  <p align="center">
    A little project to assess applicant skills.
    <br />
    <a href="#about-the-project"><strong>Explore the docs »</strong></a>
    <br />
    <br />
  </p>
</p>

<!-- ABOUT THE PROJECT -->

## About The Project

This test contains three questions that applicant has to solve and this repo is my attempt to solve these questions.

### Test Content
- ##### QUESTION 1

WP Rocket is using the rocket_clean_domain() function to clear the site's cache whenever that's necessary.
When an additional layer of cache is used, e.g. that of the hosting provider, that should be cleared in sync with WP Rocket's.
SuperHoster, a fictionary host, provides the purge_superhoster_cache() function to clear their cache.
<br />
Using the appropriate WP Rocket's hook, write a code snippet to clear SuperHoster's cache after WP Rocket's cache is cleared.

- ##### QUESTION 2
WP Rocket's Delay JavaScript Execution feature is used to lazily load scripts upon user interaction.
There are some exclusions added by default in WP Rocket's core, one of them being recaptcha/api.js.
A customer wants that script to be delayed, i.e. removed from the list of built-in exclusions. 
<br />
Using WP Rocket's respective filter, write a code snippet or a small plugin to remove that exclusion and allow the delay of the script.

- ##### QUESTION 3
WP Rocket is using the rocket_clean_post() function to clear a post's cache whenever that's necessary.
<br />
1. Which URLs are purged when that function runs?
2. A customer reported an issue that requires you to debug that function. How would you log the URLs that are purged when rocket_clean_post() runs?
<br />
<br />

## Project Solution 
All the solutions for the questions were based on debugging the code on the GitHub repo of <a href="https://github.com/wp-media/wp-rocket">WP_Rocket</a>

- ##### QUESTION 1 SOLUTION
  The code for the first Q is in main.php file.
  1. Assuming that the code of ``` purge_superhoster_cache() ``` is provided by the superhost, we used the ``` add_action() ``` function to trigger the ``` purge_superhoster_cache() ``` after the ``` rocket_clean_domain() ``` is called.
  like this ``` add_action('after_rocket_clean_domain', 'purge_superhoster_cache') ```

- ##### QUESTION 2 SOLUTION



- ##### QUESTION 3 SOLUTION
  The code for the second part is in main.php file.
  1. the URLs are purged when that function runs are the post itself & its type archive, next post & next post in same category, previous post & previous post in same category, home page, all post parents (category, tag archives) and author page.
  - You can get all the URLs by calling ``` $purge_urls = rocket_get_purge_urls() ```

  2. In the ``` rocket_clean_post() ``` function all the purge URLs are stored in ``` $purge_urls ``` so we can log them like this: <br/>
  ``` error_log( 'Purged URLs: ' . implode( ', ', $purge_urls ) ) ```

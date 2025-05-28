<?php
/**
 * Template for the Cookies Policy page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/cookies-policy/what-are-cookies' );
    get_template_part( 'template-parts/content/cookies-policy/types-of-cookies-used' );
    get_template_part( 'template-parts/content/cookies-policy/purpose-of-each-cookie' );
    get_template_part( 'template-parts/content/cookies-policy/cookie-management' );
    get_template_part( 'template-parts/content/cookies-policy/user-consent' );
    get_template_part( 'template-parts/content/cookies-policy/policy-updates' );
    ?>
</main>

<?php get_footer(); ?>

<?php
/**
 * Template for the Privacy Policy page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/privacy-policy/data-collected' );
    get_template_part( 'template-parts/content/privacy-policy/how-data-used' );
    get_template_part( 'template-parts/content/privacy-policy/data-sharing' );
    get_template_part( 'template-parts/content/privacy-policy/user-rights' );
    get_template_part( 'template-parts/content/privacy-policy/data-protection' );
    get_template_part( 'template-parts/content/privacy-policy/cookies-tracking' );
    get_template_part( 'template-parts/content/privacy-policy/policy-changes' );
    get_template_part( 'template-parts/content/privacy-policy/contact-information' );
    ?>
</main>

<?php get_footer(); ?>

<?php
/**
 * Template for the Contact page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/contact/contact-form' );
    get_template_part( 'template-parts/content/contact/direct-contact-info' );
    get_template_part( 'template-parts/content/contact/map' );
    get_template_part( 'template-parts/content/contact/social-media' );
    get_template_part( 'template-parts/content/contact/business-hours' );
    ?>
</main>

<?php get_footer(); ?>

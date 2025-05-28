<?php
/**
 * Template for the About page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/about/our-story' );
    get_template_part( 'template-parts/content/about/mission-vision-values' );
    get_template_part( 'template-parts/content/about/meet-the-team' );
    get_template_part( 'template-parts/content/about/company-culture' );
    get_template_part( 'template-parts/content/about/timeline' );
    get_template_part( 'template-parts/content/about/social-responsibility' );
    get_template_part( 'template-parts/content/about/awards-recognition' );
    get_template_part( 'template-parts/content/about/join-us-cta' );
    ?>
</main>

<?php get_footer(); ?>

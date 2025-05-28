<?php
/**
 * Template for the Home page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/home/hero' );
    get_template_part( 'template-parts/content/home/services' );
    get_template_part( 'template-parts/content/home/benefits' );
    get_template_part( 'template-parts/content/home/testimonials' );
    get_template_part( 'template-parts/content/home/call-to-action' );
    get_template_part( 'template-parts/content/home/partners' );
    get_template_part( 'template-parts/content/home/blog-preview' );
    get_template_part( 'template-parts/content/home/newsletter-signup' );
    ?>
</main>

<?php get_footer(); ?>

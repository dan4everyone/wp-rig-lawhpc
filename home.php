<?php
/**
 * Template for the Blog (posts page).
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/blog/featured' );
    get_template_part( 'template-parts/content/blog/search' );
    get_template_part( 'template-parts/content/blog/categories' );
    get_template_part( 'template-parts/content/blog/article-list' );
    get_template_part( 'template-parts/content/blog/email-subscription-cta' );
    ?>
</main>

<?php get_footer(); ?>

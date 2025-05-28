<?php
/**
 * Template for the Terms and Conditions page.
 */

get_header();
?>

<main id="site-content">
    <?php
    get_template_part( 'template-parts/content/terms-and-conditions/introduction-acceptance' );
    get_template_part( 'template-parts/content/terms-and-conditions/permitted-use' );
    get_template_part( 'template-parts/content/terms-and-conditions/intellectual-property' );
    get_template_part( 'template-parts/content/terms-and-conditions/limitation-liability' );
    get_template_part( 'template-parts/content/terms-and-conditions/cancellation' );
    get_template_part( 'template-parts/content/terms-and-conditions/modifications' );
    get_template_part( 'template-parts/content/terms-and-conditions/legal-jurisdiction' );
    get_template_part( 'template-parts/content/terms-and-conditions/legal-contact' );
    ?>
</main>

<?php get_footer(); ?>

<?php
/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="error">
	<?php get_template_part( 'template-parts/content/page_header' ); ?>

	<div class="page-content">
		<p>
			<?php esc_html_e( 'It looks like nothing was found at this location.', 'wp-rig' ); ?>
		</p>

		<p>
			<?php esc_html_e( 'You can return to the homepage or try using the search form below.', 'wp-rig' ); ?>
		</p>

		<?php get_search_form(); ?>
	</div><!-- .page-content -->
</section><!-- .error -->

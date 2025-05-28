<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<?php
	//
	the_privacy_policy_link( '', '<span class="sep"> | </span>' );

	//
	echo '<a href="' . esc_url( home_url( '/cookies-policy/' ) ) . '">Cookies Policy</a><span class="sep"> | </span>';

	//
	echo '<a href="' . esc_url( home_url( '/terms-and-conditions/' ) ) . '">Terms and Conditions</a>';
	?>
</div><!-- .site-info -->

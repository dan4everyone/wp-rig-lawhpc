<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}
?>

<nav id="<?php echo apply_filters( 'wp_rig_site_navigation_id', 'site-navigation' ); ?>" class="<?php echo apply_filters( 'wp_rig_site_navigation_classes', 'main-navigation nav--toggle-sub nav--toggle-small' ); ?>" aria-label="<?php esc_attr_e( 'Main menu', 'wp-rig' ); ?>">

	<?php
	// Toggle button for mobile
	$menu_toggle_button = '<button class="menu-toggle" aria-label="' . esc_html__( 'Open menu', 'wp-rig' ) . '" aria-controls="primary-menu" aria-expanded="false">'
		. esc_html__( 'Menu', 'wp-rig' )
		. '</button>';

	echo apply_filters( 'wp_rig_menu_toggle_button', $menu_toggle_button );
	?>

	<div class="primary-menu-container">
		<?php wp_rig()->display_primary_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
	</div>

	<?php
	// Optional: Fixed links after the menu (remove if not needed)
	?>
	<div class="nav-extra-links">
		<a href="<?php echo esc_url( home_url( '/cookies-policy/' ) ); ?>"><?php esc_html_e( 'Cookies', 'wp-rig' ); ?></a>
		<span class="sep">|</span>
		<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><?php esc_html_e( 'Terms', 'wp-rig' ); ?></a>
	</div>
</nav><!-- #site-navigation -->

<?php
/**
 * First-run helpers: bundled logo and the Addax Core recommendation.
 *
 * @package Addax
 */

defined( 'ABSPATH' ) || exit;

/**
 * On activation, add the Addax logo to the media library and use it as the site logo,
 * but only when the site has no logo yet.
 */
function addax_import_default_logo() {
	if ( get_theme_mod( 'custom_logo' ) || get_option( 'site_logo' ) ) {
		return;
	}

	$source = get_template_directory() . '/assets/images/logo-sticky.png';
	if ( ! file_exists( $source ) ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';

	$tmp = wp_tempnam( 'addax-logo.png' );
	if ( ! $tmp || ! copy( $source, $tmp ) ) {
		return;
	}

	$attachment_id = media_handle_sideload(
		array(
			'name'     => 'addax-logo.png',
			'tmp_name' => $tmp,
		),
		0,
		__( 'Addax logo', 'addax' )
	);

	if ( is_wp_error( $attachment_id ) ) {
		wp_delete_file( $tmp );
		return;
	}

	update_post_meta( $attachment_id, '_wp_attachment_image_alt', get_bloginfo( 'name' ) );
	update_option( 'site_logo', $attachment_id );
	set_theme_mod( 'custom_logo', $attachment_id );
}
add_action( 'after_switch_theme', 'addax_import_default_logo' );

/**
 * Whether the Addax Core plugin is active.
 *
 * @return bool
 */
function addax_core_is_active() {
	return defined( 'ADDAX_CORE_VERSION' );
}

/**
 * Recommend Addax Core, which provides the custom blocks the patterns use.
 */
function addax_core_notice() {
	if ( addax_core_is_active() || ! current_user_can( 'install_plugins' ) ) {
		return;
	}
	if ( get_user_meta( get_current_user_id(), 'addax_dismiss_core_notice', true ) ) {
		return;
	}

	$screen = get_current_screen();
	if ( ! $screen || ! in_array( $screen->id, array( 'dashboard', 'themes', 'plugins' ), true ) ) {
		return;
	}

	$dismiss = wp_nonce_url( add_query_arg( 'addax-dismiss-core', '1' ), 'addax-dismiss-core' );

	printf(
		'<div class="notice notice-info"><p>%1$s</p><p><a href="%2$s" class="button-primary">%3$s</a> <a href="%4$s">%5$s</a></p></div>',
		esc_html__( 'Addax works best with the Addax Core plugin. It adds the slider, counters, progress charts, info boxes, tabs, client logos, projects, team and testimonial blocks used by the theme patterns.', 'addax' ),
		esc_url( admin_url( 'plugins.php' ) ),
		esc_html__( 'Go to Plugins', 'addax' ),
		esc_url( $dismiss ),
		esc_html__( 'Dismiss', 'addax' )
	);
}
add_action( 'admin_notices', 'addax_core_notice' );

/**
 * Handle notice dismissal.
 */
function addax_dismiss_core_notice() {
	if ( isset( $_GET['addax-dismiss-core'] ) && check_admin_referer( 'addax-dismiss-core' ) ) {
		update_user_meta( get_current_user_id(), 'addax_dismiss_core_notice', 1 );
		wp_safe_redirect( remove_query_arg( array( 'addax-dismiss-core', '_wpnonce' ) ) );
		exit;
	}
}
add_action( 'admin_init', 'addax_dismiss_core_notice' );

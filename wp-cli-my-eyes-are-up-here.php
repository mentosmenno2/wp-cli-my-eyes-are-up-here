<?php
/**
 * Plugin Name:  WP-CLI: My Eyes Are Up Here
 * Version:      1.0.1
 * Plugin URI:   mentosmenno2/wp-cli-my-eyes-are-up-here
 * Description:  Makes My Eyes Are Up Here plugin compatible with WP-CLI
 * Author:       Mentosmenno2
 * Author URI:   https://mennovandenende.nl/
 */

/**
 * Patches My Eyes Are Up Here (MEAUH) to be compatible with the WP-CLI 'wp media regenerate' command
 * @see https://github.com/interconnectit/my-eyes-are-up-here/pull/22#issuecomment-554555727
 */
if ( defined('WP_CLI') && WP_CLI ) {
	add_action( 'init', function() {
		if ( class_exists( 'MyEyesAreUpHere' ) && ! class_exists( 'MEAUH_Attachment' ) ) {
			$attachment_class = WP_PLUGIN_DIR . '/my-eyes-are-up-here/includes/class-meauh-attachment.php';
			if ( file_exists( $attachment_class ) ) {
				require_once $attachment_class;
			}
		}
	});
}

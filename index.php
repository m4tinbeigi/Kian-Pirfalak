<?php
/**
 * Plugin Name: Kian Pirfalak
 * Plugin URI: https://wordpress.org/plugins/Kian-Pirfalak/
 * Description: کیان: به نام خدای رنگین کمان #مهسا_امینی | برای نمایش از کد کوتاه [kian] استفاده کنید.
 * Version: 1.0.0
 * Author:Rick Sanchez
 * Author URI: https://github.com/m4tinbeigi
 */
 
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'MBWP_KIAN' ) ) {

    define( 'MBWP_ESL_VERSION_KIAN', '1.0.0' );
    define( 'MBWP_ESL_NAME_KIAN', plugin_basename( __FILE__ ) );
    define( 'MBWP_ESL_DIR_KIAN', plugin_dir_path( __FILE__ ) );
    define( 'MBWP_ESL_URI_KIAN', plugin_dir_url( __FILE__ ) );
	include 'kian-shortcode.php';

    class MBWP_KIAN {
        
		public function __construct() {

            // Add settings link
            add_filter( 'plugin_action_links_' . MBWP_ESL_NAME_KIAN, array( $this, 'mbwp_esl_add_settings_link' ) );

        }

        function mbwp_esl_add_settings_link( $links ) {
            $links[] = '<a href="https://github.com/m4tinbeigi">سایت سازنده</a>';
            return $links;
        }
	}

    new MBWP_KIAN();

    
}

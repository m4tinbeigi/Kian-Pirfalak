<?php
/**
 * Plugin Name: Kian PirFalak
 * Plugin URI: https://wordpress.org/plugins/kian-pirfalak/
 * Description: کیان: به نام خدای رنگین کمان #مهسا_امینی | برای نمایش از کد کوتاه kian استفاده کنید.
 * Version: 1.0.0
 * Author:ریک سانچز
 * Author URI: https://github.com/m4tinbeigi
 */
 
 
 
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'MBWP_kian' ) ) {

    define( 'MBWP_ESL_VERSION', '1.0.0' );
    define( 'MBWP_ESL_NAME', plugin_basename( __FILE__ ) );
    define( 'MBWP_ESL_DIR_KIAN', plugin_dir_path( __FILE__ ) );
    define( 'MBWP_ESL_URI_KIAN', plugin_dir_url( __FILE__ ) );
	include 'kian-shortcode.php';

	

    class MBWP_kian {
        

		public function __construct() {
            // Add option page

            // Register settings
            add_action( 'admin_init', array( $this, 'mbwp_esl_register_settings' ) );

            // Add settings link
            add_filter( 'plugin_action_links_' . MBWP_ESL_NAME, array( $this, 'mbwp_esl_add_settings_link' ) );

           
            // Avoid Text widget rel changes
            add_filter( 'wp_targeted_link_rel', array( $this, 'mbwp_avoid_text_widget_rel' ) , 99, 2 );
        }



        function mbwp_esl_add_settings_link( $links ) {
            $links[] = '<a href="https://github.com/m4tinbeigi">سایت سازنده</a>';
            return $links;
        }
        
        

 




	}

    new MBWP_kian();

    
}

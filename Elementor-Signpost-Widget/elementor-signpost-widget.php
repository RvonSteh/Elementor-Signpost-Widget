<?php
/**
 * Plugin Name: Elementor Widget Template
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Ruben Stehrenberg
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-widget-template
 *
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define('ELEMENTOR_WIDGET_TEMPLATE', __FILE__);

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_text_domain( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/text-domain.php' );

	$widgets_manager->register( new \Elementor_Widget_Template() );

}
add_action( 'elementor/widgets/register', 'register_text_domain' );   
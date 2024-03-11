<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_Widget_Template extends \Elementor\Widget_Base {

    public function __construct($data = array(), $args = null)
    {
			parent::__construct($data, $args);
		
			wp_register_style('text-domain', plugins_url('./css/text-domain.css', ELEMENTOR_WIDGET_TEMPLATE), array(), '1.0.0');
			
			// JavaScript hinzufügen
			wp_register_script('text-domain-js', plugins_url('./js/text-domain.js', ELEMENTOR_WIDGET_TEMPLATE), array('jquery'), '1.0.0', true);
		}
		
		public function get_style_depends()
		{
			return ['text-domain'];
		}
		
		public function get_script_depends()
		{
			return ['text-domain-js'];
		}
		

	//Name
	public function get_name() {
		return 'timeline';
	}
	//Widget Title
	public function get_title() {
		return esc_html__( 'Timeline', 'text-domain' );
	}
	//Widget Icon
	public function get_icon() {
		return 'eicon-time-line';
	}
	//Widget Kategorie
	public function get_categories() {
		return [ 'general' ];
	}
	public function get_keywords() {
		return [ 'timeline', 'line' ];
	}

	
protected function register_controls() {
		$this->content_controls();
        $this->style_controls();

	}
	protected function content_controls()
    {


	}


/*Style Controlls*/

	protected function style_controls()
    {


	}
		
	
	protected function render() {


	
}

protected function content_template() {

	
}
}
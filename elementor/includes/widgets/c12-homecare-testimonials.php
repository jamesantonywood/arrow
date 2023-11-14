<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Homecare_Testimonials extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_homecare_testimonials';
    }

    public function get_title() {
        return esc_html__('Homecare.co.uk Testimonials', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-blockquote';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['homecare', 'homecare.co.uk', 'testimonials'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-homecare-testimonials">
                <p>I will be the Homecare Testimonials Widget!</p>
            </div>
        <?php
    }

}
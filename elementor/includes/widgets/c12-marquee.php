<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Marquee extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_marquee';
    }

    public function get_title() {
        return esc_html__('Marquee', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-carousel';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['marquee', 'logos'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-marquee">
                <p>I will be the Simple Text Widget!</p>
            </div>
        <?php
    }

}
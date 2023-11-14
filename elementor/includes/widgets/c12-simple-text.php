<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Simple_Text extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_simple_text';
    }

    public function get_title() {
        return esc_html__('Simple Text', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-text-align-center';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['accreditation', 'logos'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-simple-text">
                <h2>Since 1994</h2>
                <p>We are Supportive, a registered charity and not for profit organisation founded in 1994 to support people in and around the North East to live full and active lives with the freedom of choice in their own future.</p>
            </div>
        <?php
    }

}
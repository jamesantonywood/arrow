<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Stats extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_stats';
    }

    public function get_title() {
        return esc_html__('Stats', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-number-field';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['stats'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-stats">
                <p>I will be the Stats Widget!</p>
            </div>
        <?php
    }

}
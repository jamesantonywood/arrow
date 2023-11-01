<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Decorated_Video extends \Elementor\Widget_Base {

    public function get_name() {
        return 'decorated_video';
    }

    public function get_title() {
        return esc_html__('Decorated Video', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
        // return ['basic'];
    }

    public function get_keywords() {
        return ['decorated', 'video'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-decorated-video">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/uD6pk5Cye5M?si=7L_SEzvlSmP83OmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        <?php
    }

}
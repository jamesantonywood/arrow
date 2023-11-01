<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Accreditation_Logos extends \Elementor\Widget_Base {

    public function get_name() {
        return 'accreditation_logos';
    }

    public function get_title() {
        return esc_html__('Accredittion Logos', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
        // return ['basic'];
    }

    public function get_keywords() {
        return ['accreditation', 'logos'];
    }

    // public function get_style_depends() {
    //     return ['c12-decorated-video-styles'];
    // }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-accreditation-logos">
                <p>I will be the Accreditation Logos widget!</p>
            </div>
        <?php
    }

}
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Accreditation_Logos extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_accreditation_logos';
    }

    public function get_title() {
        return esc_html__('Accredittion Logos', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-form-vertical';
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
            <div class="c12-widget c12-accreditation-logos">

                <div class="logo-list">
                    <!-- for each logo... -->
                    <a href="#">
                        <img src="/wp-content/uploads/2023/11/chas.png" alt="">
                    </a>
                    <!-- end foreach -->
                    <a href="#">
                        <img src="/wp-content/uploads/2023/11/cta.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/wp-content/uploads/2023/11/qcc.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/wp-content/uploads/2023/11/homecare-association.png" alt="">
                    </a>
                </div>

                <p>Supportive is fully accredited by the UK’s leading authorities in Homecare and Transport ensuring that we are committed to and deliver the best quality service.</p>
            
            </div>
        <?php
    }

}
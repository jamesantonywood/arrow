<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Key_Benefits extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_key_benefits';
    }

    public function get_title() {
        return esc_html__('Key Benefits', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['button', 'group'];
    }

    public function get_style_depends() {
        return ['eicon-gallery-grid'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        // TODO: Widet-ify! btn-group.
        ?>
            <div class="c12-widget c12-key-benefits">
                <!-- foreach benefit -->
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                 <!-- end foreach -->

                 <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon"></div>
                    <div class="content">
                        <h3>One-to-one FaceTime with experts</h3>
                        <p>Lorem ipsum dolor smet lorem ips</p>
                    </div>
                </div>
                
            </div>
        <?php
    }

}
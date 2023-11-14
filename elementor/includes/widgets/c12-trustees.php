<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Trustees extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_trustees';
    }

    public function get_title() {
        return esc_html__('Trustees', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-post-list';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['trustees'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-trustees">
                <!-- for each truestee... -->
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <!-- end foreach -->
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
                <div class="trustee">
                    <p>Chair</p>
                    <h4>Carol Reynolds</h4>
                </div>
            </div>
        <?php
    }

}
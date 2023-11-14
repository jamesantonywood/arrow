<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Picture_Boxes extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_picture_boxes';
    }

    public function get_title() {
        return esc_html__('Picture Boxes', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-icon-box';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['picture', 'boxes'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-picture-boxes">
                
                <div class="picture-box">
                    <div class="inner">
                        <div class="image"></div>
                        <div class="content">
                            <h3>who need us</h3>
                            <ul>
                                <li>Striving to do our best and exceed expectations.</li>
                                <li>Providing a safe, consistent and responsive service.</li>
                                <li>Ensure that we can deliver sustainable services that are fit for purpose and offer a fair price.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="picture-box">
                    <div class="inner">
                        <div class="image"></div>
                        <div class="content">
                            <h3>who invest in us</h3>
                            <ul>
                                <li>Striving to do our best and exceed expectations.</li>
                                <li>Providing a safe, consistent and responsive service.</li>
                                <li>Ensure that we can deliver sustainable services that are fit for purpose and offer a fair price.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="picture-box">
                    <div class="inner">
                        <div class="image"></div>
                        <div class="content">
                            <h3>around us</h3>
                            <ul>
                                <li>Striving to do our best and exceed expectations.</li>
                                <li>Providing a safe, consistent and responsive service.</li>
                                <li>Ensure that we can deliver sustainable services that are fit for purpose and offer a fair price.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            
            </div>
        <?php
    }

}
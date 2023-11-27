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
            <div class="c12-widget c12-stats">
                
                <div class="stat">
                    <div class="number" data-color="blue">
                        <!-- Javascript span-ify and replace with images - unsure weather to store these as plugin assets... might be for the best rather than clogging media library... -->
                        <img src="<?= plugins_url('../../assets/img/arr_1_blue.png', __FILE__); ?>">
                        <img src="<?= plugins_url('../../assets/img/arr_4_blue.png', __FILE__); ?>">
                        <img src="<?= plugins_url('../../assets/img/arr_3_blue.png', __FILE__); ?>">
                    </div>
                    <div class="text">
                        <span>New jobs created</span>
                    </div>
                </div>

                <div class="navigation">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        <?php
    }

}
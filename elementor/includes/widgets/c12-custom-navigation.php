<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Custom_Navigation extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_custom_navigation';
    }

    public function get_title() {
        return esc_html__('Custom Navigation', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-nav-menu';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['custom', 'navigation'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    public function get_script_depends() {
        return ['c12-widget-scripts'];
    }

    protected function register_controls() {

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

            <div class="full-screen-menu">
                <div class="main">
                    <nav class="primary">
                        <?= wp_nav_menu(array('menu' => 'main-menu')); ?>
                    </nav>
                    <nav class="secondary">
                        <?= wp_nav_menu(array('menu' => 'footer-secondary-menu')); ?>
                    </nav>
                </div>
                <div class="gradient"></div>
                <div class="image">

                </div>
            </div>
            <div class="c12-widget c12-custom-navigation">

                <div class="logo">
                    <div class="menu-btn">
                        <div class="line"></div>
                    </div>
                    <?= get_custom_logo(); ?>
                </div>
                <div class="cta">
                    <a href="#"><span>Ready to innovate?</span></a>
                </div>
            </div>


        <?php
    }

}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Home_Hero extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_home_hero';
    }

    public function get_title() {
        return esc_html__('Home Hero', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-lightbox-expand';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['home', 'hero'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-home-hero c12-hero hide-cta">
                <div class="inner">
                    <div class="content">
                        <h1 class="jumbotron">Supercharge Your Business</h1>
                        <p>Growing a business in the North East brings a variety of challenges, but you don’t have to do it all alone.</p>
                        <div class="cta">
                            <a href="#"><span>Ready to innovate?</span></a>
                        </div>
                    </div>
                    <div class="arrow-container">
                        <div class="arrow-arm"></div>
                        <div class="arrow-arm top-arm"></div>
                    </div>
                </div>
            </div>
        <?php
    }

}

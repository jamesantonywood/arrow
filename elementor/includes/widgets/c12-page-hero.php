<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Page_Hero extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_page_hero';
    }

    public function get_title() {
        return esc_html__('Page Hero', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-lightbox-expand';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['page', 'hero'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-page-hero">
                <p>I will be the Page Hero Widget!</p>
            </div>
        <?php
    }

}
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Page_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_page_header';
    }

    public function get_title() {
        return esc_html__('Page Header', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-progress-tracker';
    }

    public function get_categories() {
        return ['c12-widgets'];
        // return ['basic'];
    }

    public function get_keywords() {
        return ['page', 'header'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
      
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-page-header">
                <div class="inner">
                    <h1><?= the_title(); ?></h1>
                </div>
            </div>
        <?php
    }

}
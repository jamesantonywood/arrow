<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Generic_Post_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_generic_page_header';
    }

    public function get_title() {
        return esc_html__('Generic Page Header', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['header'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-simple-page-header">
                <div class="inner">
                    <h1><?= the_title(); ?></h1>
                </div>
            </div>
        <?php
    }

}
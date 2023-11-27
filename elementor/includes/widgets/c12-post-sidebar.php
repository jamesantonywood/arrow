<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Post_Sidebar extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_post_sidebar';
    }

    public function get_title() {
        return esc_html__('Post Sidebar', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['sidebar'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-case-studies">
               Post Sidebar
            </div>
        <?php
    }

}
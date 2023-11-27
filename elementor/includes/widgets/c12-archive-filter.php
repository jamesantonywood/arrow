<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Archive_Filter extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_archive_filter';
    }

    public function get_title() {
        return esc_html__('Archive Filter', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['archive', 'filter'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-archive-sidebar">
                <div class="filter-group">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li class="cat">Agriculture</li>
                        <li class="cat">Environmental Science</li>
                        <li class="cat">Sustainability</li>
                    </ul>
                </div>
                <div class="filter-group">
                    <h3>Archives</h3>
                    <ul>
                        <li>November</li>
                        <li>October</li>
                        <li>September</li>
                    </ul>
                </div>
            </div>
        <?php
    }

}
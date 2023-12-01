<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Case_Study_Filter extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_case_study_filter';
    }

    public function get_title() {
        return esc_html__('Case Study Filter', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['case', 'studies', 'filter'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-filter-sidebar">
                <h2>Filter</h2>
                <div class="filter-group">
                    <h3>Sector</h3>
                    <ul class="categories">
                        <li class="cat">Agriculture</li>
                        <li class="cat">Environmental Science</li>
                        <li class="cat">Sustainability</li>
                    </ul>
                </div>
                <div class="filter-group">
                    <h3>Support type</h3>
                    <ul class="categories">
                        <li class="cat">Data Sciences</li>
                        <li class="cat">Sustainable Chemistry</li>
                        <li class="cat">Sustainable Manufacturing</li>
                    </ul>
                </div>

                <div class="help-links">
                    <a href="/do-i-qualify">Do I qualify?</a>
                </div>

            </div>
        <?php
    }

}
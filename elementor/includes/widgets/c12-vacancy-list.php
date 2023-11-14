<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Vacancy_List extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_vacancy_list';
    }

    public function get_title() {
        return esc_html__('Vacancy List', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-toggle';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['vacancy', 'vacancies'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-vacancy-list">
                <p>I will be the Vacancy List Widget!</p>
            </div>
        <?php
    }

}
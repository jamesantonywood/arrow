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
        //Get sector taxonomies
        $sector_terms = get_terms([
            'taxonomy' => 'sector',
            'fields' => 'all',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC'
        ]);

        // get support-type taxonomies sorted alphabetically
        $support_type_terms = get_terms([
            'taxonomy' => 'support-type',
            'fields' => 'all',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC'
        ]);

        ?>
        <div class="c12-widget c12-filter-sidebar">
            <h2>Filter</h2>
            <div class="filter-group">
                <h3>Support type</h3>
                <ul class="categories">
                <?php
                foreach ($support_type_terms as $support_type_term) {
                    $theme = get_field('theme',$support_type_term->taxonomy . '_' . $support_type_term->term_id);
                    ?>
                    <li class="cat <?=$support_type_term->slug?>" data-filter="<?=$support_type_term->slug?>" data-color="<?= $theme ?>"><?=$support_type_term->name?></li>
                <?php } ?>
                </ul>
            </div>
            <div class="filter-group">
                <h3>Sector</h3>
                <ul class="categories">
                    <?php
                    foreach ($sector_terms as $sector_term) {
                        $theme = get_field('theme',$sector_term->taxonomy . '_' . $sector_term->term_id);
                        ?>
                        <li class="cat <?=$sector_term->slug?>" data-filter="<?=$sector_term->slug?>" data-color="<?= $theme ?>"><?=$sector_term->name?></li>
                    <?php } ?>
                </ul>
            </div>


            <div class="help-links">
                <a href="/do-i-qualify">Do I qualify?</a>
            </div>

        </div>
        <?php
    }

}

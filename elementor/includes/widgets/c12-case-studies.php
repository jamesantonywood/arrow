<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Case_Studies extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_case_studies';
    }

    public function get_title() {
        return esc_html__('Case Studies', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['case', 'studies'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    }

    protected function render() {
        $case_studies = get_posts([
            'post_type' => 'case-studies',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'ASC'
        ]);
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-case-studies">
                <div class="case-studies">
                <?php foreach ($case_studies as $case_study) {
                // get sector taxonomies for $case_study
                $sector_terms = get_the_terms($case_study->ID, 'sector');
                $support_type_terms = get_the_terms($case_study->ID, 'support-type');

                ?>

                <!-- foreach case study -->
                        <div class="case-study">
                            <div class="main">
                                <?php
                                $logo = get_field('company_logo', $case_study->ID);
                                if($logo) { ?>
                                    <div class="logo"><img src="<?= $logo['url']?>" alt=""></div>
                                <?php } ?>

                                <h2><?= get_field('subline',$case_study->ID); ?></h2>
                                <p><?= get_field('location', $case_study->ID); ?></p>
                                <a href="<?= get_permalink($case_study->ID) ?>">Read case study</a>
                            </div>
                            <div class="categories">
                                <?php
                                foreach ($sector_terms as $sector_term) {
                                    $theme = get_field('theme',$sector_term->taxonomy . '_' . $sector_term->term_id);
                                    echo '<span class="cat" data-color="'.$theme.'">' . $sector_term->name . '</span>';
                                }
                                foreach ($support_type_terms as $support_type_term) {
                                    $theme = get_field('theme',$support_type_term->taxonomy . '_' . $support_type_term->term_id);
                                    echo '<span class="cat" data-color="'.$theme.'">' . $support_type_term->name . '</span>';
                                }
                                ?>
                            </div>
                        </div>
                    <!-- end -->
                <?php } ?>
                </div>
            </div>
        <?php
    }

}

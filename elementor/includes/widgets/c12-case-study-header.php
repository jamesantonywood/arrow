<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Case_Study_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_case_study_header';
    }

    public function get_title() {
        return esc_html__('Case Study Header', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-lightbox-expand';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['case', 'study', 'header'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-case-study-header">
                <div class="inner">
                    <div class="content">
                        <h1><?= the_title(); ?></h1>
                        <p class="subline"><?= get_field('subline'); ?></p>
                        <p><?= get_field('excerpt'); ?></p>
                        <div class="meta">
                            <p><?= get_field('location'); ?></p>
                            <p><a href="<?= get_field('company_link'); ?>" target="_blank" rel="noreferrer noopener"><?= get_field('link_text'); ?><svg xmlns="http://www.w3.org/2000/svg" width="12.522" height="11.13" viewBox="0 0 12.522 11.13"><path id="Icon_awesome-external-link-alt" data-name="Icon awesome-external-link-alt" d="M12.522.522V3.3a.522.522,0,0,1-.891.369L10.855,2.9,5.561,8.191a.522.522,0,0,1-.738,0L4.331,7.7a.522.522,0,0,1,0-.738L9.625,1.667,8.849.891A.522.522,0,0,1,9.218,0H12A.522.522,0,0,1,12.522.522ZM8.848,5.887,8.5,6.235a.522.522,0,0,0-.153.369V9.739H1.391V2.783H7.13A.522.522,0,0,0,7.5,2.63l.348-.348a.522.522,0,0,0-.369-.891H1.043A1.043,1.043,0,0,0,0,2.435v7.652A1.043,1.043,0,0,0,1.043,11.13H8.7a1.043,1.043,0,0,0,1.043-1.043V6.256A.522.522,0,0,0,8.848,5.887Z" fill="#8e8e8e"/></svg></a></p>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </div>
        <?php
    }

}
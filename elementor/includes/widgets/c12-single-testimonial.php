<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Single_Testimonial extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_single_testimonial';
    }

    public function get_title() {
        return esc_html__('Single Testimonial', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-editor-quote';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['single', 'testimonial'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    } 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-single-testimonial">
               <blockquote>
                    The Arrow project exceeded our expectations, providing in-depth and broad expertise in our areas of interest.
                    <cite class="credit">
                        <div class="image"></div>
                        <div class="content">
                            <h5>Dylan McKee</h5>
                            <p>Co-Founder, Nebula Labs</p>
                        </div>
                    </cite>
               </blockquote>
            </div>
        <?php
    }

}
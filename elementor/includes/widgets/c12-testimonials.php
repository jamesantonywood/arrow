<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Testimonials extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_testimonials';
    }

    public function get_title() {
        return esc_html__('Testimonials', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-editor-quote';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['testimonials'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $row_1 = get_posts([
            'post_type' => 'case-studies',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'ASC'
        ]);
        $row_2 = get_posts([
            'post_type' => 'case-studies',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'DESC'
        ]);
        ?>
            <div class="c12-widget c12-testimonials">

                <div class="testimonial-row marquee-container">
                    <div class="marquee" data-direction="left">
                        <div class="marquee-item">
                            <!-- foreach testimonial -->
                            <?php foreach($row_1 as $testimonial) : ?>
                                <div class="testimonial">
                                    <div class="credit">
                                        <div class="image"></div>
                                        <div class="content">
                                            <h5><?= get_field('name', $testimonial->ID); ?></h5>
                                            <p><?= get_field('role', $testimonial->ID); ?></p>
                                        </div>
                                    </div>
                                    <div class="quote"><?= get_field('quote', $testimonial->ID); ?></div>
                                    <div class="button">
                                        <a href="<?= the_permalink($testimonial->ID); ?>">Read Case Study</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- End foreach -->
                        </div>
                    </div>
                </div>   
                
                <!-- Second Row -->
                <div class="testimonial-row marquee-container">
                    <div class="marquee" data-direction="right">
                        <div class="marquee-item">
                            <!-- foreach testimonial -->
                            <?php foreach($row_2 as $testimonial) : ?>
                                <div class="testimonial">
                                    <div class="credit">
                                        <div class="image"></div>
                                        <div class="content">
                                            <h5><?= get_field('name', $testimonial->ID); ?></h5>
                                            <p><?= get_field('role', $testimonial->ID); ?></p>
                                        </div>
                                    </div>
                                    <div class="quote"><?= get_field('quote', $testimonial->ID); ?></div>
                                    <div class="button">
                                        <a href="<?= the_permalink($testimonial->ID); ?>">Read Case Study</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- End foreach -->
                        </div>
                    </div>
                </div>   
            </div>
        <?php
    }

}
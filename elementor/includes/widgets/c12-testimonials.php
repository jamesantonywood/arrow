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
        ?>
            <div class="c12-widget c12-testimonials">
                <div class="testimonial-row">
                    <div class="marquee-container">
                        <!-- foreach testimonial -->
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <!-- End foreach -->
                        
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                    </div>
                </div>   
                
                <!-- Second Row -->
                <div class="testimonial-row">
                    <div class="marquee-container">
                        <!-- foreach testimonial -->
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <!-- End foreach -->
                        
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="credit">
                                <div class="image"></div>
                                <div class="content">
                                    <h5>Dylan McKee</h5>
                                    <p>Co-Founder, Nebula Labs</p>
                                </div>
                            </div>
                            <div class="quote">We brought our skills from the app sector and they added their expertise in AI, data analysis and machine learning.</div>
                            <div class="button">
                                Read Case Study
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        <?php
    }

}
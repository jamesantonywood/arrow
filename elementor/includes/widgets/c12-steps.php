<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Steps extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_steps';
    }

    public function get_title() {
        return esc_html__('Steps', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['steps'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-steps">
                <div class="inner">
                    <div class="slides swiper what-we-do-swiper">
                        <div class="slides-container swiper-wrapper">
                            <!-- foreach slide -->
                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_1.png', __FILE__);  ?>"></div>
                                <h3>Get in touch with arrow</h3>
                                <p>Let’s talk about what’s happening and what you’d like to achieve.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to grow?</span></a>
                                    </div>
                                    <div class="cta secondary">
                                        <a href="#"><span>Do I qualify?</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- endforeach -->
                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_2.png', __FILE__);  ?>"></div>
                                <h3>Get in touch with arrow</h3>
                                <p>Let’s talk about what’s happening and what you’d like to achieve.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to grow?</span></a>
                                    </div>
                                    <div class="cta secondary">
                                        <a href="#"><span>Do I qualify?</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-navigation">
                            <div class="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.819" height="55.409" viewBox="0 0 24.819 55.409">
                                    <g id="Group_151" data-name="Group 151" transform="translate(1126.409 2039.409) rotate(180)">
                                        <line id="Line_48" data-name="Line 48" y2="53" transform="translate(1114 1985)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_49" data-name="Line 49" x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_50" data-name="Line 50" x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="pagination">1/7</div>
                            <div class="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.819" height="55.409" viewBox="0 0 24.819 55.409">
                                    <g id="Group_150" data-name="Group 150" transform="translate(-1101.591 -1984)">
                                        <line id="Line_48" data-name="Line 48" y2="53" transform="translate(1114 1985)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_49" data-name="Line 49" x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_50" data-name="Line 50" x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
        <?php
    }

}
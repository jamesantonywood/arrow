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
                                        <a href="/apply"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>
                            <!-- endforeach -->

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_2.png', __FILE__);  ?>"></div>
                                <h3>You’ll be assigned an Arrow Innovation Associate</h3>
                                <p>This is your single point of contact and look after your project.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_3.png', __FILE__);  ?>"></div>
                                <h3>We’ll get to know your business and challenges in detail.</h3>
                                <p>You may know exactly what you need, but your Arrow Innovation Associate will also recommend alternative options that may be even more transformative.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_4.png', __FILE__);  ?>"></div>
                                <h3>Using our in-depth knowledge of the resources available</h3>
                                <p>At the partner universities, we’ll build a tailored action plan for you and put you in touch with the appropriate experts.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_5.png', __FILE__);  ?>"></div>
                                <h3>As your project progresses</h3>
                                <p>Your Arrow Innovation Associate will ensure everything runs smoothly and keep everyone in the loop.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_6.png', __FILE__);  ?>"></div>
                                <h3>You see your innovation flourish</h3>
                                <p>Thanks to targeted input from the right experts.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_7.png', __FILE__);  ?>"></div>
                                <h3>We’ll sort out any funding needed</h3>
                                <p>So rest assured there’s no cost to you. Our work is paid for by the UK Shared Prosperity Fund, North of Tyne Combined Authority and Durham County Council.</p>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="#"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
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
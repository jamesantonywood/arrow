<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Our_Values extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_our_values';
    }

    public function get_title() {
        return esc_html__('Our Values', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-star';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['accreditation', 'logos'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-our-values">
                <!-- for each value... -->
                <div class="value">
                    <div class="front">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
                                <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z"/>
                            </svg>

                        </div>
                        <h3>Caring</h3>
                    </div>
                    <div class="back">
                        <p>We expect all of our staff to treat every person with respect, consideration, preserving dignity, privacy and positively respond to their service is provided.</p>
                    </div>
                </div>
                <!-- end for each -->
                <div class="value">
                    <div class="front">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
                                <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z"/>
                            </svg>
                        </div>
                        <h3>Caring</h3>
                    </div>
                    <div class="back">
                        <p>We expect all of our staff to treat every person with respect, consideration, preserving dignity, privacy and positively respond to their service is provided.</p>
                    </div>
                </div>
                <div class="value">
                    <div class="front">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
                                <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z"/>
                            </svg>
                        </div>
                        <h3>Caring</h3>
                    </div>
                    <div class="back">
                        <p>We expect all of our staff to treat every person with respect, consideration, preserving dignity, privacy and positively respond to their service is provided.</p>
                    </div>
                </div>
                <div class="value">
                    <div class="front">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
                                <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z"/>
                            </svg>
                        </div>
                        <h3>Caring</h3>
                    </div>
                    <div class="back">
                        <p>We expect all of our staff to treat every person with respect, consideration, preserving dignity, privacy and positively respond to their service is provided.</p>
                    </div>
                </div>
                <div class="value">
                    <div class="front">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
                                <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z"/>
                            </svg>
                        </div>
                        <h3>Caring</h3>
                    </div>
                    <div class="back">
                        <p>We expect all of our staff to treat every person with respect, consideration, preserving dignity, privacy and positively respond to their service is provided.</p>
                    </div>
                </div>
            </div>
        <?php
    }

}
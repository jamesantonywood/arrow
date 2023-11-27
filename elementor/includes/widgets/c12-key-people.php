<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Key_People extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_key_people';
    }

    public function get_title() {
        return esc_html__('Key People', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['simple', 'text'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-key-people">
                <!-- foreach Person -->
                <div class="person">
                    <div class="credit">
                        <div class="image"></div>
                        <div class="content">
                            <h5>Dylan McKee</h5>
                            <p>Co-Founder, Nebula Labs</p>
                        </div>
                    </div>
               </div>
               <!-- endforeach -->
               <div class="person">
                    <div class="credit">
                        <div class="image"></div>
                        <div class="content">
                            <h5>Dylan McKee</h5>
                            <p>Co-Founder, Nebula Labs</p>
                        </div>
                    </div>
               </div>
               <div class="person">
                    <div class="credit">
                        <div class="image"></div>
                        <div class="content">
                            <h5>Dylan McKee</h5>
                            <p>Co-Founder, Nebula Labs</p>
                        </div>
                    </div>
               </div>
               <div class="person">
                    <div class="credit">
                        <div class="image"></div>
                        <div class="content">
                            <h5>Dylan McKee</h5>
                            <p>Co-Founder, Nebula Labs</p>
                        </div>
                    </div>
               </div>
            </div>
        <?php
    }

}
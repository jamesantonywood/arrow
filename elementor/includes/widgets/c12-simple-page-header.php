<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Simple_Page_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_simple_page_header';
    }

    public function get_title() {
        return esc_html__('Simple Page Header', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['header'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

		$this->end_controls_section();
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-simple-page-header">
                <div class="inner">
                    <h1>
                    <?php
                        if(is_archive() || is_home()) {
                            wp_title('');
                        } else {
                            echo $settings['title'];
                        }
                    ?>
                </div>
            </div>
        <?php
    }

}
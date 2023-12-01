<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Gradient extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_gradient';
    }

    public function get_title() {
        return esc_html__('Gradient', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-divider';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['gradient'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        $this->start_controls_section(
			'Style',
			[
				'label' => esc_html__( 'Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'colour',
			[
				'label' => esc_html__( 'Colour', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'Green',
				'options' => [
					'' => esc_html__( 'Default', 'textdomain' ),
					'green' => esc_html__( 'Green', 'textdomain' ),
					'blue'  => esc_html__( 'Blue', 'textdomain' ),
					'red' => esc_html__( 'Red', 'textdomain' ),
					'yellow' => esc_html__( 'Yellow', 'textdomain' ),
					'purple' => esc_html__( 'Purple', 'textdomain' ),
                ],
			]
		);

		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-gradient" >
                <div class="gradient" data-color="<?= $settings['colour'] ?>"></div>
            </div>
        <?php
    }

}
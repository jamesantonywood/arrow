<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Decorated_Video extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_decorated_video';
    }

    public function get_title() {
        return esc_html__('Decorated Video', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-play';
    }

    public function get_categories() {
        return ['c12-widgets'];
        // return ['basic'];
    }

    public function get_keywords() {
        return ['decorated', 'video'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        // Content 
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'self_hosted',
			[
				'label' => esc_html__( 'Use a Self Hosted Video?', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'embedd_code',
			[
				'label' => esc_html__( 'Embedd Code', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( 'Paste your embedd code here', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'self_hosted' => '',
                ],
			]
		);

		$this->add_control(
			'video',
			[
				'label' => esc_html__( 'Choose Video File', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_types' => [ 'video' ],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'condition' => [
                    'self_hosted' => 'yes',
                ],
			]
		);
		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-decorated-video">
                <div class="video">
                    <?php if ($settings['self_hosted']) : ?> 
                        <video controls>
                            <source src="<?= $settings['video']['url']; ?>">
                        </video>
                    <?php else : ?>
                        <?= $settings['embedd_code']; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php
    }

}
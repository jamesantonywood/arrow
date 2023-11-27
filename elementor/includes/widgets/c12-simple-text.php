<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Simple_Text extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_simple_text';
    }

    public function get_title() {
        return esc_html__('Simple Text', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-text-align-center';
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
        // Start Content
        $this->start_controls_section(
            'content_section',
			[
				'label' => esc_html__( 'Content', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        ); 

        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'c12-elementor-plugin' ),
				'placeholder' => esc_html__( 'Type your title here', 'c12-elementor-plugin' ),
			]
		);

        $this->add_control(
			'body',
			[
				'label' => esc_html__( 'Body', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Type your body text here', 'c12-elementor-plugin' ),
				'placeholder' => esc_html__( 'Type your body text here', 'c12-elementor-plugin' ),
			]
		);

        $this->end_controls_section();
        // End

        // Start Styles
        $this->start_controls_section(
            'style',
			[
				'label' => esc_html__( 'Style', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        ); 

        $this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'textdomain' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'textdomain' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'textdomain' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

        $this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0e1111',
				'selectors' => [
					'{{WRAPPER}} h3, {{WRAPPER}} p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'width',
			[
				'label' => esc_html__( 'Width', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 672,
						'step' => 8,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 672,
				],
				'selectors' => [
					'{{WRAPPER}} .c12-simple-text' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();
        // End
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        // TODO: Inline editing?
        ?>
            <div class="c12-widget c12-simple-text <?= $settings['text_align']; ?>">
                <?php if ($settings['title'] !== '') : ?>
                    <h3><?= $settings['title']; ?></h3>
                <?php endif; ?>
                <div class="body">
                    <?= $settings['body']; ?>
                </div>
            </div>
        <?php
    }

}
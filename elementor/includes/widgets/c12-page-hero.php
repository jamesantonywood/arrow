<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Page_Hero extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_page_hero';
    }

    public function get_title() {
        return esc_html__('Page Hero', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-lightbox-expand';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['page', 'hero'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

        // CONTENT 
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'page-title',
			[
				'label' => esc_html__( 'Page Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

        $this->add_control(
			'page-subline',
			[
				'label' => esc_html__( 'Page Subline', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default Subline', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your subline here', 'textdomain' ),
			]
		);

        $this->add_control(
			'page-description',
			[
				'label' => esc_html__( 'Page Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);

        $this->end_controls_section();
        // END

        $this->start_controls_section(
			'arrow-controls',
			[
				'label' => esc_html__( 'Arrow Controls', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'full_height',
			[
				'label' => esc_html__( 'Full Height', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'hide_arrow',
			[
				'label' => esc_html__( 'Hide Arrow', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Hide', 'textdomain' ),
				'label_off' => esc_html__( 'Show', 'textdomain' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'max-width',
			[
				'label' => esc_html__( 'Width', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 628,
				],
				'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'bottom-arm-angle',
			[
				'label' => esc_html__( 'Bottom Arm Angle', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => -360,
				'max' => 360,
				'step' => 1,
				'default' => 45,
                'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary .bottom-arm' => 'rotate: {{VALUE}}deg',
				],
			]
		);

        $this->add_control(
			'top-arm-angle',
			[
				'label' => esc_html__( 'Top Arm Angle', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => -360,
				'max' => 360,
				'step' => 1,
				'default' => 3,
                'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary .top-arm' => 'rotate: {{VALUE}}deg',
				],
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

        $this->start_controls_section(
			'arrow-position',
			[
				'label' => esc_html__( 'Arrow Position', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'set-top',
			[
				'label' => esc_html__( 'Set Top', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'top',
			[
				'label' => esc_html__( 'Top', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary' => 'top: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'set-top' => 'yes',
                ],
			]
		);

        $this->add_control(
			'set-right',
			[
				'label' => esc_html__( 'Set Right', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'right',
			[
				'label' => esc_html__( 'Right', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary' => 'right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'set-right' => 'yes',
                ],
			]
		);

        $this->add_control(
			'set-bottom',
			[
				'label' => esc_html__( 'Set Bottom', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'bottom',
			[
				'label' => esc_html__( 'Bottom', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary' => 'bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'set-bottom' => 'yes',
                ],
			]
		);

        $this->add_control(
			'set-left',
			[
				'label' => esc_html__( 'Set Left', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'left',
			[
				'label' => esc_html__( 'Left', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .arrow-container-secondary' => 'left: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'set-left' => 'yes',
                ],
			]
		);
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-page-hero c12-hero <?= $settings['full_height'] ? 'full-height' : ''; ?>">
                <div class="inner">
                    <div class="content">
                        <h1>
                            <span><?= $settings['page-title']; ?></span>
                            <?= $settings['page-subline']; ?>
                        </h1>
                        <p><?= $settings['page-description']; ?></p>
                    </div>

                    <div class="arrow-container-secondary <?= $settings['hide_arrow'] ? 'hidden' : ''; ?>" data-color="<?= $settings['colour']; ?>">
                        <div class="bottom-arm"></div>
                        <div class="top-arm"></div>
                    </div>
                </div>
            </div>
        <?php
    }

}
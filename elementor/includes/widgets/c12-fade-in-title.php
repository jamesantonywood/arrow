<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Fade_In_Title extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_fade_in_title';
    }

    public function get_title() {
        return esc_html__('Fade-in Title', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-typography-1';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['fade', 'in', 'title'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        // CONTENT
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
            'label' => esc_html__('Title', 'c12-elementor-plugin'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'rows' => 3,
            'default' => esc_html__('The title text goes here', 'c12-elementor-plugin'),
            'placeholder' => esc_html__( 'Type your Title text here', 'c12-elementor-plugin' ),
            'dynamic' => [
                'active' => true,
            ],
          ]  
        );

        $this->end_controls_section();

        // STYLES
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__( 'Colours', 'c12-elementor-plugin' ),
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
			'break',
			[
				'label' => esc_html__( 'Word to Break (Index)', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 50,
				'step' => 1,
				'default' => 3,
			]
		);

        $this->add_control(
            'start_color',
            [
                'label' => esc_html__( 'Start Color', 'elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'global' => [
                    'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
                ],
                'default' => '#e8e5e0',
				'selectors' => [
					'{{WRAPPER}} h2' => 'color: {{VALUE}};',
				],
            ]
        );
        
        $this->add_control(
            'end_color',
            [
                'label' => esc_html__( 'End Color', 'c12-elementor-plugin' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0e1111',
                'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
				],
            ]
        );

        $this->end_controls_section();
       
        
    }

    public function c12_get_global_color($field) {
        $settings = $this->get_settings_for_display();
        if (!empty($settings['__globals__'][$field])) {
            return str_replace('globals/colors?id=','--e-global-color-', $settings['__globals__'][$field]);
        } else {
            return $settings[$field];
        }
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $this->add_inline_editing_attributes( 'title', 'none' );

        $start_color = $this->c12_get_global_color('start_color');
        $end_color = $this->c12_get_global_color('end_color');

        ?>
            <div class="c12-widget c12-fade-in-title <?= $settings['text_align']; ?>" >
                <h2 data-splitting data-start="<?= $start_color; ?>" data-end="<?= $end_color; ?>" data-break="<?= $settings['break']; ?>" <?= $this->get_render_attribute_string( 'title' ); ?>><?= $settings['title']; ?></h2>
            </div>
        <?php
    }

}
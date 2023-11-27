<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Button_Group extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_button_group';
    }

    public function get_title() {
        return esc_html__('Button Group', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-form-vertical';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['button', 'group'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'buttons',
			[
				'label' => esc_html__( 'Buttons', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'button-text',
						'label' => esc_html__( 'Button Text', 'c12-elementor-plugin' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Button Text' , 'c12-elementor-plugin' ),
						'label_block' => true,
					],
					[
						'name' => 'button-url',
						'label' => esc_html__( 'Button URL', 'c12-elementor-plugin' ),
						'type' => \Elementor\Controls_Manager::URL,
						'options' => [ 'url', 'is_external', 'nofollow' ],
                        'default' => [
                            'url' => '#',
                            'is_external' => false,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
						'label_block' => true,
					],
                    [
                        'name' => 'button-type',
                        'label' => esc_html__( 'Button type', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'primary',
                        'options' => [
                            '' => esc_html__( 'Default', 'textdomain' ),
                            'primary' => esc_html__( 'Primary', 'textdomain' ),
                            'secondary'  => esc_html__( 'Secondary', 'textdomain' ),
                        ],
                    ],
				],
				'default' => [
					[
						'button-text' => esc_html__( 'Ready to grow?', 'c12-elementor-plugin' ),
						'button-url' => esc_html__( '#', 'c12-elementor-plugin' ),
					],
					
				],
                
			]
		);
       

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        // TODO: Widet-ify! btn-group.
        ?>
            <div class="c12-widget c12-button-group">
                <?php if($settings['buttons']) : ?>
                    <?php foreach($settings['buttons'] as $button) : ?>
                        <div class="cta <?= $button['button-type']; ?>">
                            <a href="<?= $button['button-url']['url']; ?>"><span><?= $button['button-text']; ?></span></a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- <div class="cta">
                    <a href="#"><span>Ready to grow?</span></a>
                </div>
                <div class="cta secondary">
                    <a href="#">How does this work?</a>
                </div> -->
            </div>
        <?php
    }

}
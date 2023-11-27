
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Half_Width extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_half_width';
    }

    public function get_title() {
        return esc_html__('Half Width', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-image-before-after';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['eicon-image-before-after'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        // Content
        $this->start_controls_section(
            'content_section',
			[
				'label' => esc_html__( 'Content', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );

        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'content',
			[
				'label' => esc_html__( 'Content', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Type your content here', 'c12-elementor-plugin' ),
				'placeholder' => esc_html__( 'Type your content here', 'c12-elementor-plugin' ),
			]
		);
        
        $this->add_control(
            'include_cta',
            [
                'label' => esc_html__('Include Call to Action', 'c12-elementor-plugin'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'c12-elementor-plugin'),
                'label_off' => esc_html__('No', 'c12-elementor-plugin'),
                'return_value' => 'yes',
				'default' => 'yes',         
            ],
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'call_to_action',
			[
				'label' => esc_html__( 'Call to Action', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'include_cta' => 'yes',
                ],
			]
        );

        $this->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Call to action text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Type text', 'textdomain' ),
				'placeholder' => esc_html__( 'Type text', 'textdomain' ),
			]
		);

        $this->add_control(
			'button_url',
			[
				'label' => esc_html__( 'Call to action url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $this->add_inline_editing_attributes('content', 'basic')
        ?>
            <div class="c12-widget c12-half-width">
                <div class="image">
                    <?= '<img src="' . $settings['image']['url'] . '">';?>
                </div>
                <div class="content">
                    <div <?= $this->get_render_attribute_string('content'); ?>><?= $settings['content']; ?></div>
                    <?php if ($settings['include_cta']) : ?>
                    <div class="cta">
                      <a href="<?= $settings['button_url']['url']; ?>"><span><?= $settings['button_text']; ?></span></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php
    }

}
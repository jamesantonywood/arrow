<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Flip_Boxes extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_flip_boxes';
    }

    public function get_title() {
        return esc_html__('Flip Boxes', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-star';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['flip', 'boxes'];
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
			'flip_boxes',
			[
				'label' => esc_html__( 'Flip Boxes', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'flip_box_title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'flip_box_body',
						'label' => esc_html__( 'Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Body' , 'textdomain' ),
						'show_label' => false,
					],
					[
                        'name' => 'icon',
                        'label' => esc_html__( 'Icon', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'data-sciences',
                        'options' => [
                            'data-sciences' => esc_html__( 'Data Sciences', 'textdomain' ),
                            'sustainable-chemistry' => esc_html__( 'Sustainable Chemistry', 'textdomain' ),
                            'sustainable-manufacturing'  => esc_html__( 'Sustainable Manufacturing', 'textdomain' ),
                            'green-energy' => esc_html__( 'Green Energy', 'textdomain' ),
                            'longevity-and-caring' => esc_html__( 'Longevity and Caring', 'textdomain' ),
                            'innovation-management' => esc_html__( 'Innovation Managment', 'textdomain' ),
                            'life-sciences' => esc_html__( 'Life Sciences', 'textdomain' ),
                            'engineering' => esc_html__( 'Engineering', 'textdomain' ),
                            'advanced-materials' => esc_html__( 'Advanced Materials', 'textdomain' ),
                            'one-to-one' => esc_html__( 'One to one', 'textdomain' ),
                            'innovation-support' => esc_html__( 'Innovation support', 'textdomain' ),
                            'research-and-development'  => esc_html__( 'Research and development', 'textdomain' ),
                            'proof-and-concept' => esc_html__( 'Proof of concept', 'textdomain' ),
                            'specialist-data' => esc_html__( 'Specialist data', 'textdomain' ),
                            'equipment' => esc_html__( 'Equipment', 'textdomain' ),
                            ],
                        'selectors' => [
                            '{{WRAPPER}} .your-class' => 'border-style: {{VALUE}};',
                        ],
                    ]
				],
				'default' => [
					[
						'flip_box_title' => esc_html__( 'Title #1', 'textdomain' ),
						'flip_box_body' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					]
				],
				'title_field' => '{{{ flip_box_title }}}',
			]
		);

		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-flip-boxes">
                <!-- for each value... -->
                <?php foreach($settings['flip_boxes'] as $box) : ?>
                <div class="flip-box">
                    <div class="front">
                        <div class="icon">
                            <?= file_get_contents(dirname(dirname(__FILE__)).('../../assets/img/icons/flip-boxes/' . $box['icon'] . '.svg')); ?>
                        </div>
                        <h3><?= $box['flip_box_title']; ?></h3>
                    </div>
                    <div class="back">
                        <?= $box['flip_box_body']; ?>
                    </div>
                </div>
                <!-- end for each -->
                <?php endforeach; ?>
            </div>
        <?php
    }

}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Single_Testimonial extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_single_testimonial';
    }

    public function get_title() {
        return esc_html__('Single Testimonial', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-editor-quote';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['single', 'testimonial'];
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
			'quote',
			[
				'label' => esc_html__( 'Quote', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default Quote', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your Quote here', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
			]
		);

        $this->add_control(
			'name',
			[
				'label' => esc_html__( 'Name', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe', 'textdomain' ),
				'placeholder' => esc_html__( 'Enter name', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
			]
		);

        $this->add_control(
			'role',
			[
				'label' => esc_html__( 'Role', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default role', 'textdomain' ),
				'placeholder' => esc_html__( 'Enter role', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
			]
		);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-single-testimonial">
               <blockquote>
                    <div class="open-quote"><img src="<?= plugins_url('../../assets/img/open_quote.png', __FILE__); ?>"></div>
                    <div class="close-quote"><img src="<?= plugins_url('../../assets/img/close_quote.png', __FILE__); ?>"></div>
                    <?= $settings['quote']; ?>
                    <cite class="credit">
                        <div class="image"> <?= file_get_contents(dirname(dirname(__FILE__)).('../../assets/img/icons/sillouhette.svg')); ?></div>
                        <div class="content">
                            <h5><?= $settings['name']; ?></h5>
                            <p><?= $settings['role']; ?></p>
                        </div>
                    </cite>
               </blockquote>
            </div>
        <?php
    }

}

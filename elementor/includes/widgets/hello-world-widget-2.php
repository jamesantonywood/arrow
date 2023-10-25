<?php
class Elementor_Hello_World_Widget_2 extends \Elementor\Widget_Base {

    public function get_name() {
        return 'hello_world_widget_2';
    }

    public function get_title() {
        return esc_html__('Hello World 2', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-save';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['hello', 'world'];
    }

    protected function register_controls() {

        // Content Tab Start

        $this->start_controls_section(
            'section_title',
            [
                'label' => esc_html__('Title', 'c12-elementor-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'c12-elementor-plugin'),
                'type'  => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Hello world', 'c12-elementor-plugin'),
            ]
        );

        $this->end_controls_section();

        // Content Tab End

        // Style Tab Start

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Title', 'c12-elementor-plugin'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Text Color', 'c12-elementor-plugin'),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<p class="hello-world">
			<?php echo $settings['title']; ?>
		</p>

		<?php
	}
}
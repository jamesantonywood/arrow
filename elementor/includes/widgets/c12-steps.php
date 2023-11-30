<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Steps extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_steps';
    }

    public function get_title() {
        return esc_html__('Steps', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['steps'];
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
			'steps',
			[
				'label' => esc_html__( 'Steps', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'content',
						'label' => esc_html__( 'Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'textdomain' ),
						'show_label' => false,
					],
				],
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'textdomain' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
					[
						'list_title' => esc_html__( 'Title #2', 'textdomain' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->end_controls_section();
    }
 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-steps">
                <div class="inner">
                    <div class="slides swiper what-we-do-swiper">
                        <div class="slides-container swiper-wrapper">
                        <?php $ndx = 1 ?>
                        <?php foreach($settings['steps'] as $step) : ?>
                            <div class="slide swiper-slide">
                                <div class="number"><img src="<?= plugins_url('../../assets/img/numbers/blue/blue_' . $ndx . '.png', __FILE__);  ?>"></div>
                                <h3><?= $step['title'] ?></h3>
                                <?= $step['content'] ?>
                                <div class="buttons">
                                    <div class="cta">
                                        <a href="/apply"><span>Ready to innovate?</span></a>
                                    </div>
                                    <div class="help-links">
                                        <a href="/do-i-qualify">Do I qualify?</a>
                                    </div>
                                </div>
                            </div>
                            <?php $ndx++ ?>
                        <?php endforeach; ?>


                        </div>
                        <div class="slide-navigation">
                            <div class="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.819" height="55.409" viewBox="0 0 24.819 55.409">
                                    <g id="Group_151" data-name="Group 151" transform="translate(1126.409 2039.409) rotate(180)">
                                        <line id="Line_48" data-name="Line 48" y2="53" transform="translate(1114 1985)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_49" data-name="Line 49" x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_50" data-name="Line 50" x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="pagination">1/7</div>
                            <div class="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.819" height="55.409" viewBox="0 0 24.819 55.409">
                                    <g id="Group_150" data-name="Group 150" transform="translate(-1101.591 -1984)">
                                        <line id="Line_48" data-name="Line 48" y2="53" transform="translate(1114 1985)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_49" data-name="Line 49" x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_50" data-name="Line 50" x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke="#33366b" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
        <?php
    }

}
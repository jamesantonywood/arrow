<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Accreditation_Logos extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_accreditation_logos';
    }

    public function get_title() {
        return esc_html__('Accredittion Logos', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-form-vertical';
    }

    public function get_categories() {
        return ['c12-widgets'];
        // return ['basic'];
    }

    public function get_keywords() {
        return ['accreditation', 'logos'];
    }

    // public function get_style_depends() {
    //     return ['c12-decorated-video-styles'];
    // }

    protected function register_controls() {
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'c12-elementor-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'logos',
			[
				'label' => esc_html__( 'Logos', 'c12-elementor-plugin' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'logo_img',
						'label' => esc_html__( 'Choose Logo', 'c12-elementor-plugin' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
						'label_block' => true,
					],
					[
						'name' => 'logo_url',
						'label' => esc_html__( 'Logo URL', 'c12-elementor-plugin' ),
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
                    
				],
				'default' => [
					
				],
                
			]
		);
       

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-accreditation-logos">

                <div class="logo-list">
                    <!-- for each logo... -->

                    <?php if($settings['logos']) : ?>
                        <?php foreach($settings['logos'] as $logo) : ?>
                            <?= $logo['logo_url']['url'] ? '<a class="logo" href="'. $logo['logo_url']['url'] .'">' : '<div class="logo">' ?>
                                <img src="<?= $logo['logo_img']['url'] ?>" alt="">
                            <?= $logo['logo_url']['url'] ? '</a>' : '</div>'; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <!-- end foreach -->
                </div>
            
            </div>
        <?php
    }

}
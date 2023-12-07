<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Key_Benefits extends \Elementor\Widget_Base {

    private $value_icons = [
        'caring' => '
        <svg xmlns="http://www.w3.org/2000/svg" width="59.516" height="54.495" viewBox="0 0 59.516 54.495">
          <path d="M28.93,7.536c3.945-5.4,9-7.861,15.288-7.273,8.629.806,14.495,5.845,15.229,15.485a19.534,19.534,0,0,1-2.713,11.989c-1.495,2.431-3.222,4.725-4.919,7.026-2.936,3.98-6.013,7.859-8.862,11.9a37.738,37.738,0,0,0-3.038,5.726c-1.051,2.231-1.853,2.637-4.023,1.458-5.487-2.983-10.97-5.974-16.382-9.089a50.316,50.316,0,0,1-11.754-9.4A27.091,27.091,0,0,1,.1,13.965,16.034,16.034,0,0,1,5.341,2.957,10.385,10.385,0,0,1,11.107.188,18.074,18.074,0,0,1,26.841,5.312C27.516,5.973,28.137,6.689,28.93,7.536Z" />
        </svg>
        ',
        'aware' => '
        <svg xmlns="http://www.w3.org/2000/svg" width="57.488" height="68.01" viewBox="0 0 57.488 68.01">
          <path d="M33.123,67.98c.682-3.893-.039-7.521-.346-11.166-.07-.833-.16-1.669-.158-2.5.017-9.268-.006-18.536.113-27.8.039-2.984.476-5.961.711-8.943.081-1.024.65-1.26,1.56-1.136A27.088,27.088,0,0,1,47.875,21.4a23.661,23.661,0,0,1,9.319,16.189h0c1,7.048-.628,13.585-3.831,19.762-2.548,4.912-6.241,8.452-12.055,9.206-2.256.293-4.464.949-6.7,1.406a2.441,2.441,0,0,1-.49.042C33.821,68.01,33.5,67.98,33.123,67.98ZM26.811,51.35c-3.137-.81-6.353-1.408-9.382-2.519A30.046,30.046,0,0,1,3.648,38.421C.068,33.642-.527,28.016.373,22.27a39.463,39.463,0,0,1,2.065-6.978c.675-1.9,1.586-3.709,2.4-5.555a12.255,12.255,0,0,1,6.787-6.713,40.953,40.953,0,0,1,4.031-1.671A42.091,42.091,0,0,1,20.921.31C22.15.125,23.41.148,24.65.026c2.185-.215,4.02.874,3.906,3.622-.26,6.332-.373,12.67-.545,19.005-.185,6.823-.39,13.646-.546,20.47-.06,2.623-.01,5.249-.01,8.044a2.893,2.893,0,0,1-.581.189A.256.256,0,0,1,26.811,51.35Z" />
        </svg>
        ',
        'sustainability' => '
        <svg xmlns="http://www.w3.org/2000/svg" width="60.792" height="63.057" viewBox="0 0 60.792 63.057">
          <path d="M60.792,34c-.761,6.389-1.515,12.779-2.3,19.167a10.147,10.147,0,0,1-.508,1.909c-1.341,4.054-6.611,6.646-12.975,6.45-1.9-.058-3.21-.632-3.783-1.742a9.172,9.172,0,0,1-1.113-3.3c-.423-4.895-.77-9.794-1.007-14.694-.225-4.643-.68-9.267-2.51-13.772A17.022,17.022,0,0,0,33.931,23.7c-1.3-1.573-2.731-1.516-4.142.057a11.385,11.385,0,0,0-2.608,5.7c-.948,4.862-1.722,9.739-2.549,14.611-.536,3.159-1.112,6.317-1.545,9.483-.585,4.272-4.1,6.933-10.323,8.12-2.693.513-5.43.934-8.162,1.355a2.059,2.059,0,0,1-2.434-1.24A26.137,26.137,0,0,1,.853,57.342c-2.643-14.406.963-28.233,9.315-41.593A35.508,35.508,0,0,1,18.413,6.57a30.935,30.935,0,0,1,8.91-4.84C36.993-1.692,47.815.071,53.9,6.062A18.373,18.373,0,0,1,58.472,13.7a44.386,44.386,0,0,1,1.953,12.847C60.494,29.022,60.792,34,60.792,34Z"/>
        </svg>
        ',
        'quality' => '
        <svg id="circle02" xmlns="http://www.w3.org/2000/svg" width="59.042" height="59.915" viewBox="0 0 59.042 59.915">
          <path d="M61.057,26.157c-.408,4.521-.326,8.682-1.136,12.87C58,48.974,48.136,58.2,38.3,59.711c-8.682,1.33-16.894.214-24.527-4.418A21.628,21.628,0,0,1,3.58,40.82C1.443,30.932,1.443,21,5.938,11.741,8.716,6.014,13.914,2.719,20.148,1.33,30.235-.929,40.078.91,49.7,3.764c6.46,1.915,10.233,6.734,11.028,13.515A35.386,35.386,0,0,1,61.057,26.157Z" transform="translate(-2.191 -0.319)"/>
        </svg>
        ',
        'trusted' => '
        <svg xmlns="http://www.w3.org/2000/svg" width="33.507" height="89.077" viewBox="0 0 33.507 89.077">
          <path d="M97.226-.008c3.772.546,7.934.48,11.633,3.028A10.082,10.082,0,0,1,112.827,9.4c1.392,5.592-.184,11-1.74,16.307a31.937,31.937,0,0,1-2.989,7.819,18.7,18.7,0,0,1-7.656,7.492c-.79.386-.87.665-.672,1.437,2.29,8.884,4.552,17.768,7.59,26.447.856,2.436,1.371,5.022,2.474,7.395.487,1.044.216,1.677-.95,2.036-9,2.784-17.5,6.9-26.326,10.144a7.151,7.151,0,0,1-.908.348c-.491.108-1.187.376-1.455.157-.564-.459.031-1.044.216-1.559a110.17,110.17,0,0,0,3.5-14.115c1.347-6.434,1.364-13.091,3.038-19.449.8-3.034.842-6.111,1.441-9.135.115-.592.289-1.121-.574-1.357-2.057-.574-3.205-2.213-4.138-3.939-5.126-9.434-4.966-18.938-.327-28.542a25.943,25.943,0,0,1,7.767-9.566C92.814.034,94.87-.036,97.226-.008Zm5.15,13.419a4.185,4.185,0,0,0-2.22-3.828c-1.667-.717-3.1.223-4.357,1.434a12.876,12.876,0,0,0-3.132,5.095c-1.086,3.108,0,5.613,2.676,6.584,1.608.588,4.743-1.274,5.752-3.4a14.8,14.8,0,0,0,1.281-5.874Z" transform="translate(-79.857 0.012)" />
        </svg>
        '
    ];

    public function get_name() {
        return 'c12_key_benefits';
    }

    public function get_title() {
        return esc_html__('Key Benefits', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['button', 'group'];
    }

    public function get_style_depends() {
        return ['eicon-gallery-grid'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Key Benefits', 'elementor-list-widget' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'elementor-list-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Benefit Title', 'elementor-list-widget' ),
                'default' => esc_html__( 'Benefit Title', 'elementor-list-widget' ),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'elementor-list-widget' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Benefit Subtitle', 'elementor-list-widget' ),
                'default' => esc_html__( 'Benefit Subtitle', 'elementor-list-widget' ),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one-to-one',
                'options' => [
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
        );

        $this->add_control(
            'items',
            [
                'label' => esc_html__( 'Items', 'elementor-list-widget' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__( 'Benefit #1', 'elementor-list-widget' ),
                        'subtitle' => esc_html__( 'Subtitle #1', 'elementor-list-widget' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        // TODO: Widet-ify! btn-group.
        ?>
            <div class="c12-widget c12-key-benefits">
                <?php
                foreach ( $settings['items'] as $index => $item ) {
                ?>
                <!-- foreach benefit -->
                <div class="benefit">
                    <div class="background"></div>
                    <div class="icon">
                    <?= file_get_contents(dirname(dirname(__FILE__)).('../../assets/img/icons/key-benefits/' . $item['icon'] . '.svg')); ?>
                    </div>
                    <div class="content">
                        <h3><?=$item['title']?></h3>
                        <p><?=$item['subtitle']?></p>
                    </div>
                </div>
                 <!-- end foreach -->
                <?php } ?>

            </div>
        <?php
    }

}

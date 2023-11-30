<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_University_Graphic extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_university_graphic';
    }

    public function get_title() {
        return esc_html__('University Graphic', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['header'];
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
			'universities',
			[
				'label' => esc_html__( 'Universities', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'university_title',
						'label' => esc_html__( 'University Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'University Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'university_content',
						'label' => esc_html__( 'University Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'University Content' , 'textdomain' ),
						'show_label' => false,
					],
				],
				'default' => [
					[
						'university_title' => esc_html__( 'Title #1', 'textdomain' ),
						'university_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
					[
						'university_title' => esc_html__( 'Title #2', 'textdomain' ),
						'university_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
				],
				'title_field' => '{{{ university_title }}}',
			]
		);

		$this->end_controls_section();
    }




    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-university-graphic">
                <div class="inner">
                    <div class="image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="919.575" height="1038.652" viewBox="0 0 919.575 1038.652">
                        <g  data-name="Group 129" transform="translate(143.456 -1124.5)">
                            <g data-name="Group 56" transform="translate(-143.456 1124.5)">
                            <g data-name="Group 54" transform="translate(0)">
                                <path data-name="Path 355" d="M599.359,83.636l19.689,14.318H721.963s9.844,38.482-61.3,73.383l-18.345,9.844s-9.845,9.845,5.369,9.845h5.369l.9,8.948-17,8.055s-6.264,12.528,3.579,11.633,28.638-8.949,34.9-11.633,13.423,2.684,17,3.579,74.277,8.1,74.277,8.1l16.108,19.643V255.46s-36.691,45.64-36.691,56.38c-8.054,16.108-19.689,55.484-55.037,57.274,9.4,6.264,24.61,12.53,21.03,17.9s-.894,12.529-21.03,16.108a295.074,295.074,0,0,0-31.771,7.16l-1.789,7.159H680.8s9.845-21.477,30.428-4.473c8.948,8.054,44.745,62.644,50.115,63.538S749.7,603.582,823.088,620.584a62.488,62.488,0,0,1,0,19.689l25.058,22.372v7.16l-5.369,7.16s-1.79,33.112,14.318,47.43l2.685,9.844h-8.95l8.95,25.057s16.108,22.372,8.054,33.112a121.836,121.836,0,0,1-17.9,18.793s-1.79,18.793,10.739,11.635S877.678,811.2,892,812.1s46.536,3.579,71.593,34.9a122.326,122.326,0,0,1,0,27.743S943.9,923.066,943.9,928.435l-9.845,3.581-10.739,8.054-.894,16.108-10.739,4.475h-8.95s-14.318-3.579-8.054,5.369l.9,10.739-9.845,4.475-5.369,12.529s-11.635-10.739-14.318-7.159-1.79,2.684,4.475,7.159,14.318,9.844,14.318,9.844l2.684,5.37s43.852-12.529,41.167,0-8.054,33.112-8.054,33.112-14.32,10.739-25.953,9.844c-.9,9.845.9,15.214.9,15.214s-46.536,5.37-61.75,20.583c-10.739-1.79-13.423-10.739-16.108-11.633s-68.014-3.579-68.014-3.579l-5.369-5.37-55.485-1.79s-15.213,8.054-23.268,17.9c-14.318,0-40.27-2.684-40.27-2.684s0,7.159-5.37,7.159-4.475-16.108-4.475-16.108l-11.633-9.844s-19.689-4.475-25.057-1.79-25.058,4.474-25.953,7.159-16.108,42.061-22.372,42.957-17.9,0-17.9,0l-17.9-17.9s-17.9-6.264-36.691-2.685a355.633,355.633,0,0,0-35.8,8.949v23.268H403.373l-8.95-16.108-8.054-1.791v8.055l-15.214-.9-5.369-10.739V1087.73H381.9l2.685-4.475,12.529-.894s18.793-6.264,34.9-34.007l16.108-3.579s17-3.581,25.953-34.9l1.79-6.264,19.689-1.79,5.369-20.583s25.953-2.685,43.851,3.579c22.374,2.685,43.851,7.16,43.851,7.16l25.953-26.847s-.9-7.16-10.739-4.475-24.162,9.844-24.162,9.844l-26.849-2.685-8.054-13.423V943.649s-40.272,1.79-42.955-4.475l-2.685-6.264,12.529.9s.9-6.264-4.475-8.95-9.844-8.949-9.844-8.949-12.529,2.685-17.9,8.055-26.847,1.79-26.847,1.79-18.793,0-22.372-20.584l10.739-1.79,3.579-6.264-14.318-1.79s0-11.633,21.478-17.9,79.647-23.268,82.331-42.061,4.475-56.38,4.475-56.38L501.814,794.2l-11.635.894.9-10.739s36.691-25.058,42.061-30.427l.894-5.37-15.213,2.685V740.5s-15.214-8.95-14.32-15.214,20.584-14.319,24.163-14.319,20.583-7.159,23.268,22.374l8.949,3.579,5.369-5.37,39.376-.894a68.137,68.137,0,0,0,6.264,8.054c2.685,2.685,3.579-5.369,3.579-8.054s2.685-5.37,7.16-4.475,12.529,1.79,7.16-4.475a82.219,82.219,0,0,0-9.845-9.844l17.9-14.318V688.6l-6.264-5.369V670.7l12.529-4.475,9.844-16.109,1.79-8.948H641.42l-17,4.474-2.685-25.058s-17.9-7.159-18.793-20.583,26.849-43.851,33.113-50.115,1.79-8.949,1.79-8.949-8.95,0-15.214,2.685-21.478,10.739-26.847,13.424-19.689-4.475-19.689-4.475-5.369-9.844-8.948-3.579-1.791,13.423-1.791,13.423L550.14,565.1,539.4,545.411l-14.319-4.475.894,23.268h-5.369l-8.054-17.9-2.685-25.953,43.851-56.379V452.341s-27.743-49.221-30.428-43.851.9,7.159-1.79,10.739-13.423.894-12.529,6.264-8.948,42.06-12.529,44.745-21.477,5.37-21.477,5.37l27.742-91.282,27.743-54.59-20.583-.894-32.217-33.112,27.743-3.581,2.685-19.687,9.844-11.635s0-7.159-6.264-2.684a22.172,22.172,0,0,0-8.054,9.844h-6.264l4.475-14.318-19.689-5.37-3.579-18.793-18.793-15.213.894-15.214,10.739-.9s0-13.423,3.581-10.739,8.054,9.845,8.054,9.845l4.475-17s17.9,1.79,17.9,8.948V231.3l10.739,1.79,14.318-68.013,14.318-.9s6.264-8.948,7.16,1.791h7.159l4.475-19.689s-2.684-24.162,1.79-24.162,8.949,4.474,8.949,4.474l7.16,1.79v-17Z" transform="translate(-44.81 -83.085)" fill="#e8e5e0"/>
                                <path data-name="Path 356" d="M631.921,887.865c.738-9.592,35.2-7.756,32.814,0S656.978,902.78,653.4,902.78,631.325,895.621,631.921,887.865Z" transform="translate(19.578 109.92)" fill="#e8e5e0"/>
                                <path data-name="Path 357" d="M442.384,111.486h22.074s23.268-24.461,30.428-27.743,11.931,8.949,8.948,13.871-13.721,12.678-10.739,17.451a14.512,14.512,0,0,0,8.353,5.966v2.386H486.533l-.6,7.756-12.376,19.093H453.124L438.805,135.35Z" transform="translate(-27.143 -83.192)" fill="#e8e5e0"/>
                                <path data-name="Path 358" d="M443.391,137.231c4.723,1.379,17.9,4.773,11.933,10.142s-8.949,3.579-8.949,3.579l-6.562,4.177a10.2,10.2,0,0,1-4.773-4.773C433.25,146.776,437.78,135.593,443.391,137.231Z" transform="translate(-28.15 -70.157)" fill="#e8e5e0"/>
                                <path data-name="Path 359" d="M408.541,154.012v10.739s7.756,5.369,11.335,6.562,15.512,3.579,15.512,0-5.37-7.705-5.37-7.705,0-7.211,1.791-7.211S408.541,154.012,408.541,154.012Z" transform="translate(-34.466 -66.057)" fill="#e8e5e0"/>
                                <path data-name="Path 360" d="M422.894,174.2c4.339.913-8.054,7.159-5.667,11.933s6.563,5.369,5.667,10.142-6.185,4.773-6.185,4.773l-2.465,16.705-9.546-7.756V193.885S417.227,173,422.894,174.2Z" transform="translate(-35.395 -61.185)" fill="#e8e5e0"/>
                                <path data-name="Path 361" d="M401.126,212.618h12.529l-20.881,25.654H387.4Z" transform="translate(-39.58 -51.877)" fill="#e8e5e0"/>
                                <path data-name="Path 362" d="M448.9,222.947h8.352l9.546,5.667v7.16H453.407S448.305,226.228,448.9,222.947Z" transform="translate(-24.712 -49.378)" fill="#e8e5e0"/>
                                <path data-name="Path 363" d="M415.746,269.765s10.739,1.79,14.916,0,20.218-14.318,19.654-11.933-1.756,4.177-5.932,8.353-28.638,16.7-28.638,16.7Z" transform="translate(-32.722 -41.011)" fill="#e8e5e0"/>
                                <path data-name="Path 364" d="M464.505,267.761l26.251,28.191-10.142,7.16h-34.6l14.916-13.722s-.048-8.949-2.411-8.949-8.973-5.369-8.973-5.369S453.571,266.64,464.505,267.761Z" transform="translate(-25.4 -38.561)" fill="#e8e5e0"/>
                                <path data-name="Path 365" d="M474.867,317.822h6.264l-20.285,31.024H449.491v10.739s9.565,5.369,3,7.159-20.293,9.546-20.293,9.546v-7.756s2.992-14.318.606-13.721S426.839,356,426.839,356v7.16l-7.458-.6s-1.492-18.5,4.475-19.689,22.074-2.386,22.074-2.386l3.561,6.562Z" transform="translate(-31.883 -26.423)" fill="#e8e5e0"/>
                                <path data-name="Path 366" d="M494.568,361.537l13.125,16.705v28.637L491.585,402.7l-9.546-7.756,2.386-23.268Z" transform="translate(-16.683 -15.847)" fill="#e8e5e0"/>
                                <path data-name="Path 367" d="M445.022,397.713h62.635v29.234s14.46,31.62,17.973,34.6c-2.453,7.16-5.436,7.756-5.436,7.756h-9.546l-2.992,8.352H536.3v29.234s-59.661,38.78-60.854,44.149c-5.966-.6-18.5,0-18.5,0s1.194,39.973,4.773,42.36,5.37,15.512,1.194,19.091-4.773,11.335-4.773,11.335-3.581,7.756,0,10.739c2.386,5.369,0,35.8,0,35.8S414.6,746.73,418.772,761.645c-13.126-1.193-5.966-8.352-97.845-7.159-.6,13.125,0,15.511,0,15.511s-82.333,17.9-97.247,26.849c-23.268.6-81.139-2.983-81.139-2.983v-9.546s14.915-11.933,23.864-11.933c0,0-2.983-2.983-9.546-4.177s-14.318,4.773-14.318,4.773l-18.5-1.192s.6-8.95,5.369-10.739,7.756-1.194,7.756-1.194l-17.9-16.706-11.933-1.79s2.387-16.108,20.285-20.881l17.3-1.79,1.193-6.564-35.8-8.352s4.773-9.546,14.318-12.529,19.689.6,19.689.6l5.369,3.581,7.16,2.386,15.512-23.268,8.949-1.192.6-5.966-8.95-2.983,2.387-11.933h12.529s16.705-7.756,38.78-47.132c20.881-2.386,24.46-2.386,24.46-2.386s-7.159-15.512-10.739-16.109-38.183.6-38.183.6-22.074-27.445-29.83-32.217c1.79-8.352,10.142-20.583,10.142-20.583l11.337-2.685,5.966-8.95,16.7-2.386s5.966-9.546-1.194-11.933-26.25-16.7-27.443-20.285,11.933-3.579,11.933-3.579l7.159-13.125-5.966-7.16-2.386-10.739,14.318-1.192,1.194,8.352s2.535-6.862,12.38-4.624,34.454,16.555,37.586,18.793,11.633-4.475,11.633-4.475h7.607l6.711,7.607,17.9,1.343.894-5.37-5.816-.894-1.791-5.817s25.506-7.607,34.9-12.529l4.475-5.817-18.793-4.026-20.136-13.871,6.712-14.767h18.346l21.925-38.033H413.1L423.4,364.9h6.711s4.475,16.258,17.451,18.5c2.685,8.054,3.132,10.292,3.132,10.292l-5.817.447Z" transform="translate(-107.341 -15.033)" fill="#e8e5e0"/>
                            </g>
                            </g>
                            <text data-name="Newcastle/Northumbria" transform="translate(477.119 1558.246)" fill="#0e1111" font-size="12" font-family="BeVietnamPro-Regular, Be Vietnam Pro"><tspan x="0" y="12">Newcastle/</tspan><tspan x="0" y="27.6">Northumbria</tspan></text>
                            <text transform="translate(506.119 1602.746)" fill="#0e1111" font-size="12" font-family="BeVietnamPro-Regular, Be Vietnam Pro"><tspan x="0" y="12">Durham</tspan></text>
                            <text transform="translate(592.119 1584.746)" fill="#0e1111" font-size="12" font-family="BeVietnamPro-Regular, Be Vietnam Pro"><tspan x="0" y="12">Sunderland</tspan></text>
                            <ellipse data-name="Ellipse 32" cx="5.5" cy="6" rx="5.5" ry="6" transform="translate(558.119 1576.746)" fill="#33366b"/>
                            <circle data-name="Ellipse 33" cx="6" cy="6" r="6" transform="translate(576.119 1587.746)" fill="#33366b"/>
                            <circle data-name="Ellipse 34" cx="6" cy="6" r="6" transform="translate(560.119 1603.746)" fill="#33366b"/>
                        </g>
                        </svg>


                    </div>
                    <div class="slides swiper university-swiper">
                        <div class="slides-container swiper-wrapper">

                            <?php foreach($settings['universities'] as $university) : ?>
                            <div class="slide swiper-slide">
                                <h3><?= $university['university_title']; ?></h3>
                                <?= $university['university_content']; ?>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="slide-navigation">
                            <div class="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55.409" height="24.819" viewBox="0 0 55.409 24.819">
                                <g data-name="Group 158" transform="translate(2039.409 -1101.591) rotate(90)">
                                    <line y2="53" transform="translate(1114 1985)" fill="none" stroke-linecap="round" stroke-width="2"/>
                                    <line x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke-linecap="round" stroke-width="2"/>
                                    <line x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke-linecap="round" stroke-width="2"/>
                                </g>
                            </svg>

                            </div>
                            <div class="pagination"></div>
                            <div class="next ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55.409" height="24.819" viewBox="0 0 55.409 24.819">
                                <g  data-name="Group 157" transform="translate(-1984 1126.409) rotate(-90)">
                                    <line y2="53" transform="translate(1114 1985)" fill="none" stroke-linecap="round" stroke-width="2"/>
                                    <line x2="11" y2="13" transform="translate(1103 2025)" fill="none" stroke-linecap="round" stroke-width="2"/>
                                    <line x1="11" y2="13" transform="translate(1114 2025)" fill="none" stroke-linecap="round" stroke-width="2"/>
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

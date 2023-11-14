<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Team_Members extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_team_members';
    }

    public function get_title() {
        return esc_html__('Team Members', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['team', 'members'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-team-members">

                <div class="swiper team-members-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide team-member">
                            <div class="front">
                                <h4>John Davidson</h4>
                                <p>C.E.O</p>

                                <div class="image">

                                </div>
                            </div>
                            <div class="bio">
                            </div>
                            <div class="bio-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48">
                                    <g transform="translate(0 -0.446)">
                                        <g transform="translate(0 0.446)" fill="none" stroke="#fff" stroke-width="2">
                                        <ellipse cx="24.5" cy="24" rx="24.5" ry="24" stroke="none"/>
                                        <ellipse cx="24.5" cy="24" rx="23.5" ry="23" fill="none"/>
                                        </g>
                                        <g transform="translate(13.312 13.255)">
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -13.5)" fill="#fff"/>
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -1.79)" fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="swiper-slide team-member">
                            <div class="front">
                                <h4>John Davidson</h4>
                                <p>C.E.O</p>

                                <div class="image">

                                </div>
                            </div>
                            <div class="bio">
                            </div>
                            <div class="bio-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48">
                                    <g transform="translate(0 -0.446)">
                                        <g transform="translate(0 0.446)" fill="none" stroke="#fff" stroke-width="2">
                                        <ellipse cx="24.5" cy="24" rx="24.5" ry="24" stroke="none"/>
                                        <ellipse cx="24.5" cy="24" rx="23.5" ry="23" fill="none"/>
                                        </g>
                                        <g transform="translate(13.312 13.255)">
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -13.5)" fill="#fff"/>
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -1.79)" fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="swiper-slide team-member">
                            <div class="front">
                                <h4>John Davidson</h4>
                                <p>C.E.O</p>

                                <div class="image">

                                </div>
                            </div>
                            <div class="bio">
                            </div>
                            <div class="bio-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48">
                                    <g transform="translate(0 -0.446)">
                                        <g transform="translate(0 0.446)" fill="none" stroke="#fff" stroke-width="2">
                                        <ellipse cx="24.5" cy="24" rx="24.5" ry="24" stroke="none"/>
                                        <ellipse cx="24.5" cy="24" rx="23.5" ry="23" fill="none"/>
                                        </g>
                                        <g transform="translate(13.312 13.255)">
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -13.5)" fill="#fff"/>
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -1.79)" fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="swiper-slide team-member">
                            <div class="front">
                                <h4>John Davidson</h4>
                                <p>C.E.O</p>

                                <div class="image">

                                </div>
                            </div>
                            <div class="bio">
                            </div>
                            <div class="bio-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48">
                                    <g transform="translate(0 -0.446)">
                                        <g transform="translate(0 0.446)" fill="none" stroke="#fff" stroke-width="2">
                                        <ellipse cx="24.5" cy="24" rx="24.5" ry="24" stroke="none"/>
                                        <ellipse cx="24.5" cy="24" rx="23.5" ry="23" fill="none"/>
                                        </g>
                                        <g transform="translate(13.312 13.255)">
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -13.5)" fill="#fff"/>
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -1.79)" fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="swiper-slide team-member">
                            <div class="front">
                                <h4>John Davidson</h4>
                                <p>C.E.O</p>

                                <div class="image">

                                </div>
                            </div>
                            <div class="bio">
                            </div>
                            <div class="bio-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48">
                                    <g transform="translate(0 -0.446)">
                                        <g transform="translate(0 0.446)" fill="none" stroke="#fff" stroke-width="2">
                                        <ellipse cx="24.5" cy="24" rx="24.5" ry="24" stroke="none"/>
                                        <ellipse cx="24.5" cy="24" rx="23.5" ry="23" fill="none"/>
                                        </g>
                                        <g transform="translate(13.312 13.255)">
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -13.5)" fill="#fff"/>
                                        <path d="M6,13.5H28.482v2.81H6Zm0,5.621H20.052v2.81H6Z" transform="translate(-6 -1.79)" fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="swiper-btns">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <!-- TODO Swiper Wrapper -->
              
            </div>
        <?php
    }

}
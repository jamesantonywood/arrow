<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Custom_Navigation extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_custom_navigation';
    }

    public function get_title() {
        return esc_html__('Custom Navigation', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-nav-menu';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['custom', 'navigation'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    public function get_script_depends() {
        return ['c12-widget-scripts'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-custom-navigation">
                <!-- <div class="call-to-action"></div> OPTIONAL -->
                <nav>
                    <div class="site-logo">
                        <?= get_custom_logo(); ?>
                    </div>
                    <div class="menu">
                        <?= wp_nav_menu(array( 'menu' => 'main menu')); ?>
                        <div class="donate-btn">
                            <!-- TODO DONATE URL IN SITE SETTINGS -->
                            <a href="#">
                            <svg class="donate-svg" xmlns="http://www.w3.org/2000/svg" width="30.147" height="30.593" viewBox="0 0 30.147 30.593">
                                <g transform="translate(-93.23 -7678.488)">
                                    <g class="bg" transform="translate(93.23 7678.488)">
                                        <path data-name="Path 37" d="M32.249,13.512c-.208,2.309-.167,4.433-.58,6.571-.98,5.079-6.018,9.79-11.038,10.561A18.042,18.042,0,0,1,8.107,28.389,11.044,11.044,0,0,1,2.9,21C1.809,15.95,1.809,10.879,4.1,6.151A10.059,10.059,0,0,1,11.36.835C16.511-.318,21.537.621,26.449,2.078a7.652,7.652,0,0,1,5.631,6.9A18.068,18.068,0,0,1,32.249,13.512Z" transform="translate(-2.191 -0.319)"/>
                                    </g>
                                    <path class="heart" d="M7.7,2A4.278,4.278,0,0,1,11.765.07a4.126,4.126,0,0,1,4.052,4.12,5.2,5.2,0,0,1-.722,3.19c-.4.647-.857,1.257-1.309,1.869-.781,1.059-1.6,2.091-2.358,3.166a10.04,10.04,0,0,0-.808,1.524c-.28.594-.493.7-1.07.388-1.46-.794-2.919-1.59-4.359-2.418a13.387,13.387,0,0,1-3.127-2.5A7.208,7.208,0,0,1,.026,3.715,4.266,4.266,0,0,1,1.421.787,2.763,2.763,0,0,1,2.955.05,4.809,4.809,0,0,1,7.141,1.413C7.321,1.589,7.486,1.78,7.7,2Z" transform="translate(100.386 7686.535)" fill="#eb8691"/>
                                </g>
                            </svg>
                            </a>

                            <div class="donate-flag">
                                donate
                                <svg xmlns="http://www.w3.org/2000/svg" width="58.795" height="56.174" viewBox="0 0 58.795 56.174">
                                    <path d="M526.651,8.326c-.123-.858-1.706-6.248-3.741-8.016A1.908,1.908,0,0,0,520.3.881c-1.119,1.4-2.187,2.843-3.277,4.267-.472.822-1.606,1.524-1.38,2.568A1.187,1.187,0,0,0,517.791,8c1.3-1.653,2.467-3.3,3.55-4.65a89.843,89.843,0,0,1-3.274,14.789c-1.433,4.482-2.61,8.2-5.528,11.13a14.638,14.638,0,0,1-6.565,3.938,7.033,7.033,0,0,0-1.7-5.856,3.106,3.106,0,0,0-4.845-.093A5.766,5.766,0,0,0,498.1,30.8a4.582,4.582,0,0,0,1.81,4.173,6.576,6.576,0,0,0,3.287.739c-3.18,5.827-11.868,9.634-18.53,9.943a40.948,40.948,0,0,1-7.125-.1c-.044-.005-.089-.011-.133-.012.514.086-.238-.035-.675-.085a1.227,1.227,0,0,0-.439-.019.848.848,0,0,0-.64.371.982.982,0,0,0,.51,1.541c.338.071.674.15,1.015.208a27.6,27.6,0,0,0,5.126.452,28.943,28.943,0,0,0,17.731-5.852,16.342,16.342,0,0,0,5.279-6.611,16.075,16.075,0,0,0,9.76-6.227c2.746-3.729,3.913-8.324,5.19-12.706a77.094,77.094,0,0,0,2.517-12.373c.631,1.281,1.3,2.847,1.842,3.96.26.464.161.378.346.668a.966.966,0,0,0,.383.452.888.888,0,0,0,1.294-.994m-22.5,25.2a10.615,10.615,0,0,1-1.372.024c-1.612-.079-2.106-.461-2.537-1.687-.341-1.5.415-3.57,1.336-3.767,1.294-.658,3.372,2.6,2.573,5.43" transform="matrix(0.985, -0.174, 0.174, 0.985, -468.227, 91.455)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="hamburger hamburger--spin">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </div>
                </nav>

                <nav class="sticky-menu">
                    <div class="menu">
                        <div class="menu-inner">
                            <?= wp_nav_menu(array( 'menu' => 'main menu')); ?>
                            <div class="donate-btn">
                                <a href="#">
                                    <svg class="donate-svg" xmlns="http://www.w3.org/2000/svg" width="30.147" height="30.593" viewBox="0 0 30.147 30.593">
                                        <g transform="translate(-93.23 -7678.488)">
                                            <g class="bg" transform="translate(93.23 7678.488)">
                                                <path data-name="Path 37" d="M32.249,13.512c-.208,2.309-.167,4.433-.58,6.571-.98,5.079-6.018,9.79-11.038,10.561A18.042,18.042,0,0,1,8.107,28.389,11.044,11.044,0,0,1,2.9,21C1.809,15.95,1.809,10.879,4.1,6.151A10.059,10.059,0,0,1,11.36.835C16.511-.318,21.537.621,26.449,2.078a7.652,7.652,0,0,1,5.631,6.9A18.068,18.068,0,0,1,32.249,13.512Z" transform="translate(-2.191 -0.319)"/>
                                            </g>
                                            <path class="heart" d="M7.7,2A4.278,4.278,0,0,1,11.765.07a4.126,4.126,0,0,1,4.052,4.12,5.2,5.2,0,0,1-.722,3.19c-.4.647-.857,1.257-1.309,1.869-.781,1.059-1.6,2.091-2.358,3.166a10.04,10.04,0,0,0-.808,1.524c-.28.594-.493.7-1.07.388-1.46-.794-2.919-1.59-4.359-2.418a13.387,13.387,0,0,1-3.127-2.5A7.208,7.208,0,0,1,.026,3.715,4.266,4.266,0,0,1,1.421.787,2.763,2.763,0,0,1,2.955.05,4.809,4.809,0,0,1,7.141,1.413C7.321,1.589,7.486,1.78,7.7,2Z" transform="translate(100.386 7686.535)" fill="#eb8691"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                
            </div>
        <?php
    }

}
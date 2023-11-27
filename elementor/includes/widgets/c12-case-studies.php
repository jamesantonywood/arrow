<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Case_Studies extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_case_studies';
    }

    public function get_title() {
        return esc_html__('Case Studies', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['case', 'studies'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-case-studies">
                <div class="case-studies">
                    <!-- foreach case study -->
                        <div class="case-study">
                            <div class="main">
                                <!-- TODO: If no logo replace with name -->
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>
                    <!-- end -->


                    <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>

                        <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>
                        <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>

                        <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>

                        <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>

                        <div class="case-study">
                            <div class="main">
                                <div class="logo"><img src="/wp-content/uploads/2023/11/placeholder-logo.png" alt=""></div>
                                <h2>Growing a better tomorrow with vertical farming</h2>
                                <p>Newcastle upon Tyne</p>
                                <a href="#">Read case study</a>
                            </div>
                            <div class="categories">
                                <span class="cat">Agriculture</span>
                                <span class="cat">Environmental Science</span>
                                <span class="cat">Sustainability</span>
                                <span class="cat">Scientific Insights</span>
                            </div>
                        </div>



                </div>
            </div>
        <?php
    }

}
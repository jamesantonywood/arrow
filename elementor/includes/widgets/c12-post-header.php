<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Post_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_post_header';
    }

    public function get_title() {
        return esc_html__('Post Header', 'c12-elementor-plugin');
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
        
    }
 

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-simple-page-header c12-post-header">
                <div class="inner">
                    <p><?= get_the_date('j F Y'); ?></p>
                    <h1><?= the_title(); ?></h1>
                    <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );
                    ?>
                    <ul class="categories">
                    <?php foreach ($categories as $category) : ?>
                        <li class="cat"><?= $category->name; ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php
    }

}
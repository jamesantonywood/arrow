<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Archive_Filter extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_archive_filter';
    }

    public function get_title() {
        return esc_html__('Archive Filter', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['archive', 'filter'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }
    

 

    protected function render() {
        $settings = $this->get_settings_for_display();
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );
        ?>
            <div class="c12-widget c12-archive-sidebar">
                <div class="filter-group">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <?php foreach($categories as $category) : ?>
                            <li class="cat active"><a href="<?= get_category_link( $category->term_id ); ?>"><?= $category->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="filter-group">
                    <h3>Archives</h3>
                    <ul>
                    <?php wp_get_archives(array(
                        'show_post_count' => true,
                    )); ?>
                    </ul>
                </div>
            </div>
        <?php
    }
}
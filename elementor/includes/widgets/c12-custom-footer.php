<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Custom_Footer extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_custom_footer';
    }

    public function get_title() {
        return esc_html__('Custom Footer', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-footer';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['custom', 'footer'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-custom-footer">
                <div class="site-logo">
                    <a href="/" class="custom-logo-link" rel="home" aria-current="page">
                        <img width="1139" height="184" src="/wp-content/uploads/2023/11/Arrow-logo-white.png" class="custom-logo" alt="Arrow Innovation" decoding="async" sizes="(max-width: 1139px) 100vw, 1139px">
                    </a>
                    <div class="arrow-container">
                        <div class="arrow-arm"></div>
                        <div class="arrow-arm top-arm"></div>
                    </div>
                </div>
                <div class="footer-navigation">
                    <div class="main">
                        <nav>
                            <h4>About</h4>
                            <?= wp_nav_menu(array('menu' => 'footer-menu-1')); ?></nav>
                        <nav>
                            <h4>How it works</h4>
                            <?= wp_nav_menu(array('menu' => 'footer-menu-2')); ?></nav>
                        <nav>
                            <h4>News</h4>

                            <?php $news_posts = get_posts([
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'orderby' => 'ID',
                                'order' => 'ASC'
                            ]); ?>
                            <?php if ($news_posts) : ?>
                            <div class="posts">
                                <?php foreach($news_posts as $post) : ?>
                                    <div class="post">
                                        <p><?= get_the_date('j F Y', $post->ID); ?></p>
                                        <h5><a href="<?= get_the_permalink($post->ID); ?>"><?= get_the_title($post->ID); ?></a></h5>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>


                    </div>
                    <div class="secondary">
                        <nav><?= wp_nav_menu(array('menu' => 'footer-secondary-menu')); ?></nav>
                        <p class="copyright">&copy;<?= date('Y'); ?> Newcastle University</p>
                    </div>
                </div>
            </div>
        <?php
    }

}

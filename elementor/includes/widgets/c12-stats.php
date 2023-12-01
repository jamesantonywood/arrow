<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class C12_Stats extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_stats';
    }

    public function get_title() {
        return esc_html__('Stats', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-number-field';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['stats'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {

    }

    protected function render() {

        $facts = get_posts([
            'post_type' => 'global-fact',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'ASC'
        ]);

        $settings = $this->get_settings_for_display();
        ?>
            <div class="c12-widget c12-stats">
            <div class="slides swiper facts-swiper">
                <div class="slides-container swiper-wrapper">

                <?php
                foreach ($facts as $fact) {
                    $theme = get_field('theme', $fact->ID);
                    $text_prefix = get_field('text_prefix', $fact->ID);
                    $value = get_field('value', $fact->ID);
                    $text_postfix = get_field('text_postfix', $fact->ID);

                    $theme_path = sprintf("../../assets/img/numbers/%s/%s_", $theme, $theme);
                    ?>
                    <div class="slide swiper-slide stat">
                        <?php
                        if ($text_prefix) {
                        ?>
                        <div class="text">
                            <span><?=$text_prefix?></span>
                        </div>
                        <?php } ?>
                        <div class="number" data-color="<?=$theme?>">
                            <!-- Javascript span-ify and replace with images - unsure weather to store these as plugin assets... might be for the best rather than clogging media library... -->
                            <?php
                            foreach (str_split($value) as $char) {
                                // check if $char is numeric character
                                if (is_numeric($char)) {
                                ?>
                                    <img src="<?= plugins_url($theme_path.$char.".png", __FILE__); ?>">
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <?php
                        if ($text_postfix) {
                            ?>
                            <div class="text">
                                <span><?=$text_postfix?></span>
                            </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="pagination navigation"></div>
<!--                <div class="navigation">-->
<!--                    --><?php
//                    foreach ($facts as $fact) { ?>
<!--                    <span class="dot dot_--><?php //=get_field('theme', $fact->ID)?><!--"></span>-->
<!--                    --><?php //} ?>
<!--                </div>-->
            </div>
        <?php
    }

}

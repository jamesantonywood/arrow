<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class C12_Key_People extends \Elementor\Widget_Base {

    public function get_name() {
        return 'c12_key_people';
    }

    public function get_title() {
        return esc_html__('Key People', 'c12-elementor-plugin');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return ['c12-widgets'];
    }

    public function get_keywords() {
        return ['simple', 'text'];
    }

    public function get_style_depends() {
        return ['c12-widget-styles'];
    }

    protected function register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $people = get_field('people');
        ?>
            <div class="c12-widget c12-key-people <?php if (!$people) {echo 'no-people';}?>">
                <?php if ($people) : ?>
                    <?php foreach($people as $person) : ?>
                    <div class="person">
                        <div class="credit">
                            <div class="image">
                                <?php if(!empty($person['headshot'])) : ?>
                                    <img src="<?= $person['headshot']['url'] ?>">     
                                <?php else : ?>
                                    <?= file_get_contents(plugins_url('../../assets/img/icons/sillouhette.svg', __FILE__)); ?>
                                <?php endif; ?>

                            </div>
                            <div class="content">
                                <h5><?= $person['name']; ?></h5>
                                <p><?= $person['location_role']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php else : ?>
                    <div class="image">
                        <img src="<?= get_field('fallback_image')['url'] ? get_field('fallback_image')['url'] : ''; ?>" alt="">
                    </div>
               <?php endif; ?>
            </div>
        <?php
    }

}
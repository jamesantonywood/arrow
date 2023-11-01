<?php

/**
 * The class responsible for defining all actions that occur within and extend Elementor
 *
 * @link       https://curious12.com
 * @since      1.0.0
 *
 * @package    C12_Elementor_Plugin
 * @subpackage C12_Elementor_Plugin/elementor
 */

/**
 * The class responsible for defining all actions that occur within and extend Elementor
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    C12_Elementor_Plugin
 * @subpackage C12_Elementor_Plugin/elementor
 * @author     Curious12 <info@curious12.com>
 */


class C12_Elementor_Plugin_Elementor {

    /**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

    /**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

    /**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

    /**
     * Register and reorder the Widgets so C12 widgets are at the top of Elementors sidebar
     */
    public function register_categories( $elements_manager ) {
        //add our categories
        $category_prefix = 'c12-';
        $elements_manager->add_category(
            $category_prefix . 'widgets',
            [
                'title' => 'Curious12 Widgets',
                'icon' => 'fa fa-plug',
            ]
        );
        //hack into the private $categories member, and reorder it so our stuff is at the top
        $reorder_cats = function() use($category_prefix) {
            uksort($this->categories, function($keyOne, $keyTwo) use($category_prefix) {
                if(substr($keyOne, 0, 4) == $category_prefix) {
                    return -1;
                }
                if(substr($keyTwo, 0, 4) == $category_prefix) {
                    return 1;
                }
                return 0;
            });
        };
        $reorder_cats->call($elements_manager);
    }

    /**
	 * Register all of C12s Custom Widgets
	 */
    public function register_widgets( $widgets_manager ) {
        require_once(__DIR__ . '/includes/widgets/page-header.php');
        $widgets_manager->register( new \C12_Page_Header() );

        require_once(__DIR__ . '/includes/widgets/decorated-video.php');
        $widgets_manager->register( new \C12_Decorated_Video() );

        require_once(__DIR__ . '/includes/widgets/accreditation-logos.php');
        $widgets_manager->register( new \C12_Accreditation_Logos() );

    }

    public function register_controls() {

    }

    // TODO: Solution for this
    // !! This needs to be better - I think it would be best to have a single css file loaded and compiled via sass. 
    // Same Idea with handling scripts I don't like the idea of individually loading everything.
    public function register_styles() {
        // Widget Specific Styles
        wp_register_style( 'c12-page-header-styles', plugins_url( '/assets/css/page-header.css', __FILE__ ) );
        wp_register_style( 'c12-decorated-video-styles', plugins_url( '/assets/css/decorated-video.css', __FILE__ ) );
    }

}













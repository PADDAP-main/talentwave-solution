<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://paddap.nl
 * @since      1.0.0
 *
 * @package    Talentwave_Solution
 * @subpackage Talentwave_Solution/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Talentwave_Solution
 * @subpackage Talentwave_Solution/admin
 * @author     PADDAP <development@paddap.nl>
 */
class Talentwave_Solution_Admin {

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

		add_action( 'admin_menu', [ $this, 'add_plugin_admin_menu' ], 9 );

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Talentwave_Solution_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Talentwave_Solution_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/talentwave-solution-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Talentwave_Solution_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Talentwave_Solution_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/talentwave-solution-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_plugin_admin_menu() {
		add_menu_page( $this->plugin_name, 'AI generator', 'administrator', $this->plugin_name,
			array( $this, 'display_plugin_admin_dashboard' ), 'dashicons-superhero-alt', 26 );
	}
	
	public function display_plugin_admin_dashboard() {
		// Creating an instance
		echo '<script>window.location = "'. get_permalink(520) .'"</script>';
	}

}

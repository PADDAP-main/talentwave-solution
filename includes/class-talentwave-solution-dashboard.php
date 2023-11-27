<?php

class Talenwave_Solution_Dashboard {

	protected $capability = 'read';

	protected $title;

	public function __construct() {
		if ( is_admin() ) {
			add_action( 'init', array( $this, 'init' ) );
		}
	}

	public function init() {
		$this->set_title();
		add_filter( 'admin_title', array( $this, 'admin_title' ), 10, 2 );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'current_screen', array( $this, 'current_screen' ) );
	}

	/**
	 * Sets the page title for your custom dashboard
	 */
	function set_title() {
		if ( ! isset( $this->title ) ) {
			$this->title = __( 'Dashboard' );
		}
	}

	/**
	 * Output the content for your custom dashboard
	 */
	function page_content() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/talentwave-solution-dashboard-display.php';
	}

	/**
	 * Fixes the page title in the browser.
	 *
	 * @param string $admin_title
	 * @param string $title
	 *
	 * @return string $admin_title
	 */
	public function admin_title( $admin_title, $title ) {
		global $pagenow;
		if ( 'admin.php' == $pagenow && isset( $_GET['page'] ) && 'talentwave-dashboard' == $_GET['page'] ) {
			$admin_title = $this->title . $admin_title;
		}

		return $admin_title;
	}

	public function admin_menu() {

		/**
		 * Adds a custom page to WordPress
		 */
		add_menu_page( $this->title, '', $this->capability, 'talentwave-dashboard', array( $this, 'page_content' ) );

		/**
		 * Remove the custom page from the admin menu
		 */
		remove_menu_page( 'talentwave-dashboard' );

		/**
		 * Make dashboard menu item the active item
		 */
		global $parent_file, $submenu_file;
		$parent_file  = 'index.php';
		$submenu_file = 'index.php';

		/**
		 * Rename the dashboard menu item
		 */
		global $menu;
		$menu[2][0] = $this->title;

		/**
		 * Rename the dashboard submenu item
		 */
		global $submenu;
		$submenu['index.php'][0][0] = $this->title;

	}

	/**
	 * Redirect users from the normal dashboard to your custom dashboard
	 */
	public function current_screen( $screen ) {
		if ( 'dashboard' == $screen->id ) {
			wp_safe_redirect( admin_url( 'admin.php?page=talentwave-dashboard' ) );
			exit;
		}
	}

}
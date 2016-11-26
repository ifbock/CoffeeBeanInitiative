<?php
class Themify_Plugin_Updater {

	var $args = array();

	function __construct( $args = array() ) {
		$this->args = $args;
		$this->args['name'] = trim( dirname( $this->args['base_name'] ), '/' );
		$this->args['nicename'] = str_replace( '-', '_', $this->args['name'] );

		// Run this after the admin has been initialized so they appear as standard WordPress notices.
		if ( isset( $_GET['page'] ) && $_GET['page'] == $this->args['admin_page'] ) {
			add_action( 'admin_notices', array( $this, 'check_version' ), 3 );
			add_action( 'admin_enqueue_scripts', array( $this, 'register_updater_assets' ) );
		}
		if ( isset( $_GET['action'] ) && 'upgrade' == $_GET['action'] ) {
			add_action( 'admin_menu', array( $this, 'add_update_page' ) );
		}

		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			delete_transient( $this->args['nicename'] . '_new_update');
			delete_transient( $this->args['nicename'] . '_check_update');
		}
		
		add_filter( 'update_plugin_complete_actions', array( $this, 'upgrade_complete' ), 10, 2 );
	}

	function add_update_page(){
 		add_menu_page( $this->args['plugin_data']['Name'], $this->args['plugin_data']['Name'], 'manage_options', $this->args['nicename'] . '_update', array( $this, 'do_update_page') );
 	}

	function do_update_page() {
		$this->update();
	}

	/**
	 * Set transient saving the current date and time of last version checking
	 */
	function set_update(){
		$current = new stdClass();
		$current->lastChecked = time();
		set_transient(  $this->args['nicename'] . '_check_update', $current );
	}

	/**
	 * Get remote version from server
	 * @param string $name
	 */
	function get_remote_plugin_version( $name ) {
		$xml = new DOMDocument;
		$versions_url = 'http://themify.me/versions/versions.xml';
		$response = wp_remote_get( $versions_url );
		if ( is_wp_error( $response ) ) {
			return;
		}

		$body = trim( wp_remote_retrieve_body( $response ) );
		$xml->loadXML($body);
		$xml->preserveWhiteSpace = false;
		$xml->formatOutput = true;
		$xpath = new DOMXPath($xml);
		$query = "//version[@name='".$name."']";
		$version = '';

		$elements = $xpath->query($query);

		if ( $elements->length ) {
			foreach ($elements as $field) {
				$version = $field->nodeValue;
			}
		}
		return $version;
	}

	/**
	 * Check for new update
	 */
	function check_version() {
		$notifications = '<style type="text/css">.notifications p.update {background: #F9F2C6;border: 1px solid #F2DE5B;} .notifications p{width: 765px;margin: 15px 0 0 5px;padding: 10px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}</style>';
		$version = $this->args['plugin_data']['Version'];

		// Check update transient
		$current = get_transient( $this->args['nicename'] . '_check_update'); // get last check transient
		$timeout = 60;
		$time_not_changed = isset( $current->lastChecked ) && $timeout > ( time() - $current->lastChecked );
		$newUpdate = get_transient( $this->args['nicename'] . '_new_update'); // get new update transient

		if ( is_object( $newUpdate ) && $time_not_changed ) {
			if ( version_compare( $version, $newUpdate->version, '<') ) {
				$notifications .= sprintf( __('<p class="update">%s version %s is now available. <a href="%s" class="%s">Update now</a> or view the <a href="http://themify.me/changelogs/%s.txt" class="themify-changelogs" target="_blank" data-changelog="http://themify.me/changelogs/%s.txt">change log</a> for details.</p>', 'themify'),
					$this->args['plugin_data']['Name'],
					$newUpdate->version,
					add_query_arg( array( 'page' => $this->args['nicename'] . '_update', 'action' => 'upgrade' ), admin_url( 'admin.php' ) ),
					$this->args['name'] . '-upgrade-plugin themify-upgrade-plugin',
					$this->args['name'],
					$this->args['name']
				);
				echo '<div class="notifications">'. $notifications . '</div>';
			}
			return;
		}

		// get remote version
		$remote_version = $this->get_remote_plugin_version( $this->args['name'] );

		// delete update checker transient
		delete_transient(  $this->args['nicename'] . '_check_update' );

		$new = new stdClass();
		$new->version = $remote_version;

		if ( version_compare( $version, $remote_version, '<' ) ) {
			set_transient(  $this->args['nicename'] . '_new_update', $new );
			$notifications .= sprintf( __('<p class="update">%s version %s is now available. <a href="%s" class="%s">Update now</a> or view the <a href="http://themify.me/changelogs/%s.txt" class="themify-changelogs" target="_blank" data-changelog="http://themify.me/changelogs/%s.txt">change log</a> for details.</p>', 'themify'),
				$this->args['plugin_data']['Name'],
				$new->version,
				add_query_arg( array( 'page' => $this->args['nicename'] . '_update', 'action' => 'upgrade' ), admin_url( 'admin.php' ) ),
				$this->args['name'] . '-upgrade-plugin themify-upgrade-plugin',
				$this->args['name'],
				$this->args['name']
			);
		}

		// update transient
		$this->set_update();

		wp_enqueue_style( 'themify-plugin-updater' );
		wp_enqueue_script( 'themify-plugin-updater' );
		echo '<div class="notifications">'. $notifications . '</div>';
	}

	/**
	 * Register CSS and JS for updater.
	 */
	function register_updater_assets() {
		wp_register_style( 'themify-plugin-updater', $this->args['base_url'] . 'updater/themify-plugin-updater.css' );
		wp_register_script( 'themify-plugin-updater', $this->args['base_url'] . 'updater/themify-plugin-updater.js', array( 'jquery' ) );
		wp_localize_script( 'themify-plugin-updater', 'themify_plugin_updater', array(
			'confirmUpdate' => __( 'Make sure to backup before upgrading. Do you want to proceed now?', 'themify' ),
		)
	);
	}

	/**
	 * Check if update available
	 */
	function is_update_available() {
		$version = $this->args['plugin_data']['Version'];
		$newUpdate = get_transient( $this->args['nicename'] . '_new_update'); // get new update transient

		if ( false === $newUpdate ) {
			$new_version = $this->get_remote_plugin_version( $this->args['name'] );
		} else {
			$new_version = $newUpdate->version;
		}

		if ( version_compare( $version, $new_version, '<') ) {
			return true;
		} else {
			false;
		}
	}

	/**
	 * Initialize update process
	 */
	function update() {
		
		// check version
		if ( ! $this->is_update_available() ) {
			_e('The plugin is at the latest version.', 'themify');
			die();
		}

		//are we going to update a theme?
		$url = "http://themify.me/files/{$this->args['name']}/{$this->args['name']}.zip";
		
		//remote request is executed after all args have been set
		include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

		if ( ! class_exists( 'Themify_Plugin_Upgrader' ) ) {
			require_once $this->args['base_path'] . 'updater/class-themify-plugin-upgrader.php';
		}

		$upgrader = new Themify_Plugin_Upgrader( new Plugin_Upgrader_Skin(
			array(
				'plugin' => $this->args['base_name'],
				'title' => sprintf( __( 'Update %s', 'themify' ), $this->args['plugin_data']['Name'] ),
			)
		));
		$response_cookies = ( isset( $response ) && isset( $response['cookies'] ) ) ? $response['cookies'] : '';
		$upgrader->upgrade( $this->args['base_name'], $url, $response_cookies );

		//if we got this far, everything went ok!	
		die();
	}

	function upgrade_complete($update_actions, $plugin) {
		if ( $plugin == $this->args['base_name'] ) {
			if ( isset( $update_actions['themes_page'] ) ) {
				unset( $update_actions['themes_page'] );
			}
			if ( isset( $update_actions['themify_complete'] ) ) {
				unset( $update_actions['themify_complete'] );
			}
			$update_actions['plugins_page'] = '<a href="' . add_query_arg( array( 'page' => $this->args['admin_page'] ), self_admin_url( 'admin.php' ) ) . '" title="' . sprintf( __('Return to %s Settings', 'themify'), $this->args['plugin_data']['Name'] ) . '" target="_parent">' . sprintf( __('Return to %s Settings', 'themify'), $this->args['plugin_data']['Name'] ) . '</a>';
		}
		return $update_actions;
	}
}
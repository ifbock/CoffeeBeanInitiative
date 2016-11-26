<?php
/**
 * Appearance Tab for Themify Custom Panel
 *
 * @since 1.0.0
 *
 * @return array
 */
function themify_theme_event_appearance_meta_box() {
	return array(
		// Header Design
		array(
			'name'        => 'header_design',
			'title'       => __( 'Header Design', 'themify' ),
			'description' => '',
			'type'        => 'layout',
			'show_title'  => true,
			'meta'        => array(
				array(
					'value' => 'default',
					'img'   => 'images/layout-icons/default.png',
					'title' => __( 'Header Horizontal', 'themify' ),
					'selected' => true,
				),
				array(
					'value' => 'header-horizontal',
					'img'   => 'images/layout-icons/header-horizontal.png',
					'title' => __( 'Header Horizontal', 'themify' ),
				),
				array(
					'value' => 'header-block',
					'img'   => 'images/layout-icons/header-block.png',
					'title' => __( 'Header Block', 'themify' ),
				),
				array(
					'value' => 'none',
					'img'   => 'images/layout-icons/none.png',
					'title' => __( 'No Header ', 'themify' ),
				)
			),
			'hide'		  => 'none',
		),
         // Sticky Header
        array(
            'name'        => 'fixed_header',
            'title'       => __( 'Sticky Header', 'themify' ),
            'description' => '',
            'type'        => 'dropdown',
            'meta'        => array(
                array( 'value' => 'default', 'name' => '', 'selected' => true ),
                array( 'value' => 'yes', 'name' => __( 'Yes', 'themify' ) ),
                array( 'value' => 'no', 'name' => __( 'No', 'themify' ) )
            ),
			'class'     => 'hide-if none',
        ),
        // Header Elements
		array(
			'name' 	=> '_multi_header_elements',
			'title' => __('Header Elements', 'themify'),
			'description' => '',
			'type' 	=> 'multi',
			'class' => 'hide-if none',
			'meta'	=> array(
				'fields' => array(
					// Show Site Logo
					array(
						'name' 	=> 'exclude_site_logo',
						'description' => '',
						'title' => __( 'Show Site Logo', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
					// Show Site Tagline
					array(
						'name' 	=> 'exclude_site_tagline',
						'description' => '',
						'title' => __( 'Show Site Tagline', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
					// Show Search Form
					array(
						'name' 	=> 'exclude_search_form',
						'description' => '',
						'title' => __( 'Show Search Form', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
					// Show RSS Link
					array(
						'name' 	=> 'exclude_rss',
						'description' => '',
						'title' => __( 'Show RSS Link', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
					// Show Social Widget
					array(
						'name' 	=> 'exclude_social_widget',
						'description' => '',
						'title' => __( 'Show Social Widget', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
					// Show Menu Navigation
					array(
						'name' 	=> 'exclude_menu_navigation',
						'description' => '',
						'title' => __( 'Show Menu Navigation', 'themify' ),
						'type' 	=> 'dropdownbutton',
						'states' => themify_ternary_states( array(
							'icon_no' => THEMIFY_URI . '/img/ddbtn-check.png',
							'icon_yes' => THEMIFY_URI . '/img/ddbtn-cross.png',
							) ),
						'class' => 'hide-if none',
						'after' => '<div class="clear"></div>',
					),
				),
				'description' => '',
				'before' => '',
				'after' => '',
				'separator' => ''
			)
		),
		// Header Wrap
		array(
			'name'          => 'header_wrap',
			'title'         => __( 'Header Background', 'themify' ),
			'description'   => '',
			'type'          => 'radio',
			'show_title'    => true,
			'meta'          => array(
				array(
					'value'    => 'solid',
					'name'     => __( 'Solid Background', 'themify' ),
					'selected' => true
				),
				array(
					'value' => 'transparent',
					'name'  => __( 'Transparent Background', 'themify' )
				),
			),
			'enable_toggle' => true,
			'class'     => 'hide-if none',
		),
		// Background Color
		array(
			'name'        => 'background_color',
			'title'       => '',
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
			'toggle'      => 'solid-toggle',
			'class'     => 'hide-if none',
		),
		// Background image
		array(
			'name'        => 'background_image',
			'title'       => '',
			'type'        => 'image',
			'description' => '',
			'meta'        => array(),
			'before'      => '',
			'after'       => '',
			'toggle'      => 'solid-toggle',
			'class'     => 'hide-if none',
		),
		// Background repeat
		array(
			'name'        => 'background_repeat',
			'title'       => '',
			'description' => __( 'Background Repeat', 'themify' ),
			'type'        => 'dropdown',
			'meta'        => array(
				array(
					'value' => 'fullcover',
					'name'  => __( 'Fullcover', 'themify' )
				),
				array(
					'value' => 'repeat',
					'name'  => __( 'Repeat', 'themify' )
				),
				array(
					'value' => 'repeat-x',
					'name'  => __( 'Repeat horizontally', 'themify' )
				),
				array(
					'value' => 'repeat-y',
					'name'  => __( 'Repeat vertically', 'themify' )
				),
			),
			'toggle'      => 'solid-toggle',
			'class'     => 'hide-if none',
		),
		// Header wrap text color
		array(
			'name'        => 'headerwrap_text_color',
			'title'       => __( 'Header Text Color', 'themify' ),
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
			'class'     => 'hide-if none',
		),
		// Header wrap link color
		array(
			'name'        => 'headerwrap_link_color',
			'title'       => __( 'Header Link Color', 'themify' ),
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
			'class'     => 'hide-if none',
		),
		// Exclude Footer Widgets
		array(
			'name' 		=> 'exclude_footer_widgets',
			'title'		=> __('Exclude Footer Widgets', 'themify'),
			'description'	=> '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Exclude Footer
		array(
			'name' 		=> 'exclude_footer',
			'title'		=> __('Exclude Footer', 'themify'),
			'description'	=> '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
	);
}
/**
 * Event Meta Box Options
 * @param array $args
 * @return array
 * @since 1.0.0
 */
function themify_theme_event_meta_box( $args = array() ) {
	extract( $args );
	return array(
		// Layout
		array(
			'name' 		=> 'layout',
			'title' 	=> __('Sidebar Option', 'themify'),
			'description' => '',
			'type' 		=> 'layout',
			'show_title' => true,
			'meta'		=> array(
				array('value' => 'default', 'img' => 'images/layout-icons/default.png', 'title' => __('Default', 'themify')),
				array('value' => 'sidebar1', 'img' => 'images/layout-icons/sidebar1.png', 'title' => __('Sidebar Right', 'themify')),
				array('value' => 'sidebar1 sidebar-left', 'img' => 'images/layout-icons/sidebar1-left.png', 'title' => __('Sidebar Left', 'themify')),
				array('value' => 'sidebar-none', 'img' => 'images/layout-icons/sidebar-none.png', 'title' => __('No Sidebar ', 'themify'), 'selected' => true,)
			)
		),
		// Post Image
		array(
			'name' 		=> 'post_image',
			'title' 	=> __('Featured Image', 'themify'),
			'description' => '',
			'type' 		=> 'image',
			'meta'		=> array(),
		),
		// Featured Image Size
		array(
			'name'	=>	'feature_size',
			'title'	=>	__('Image Size', 'themify'),
			'description' => sprintf(__('Image sizes can be set at <a href="%s">Media Settings</a> and <a href="%s" target="_blank">Regenerated</a>.', 'themify'), 'options-media.php', 'https://wordpress.org/plugins/regenerate-thumbnails/'),
			'type'		=>	'featimgdropdown',
			'meta'		=> array(),
		),
		// Multi field: Image Dimension
		themify_image_dimensions_field(),
		// Start Date
		array(
			'name' 		=> 'start_date',
			'title' 	=> __('Event Starts On', 'themify'),
			'description' => __('Enter event start date and time.', 'themify'),
			'type' 		=> 'date',
			'meta'		=> array(
				'default' => '',
				'pick' => __( 'Pick Date', 'themify' ),
				'close' => __( 'Done', 'themify' ),
				'clear' => __( 'Clear Date', 'themify' ),
				'date_format' => '',
				'time_format' => 'HH:mm',
				'timeseparator' => ' '
			),
			'force_save' => true,
		),
		array(
			'name' 		=> 'end_date',
			'title' 	=> __('Event Ends On', 'themify'),
			'description' => __('Enter event end date and time.', 'themify'),
			'type' 		=> 'date',
			'meta'		=> array(
				'default' => '',
				'pick' => __( 'Pick Date', 'themify' ),
				'close' => __( 'Done', 'themify' ),
				'clear' => __( 'Clear Date', 'themify' ),
				'date_format' => '',
				'time_format' => 'HH:mm',
				'timeseparator' => ' '
			),
			'force_save' => true,
		),
                // Repeat date
                array(
                    'title' => __('Repeat', 'themify'),
                    'description' => '',
                    'type' => 'multi',
                    'meta' => array(
                        'fields' => array(
                            array(
                                'name' => 'repeat',
                                'label' => '',
                                'type' => 'dropdown',
                                'meta' =>array( 
                                            array(
                                                'value' => '',
                                                'selected' => true,
                                                'name' => __('None', 'themify')
                                            ),
                                            array(
                                                'value' => 'day',
                                                'name' => __('Daily', 'themify')
                                            ),
                                            array(
                                                'value' => 'week',
                                                'name' => __('Weekly', 'themify')
                                            ),
                                            array(
                                                'value' => 'year',
                                                'name' => __('Yearly', 'themify')
                                            ),
                                    )
                            ),
                            array(
                                'name' => 'repeat_x',
                                'label' => '',
                                'description' => '',
                                'type' => 'textbox',
                                'meta' => array('size' => 'small'),
                                'before' => sprintf('<span style="margin:0 5px 0 15px;">%s</span>',__('Every', 'themify')),
                                'after' => sprintf('<span style="margin-left:5px;">%s</span>',__('week', 'themify')),
                            ),
                        ),
                        'description' => '',
                        'before' => '',
                        'after' => '',
                        'separator' => ''
                    )
                ),
                // Hide end event date in the loop
		array(
			'name' 		=> 'event_end_date_hide',
			'title' 	=> __('Hide event end date on display', 'themify'),
			'type' 		=> 'checkbox',
			'meta'		=> array(),
		),
		// Location
		array(
			'name' 		=> 'location',
			'title' 	=> __('Location', 'themify'),
			'description' => __('Enter city or venue name.', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array(),
		),
		// Map Address
		array(
			'name' 		=> 'map_address',
			'title' 	=> __('Map Address', 'themify'),
			'description' => __( 'Enter full address for Google Map.', 'themify' ),
			'type' 		=> 'textarea',
			'meta'		=> array(),
		),
		// Buy Tickets
		array(
			'name' 		=> 'buy_tickets',
			'title' 		=> __('Buy Ticket Link', 'themify'),
			'description' => __('Enter link to ticket buying page.', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array(),
		),
		// Video URL
		array(
			'name' 		=> 'video_url',
			'title' 	=> __('Video URL', 'themify'),
			'description' => __('Replace Featured Image with a video embed URL such as YouTube or Vimeo video url (<a href="http://themify.me/docs/video-embeds">details</a>).', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array(),
		),
		// External Link
		array(
			'name' 		=> 'external_link',
			'title' 		=> __('External Link', 'themify'),
			'description' => __('Link Featured Image and Post Title to external URL.', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array(),
		),
		// Lightbox Link
		themify_lightbox_link_field(),
		// Custom menu
		array(
			'name'        => 'custom_menu',
			'title'       => __( 'Custom Menu', 'themify' ),
			'description' => '',
			'type'        => 'dropdown',
			// extracted from $args
			'meta'        => $args['nav_menus'],
		),
		// Separator
		array(
			'name' => 'separator_background',
			'title' => '',
			'description' => '',
			'type' => 'separator',
			'meta' => array(
				'html' => '<h4>' . __( 'Top Featured Area in Single View', 'themify' ) . '</h4><hr class="meta_fields_separator"/>'
			),
		),
		// Background Color
		array(
			'name'        => 'featured_area_background_color',
			'title'       => __( 'Background', 'themify' ),
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
		),
		// Backgroud image
		array(
			'name'        => 'featured_area_background_image',
			'title'       => '',
			'type'        => 'image',
			'description' => '',
			'meta'        => array(),
			'before'      => '',
			'after'       => ''
		),
		// Background repeat
		array(
			'name'        => 'featured_area_background_repeat',
			'title'       => '',
			'description' => __( 'Background Repeat', 'themify' ),
			'type'        => 'dropdown',
			'meta'        => array(
				array(
					'value' => '',
					'name'  => ''
				),
				array(
					'value' => 'fullcover',
					'name'  => __( 'Fullcover', 'themify' )
				),
				array(
					'value' => 'repeat',
					'name'  => __( 'Repeat', 'themify' )
				),
				array(
					'value' => 'repeat-x',
					'name'  => __( 'Repeat horizontally', 'themify' )
				),
				array(
					'value' => 'repeat-y',
					'name'  => __( 'Repeat vertically', 'themify' )
				),
			)
		),
		// Featured area text color
		array(
			'name'        => 'featured_area_text_color',
			'title'       => __( 'Text Color', 'themify' ),
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
		),
		// Featured area link color
		array(
			'name'        => 'featured_area_link_color',
			'title'       => __( 'Link Color', 'themify' ),
			'description' => '',
			'type'        => 'color',
			'meta'        => array( 'default' => null ),
		),
	);
}

/**************************************************************************************************
 * Event Class - Shortcode
 **************************************************************************************************/

if ( ! class_exists( 'Themify_Event' ) ) {

	class Themify_Event {

		var $instance = 0;
		var $atts = array();
		var $post_type = 'event';
		var $tax = 'event-category';
		var $tag = 'event-tag';
		var $taxonomies;
		var $date_time_format = 'Y-m-d H:i';
		var $slideLoader = '<div class="slideshow-slider-loader"><div class="themify-loader"><div class="themify-loader_1 themify-loader_blockG"></div><div class="themify-loader_2 themify-loader_blockG"></div><div class="themify-loader_3 themify-loader_blockG"></div></div></div>';

		function __construct( $args = array() ) {
			add_filter( 'themify_post_types', array($this, 'extend_post_types' ) );
			add_filter( 'post_class', array($this, 'remove_cpt_post_class' ), 12 );
			add_filter( 'themify_types_excluded_in_search', array( $this, 'exclude_in_search' ) );

			add_action( 'init', array( $this, 'register' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'meta_boxes_script' ) );
			add_action( 'widgets_init', array( $this, 'widget' ) );
			add_action( 'admin_init', array( $this, 'manage_and_filter' ) );
			add_action( "save_post_{$this->post_type}", array($this, 'save_post'), 100, 2 );

			add_shortcode( 'themify_' . $this->post_type . '_posts', array( $this, 'init_shortcode' ) );

			if ( $this->event_exists() ) {
				add_action( 'admin_notices', array( $this, 'data_update_notice' ), 10 );
				add_action( 'admin_init', array( $this, 'do_data_updater'), 10 );
			}
		}

		/**
		 * Register post type and taxonomy
		 */
		function register() {
			register_post_type( $this->post_type, array(
				'labels' => array(
					'name' => __('Events', 'themify'),
					'singular_name' => __('Event', 'themify'),
					'add_new' => __( 'Add New', 'themify' ),
					'add_new_item' => __( 'Add New Event', 'themify' ),
					'edit_item' => __( 'Edit Event', 'themify' ),
					'new_item' => __( 'New Event', 'themify' ),
					'view_item' => __( 'View Event', 'themify' ),
					'search_items' => __( 'Search Events', 'themify' ),
					'not_found' => __( 'No Events found', 'themify' ),
					'not_found_in_trash' => __( 'No Events found in Trash', 'themify' ),
					'menu_name' => __( 'Events', 'themify' ),
				),
				'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt', 'comments'),
				'hierarchical' => false,
				'public' => true,
				'exclude_from_search' => false,
				'query_var' => true,
				'can_export' => true,
				'capability_type' => 'post',
				'menu_icon' => 'dashicons-calendar',
			));
			register_taxonomy( $this->tax, array( $this->post_type ), array(
				'labels' => array(
					'name' => __( 'Event Categories', 'themify' ),
					'singular_name' => __( 'Event Categories', 'themify' ),
				),
				'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_tagcloud' => true,
				'hierarchical' => true,
				'rewrite' => true,
				'query_var' => true
			));
			register_taxonomy( $this->tag, array( $this->post_type ), array(
				'labels' => array(
					'name' => __( 'Event Tags', 'themify' ),
					'singular_name' => __( 'Event Tags', 'themify' ),
				),
				'public' => true,
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_tagcloud' => true,
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
			));
			if ( is_admin() ) {
				add_filter('manage_edit-'.$this->tax.'_columns', array( $this, 'taxonomy_header' ), 10, 2);
				add_filter('manage_'.$this->tax.'_custom_column', array( $this, 'taxonomy_column_id' ), 10, 3);

				add_filter('manage_edit-'.$this->tag.'_columns', array( $this, 'taxonomy_header' ), 10, 2);
				add_filter('manage_'.$this->tag.'_custom_column', array( $this, 'taxonomy_column_id' ), 10, 3);
			}
		}

		/**
		 * Loads scripts in certain admin screens.
		 *
		 * @since 1.0.9
		 */
		function meta_boxes_script() {
			$screen = get_current_screen();
			if ( $this->post_type == $screen->post_type ) {
				wp_enqueue_script( 'themify-theme-custom-panel', THEME_URI . '/js/themify-custom-panel.js', array( 'jquery' ) );
				wp_localize_script( 'themify-theme-custom-panel', 'themifyMetaBox', array(
					'validate' => array(
						'required' => '#start_date',
					),
					'required_error' => esc_html__( 'This field is required.', 'themify' ),
				) );
			}
		}

		/**
		 * Remove custom post type class.
		 * @param $classes
		 * @return mixed
		 */
		function remove_cpt_post_class( $classes ) {
			$classes = array_diff( $classes, array( $this->post_type ) );
			return $classes;
		}

		/**
		 * Show in Themify Settings module to exclude this post type in search results.
		 * @param $types
		 * @return mixed
		 */
		function exclude_in_search( $types ) {
			$types[$this->post_type] = $this->post_type;
			return $types;
		}

		/**
		 * Run on post saving.
		 * Set default taxonomy term.
		 * @param number
		 * @param object
		 */
		function save_post( $post_id, $post ) {
			if ( 'publish' === $post->post_status ) {
				// Set default term for custom taxonomy and assign to post
				$terms = wp_get_post_terms( $post_id, $this->tax );
				if ( empty( $terms ) ) {
					wp_set_object_terms( $post_id, __( 'Uncategorized', 'themify' ), $this->tax );
				}
			}
		}

		/**
		 * Display an additional column in categories list
		 * @since 1.0.0
		 */
		function taxonomy_header($cat_columns) {
			$cat_columns['cat_id'] = 'ID';
			return $cat_columns;
		}
		/**
		 * Display ID in additional column in categories list
		 * @since 1.0.0
		 */
		function taxonomy_column_id($null, $column, $termid) {
			return $termid;
		}

		/**
		 * Includes new post types registered in theme to array of post types managed by Themify
		 * @param array
		 * @return array
		 */
		function extend_post_types( $types ) {
			return array_merge( $types, array( $this->post_type ) );
		}

		/**
		 * Trigger at the end of __construct of this shortcode
		 */
		function manage_and_filter() {
			add_filter( "manage_edit-{$this->post_type}_columns", array( $this, 'type_column_header' ), 10, 2 );
			add_action( "manage_{$this->post_type}_posts_custom_column", array( $this, 'type_column' ), 10, 3 );
			global $typenow;
			if ( empty( $typenow ) && isset( $_GET['post'] ) && !empty( $_GET['post'] ) ) {
				$post = get_post( $_GET['post'] );
				$typenow = $post->post_type;
			}
			if( $typenow == $this->post_type ) {
				add_action( 'load-edit.php', array( $this, 'filter_load' ) );
				add_filter( 'post_row_actions', array( $this, 'remove_quick_edit' ), 10, 1 );
			}
		}

		/**
		 * Remove quick edit action from entries list in admin
		 * @param $actions
		 * @return mixed
		 */
		function remove_quick_edit( $actions ) {
			unset($actions['inline hide-if-no-js']);
			return $actions;
		}

		/**
		 * Display an additional column in list
		 * @param array
		 * @return array
		 */
		function type_column_header( $columns ) {
			unset( $columns['date'] );
			$columns['icon'] = __( 'Image', 'themify' );
			$columns['start'] = __( 'Start Date', 'themify' );
			$columns['shortcode'] = __( 'Shortcode', 'themify' );
			return $columns;
		}

		/**
		 * Display shortcode, type, size and color in columns in tiles list
		 * @param string $column key
		 * @param number $post_id
		 * @return string
		 */
		function type_column( $column, $post_id ) {
			switch ( $column ) {
				case 'shortcode':
					echo '<code>[' . $this->post_type . ' id="' . $post_id . '"]</code>';
					break;

				case 'start':
					echo get_post_meta( $post_id, 'start_date', true );
					break;

				case 'icon' :
					$image = '';
					if ( has_post_thumbnail( $post_id ) ) {
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'thumbnail' );
						if ( isset( $img[0] ) ) {
							$image = '<img src="' . $img[0] . '" width="50" height="50" />';
						}
					}

					if ( ! empty( $image ) ) {
						echo $image;
					} elseif ( $video = get_post_meta( $post_id, 'video_url', true ) ) {
						echo __( 'Has Featured Video', 'themify' );
					} else {
						echo __( 'No Featured Media', 'themify' );
					}
					break;
			}
		}

		/**
		 * Filter request to sort
		 */
		function filter_load() {
			add_action( current_filter(), array( $this, 'setup_vars' ), 20 );
			add_action( 'restrict_manage_posts', array( $this, 'get_select' ) );
			add_filter( "manage_taxonomies_for_{$this->post_type}_columns", array( $this, 'add_columns' ) );
		}

		/**
		 * Add columns when filtering posts in edit.php
		 */
		public function add_columns( $taxonomies ) {
			return array_merge( $taxonomies, $this->taxonomies );
		}

		/**
		 * Checks if the string begins with - like "-excluded"
		 *
		 * @param string $string String to check
		 *
		 * @return bool
		 */
		function is_negative_string( $string ) {
			return '-' === $string[0];
		}

		/**
		 * Checks if the string does not being with - like "included"
		 *
		 * @param string $string String to check
		 *
		 * @return bool
		 */
		function is_positive_string( $string ) {
			return '-' !== $string[0];
		}

		/**
		 * Parses the arguments given as category to see if they are category IDs or slugs and returns a proper tax_query
		 * @param $category
		 * @param $post_type
		 * @return array
		 */
		function parse_category_args( $category, $post_type ) {
			$tax_query = array();
			if ( 'all' != $category ) {
				$terms = explode(',', $category);
				if( preg_match( '#[a-z]#', $category ) ) {
					$include = array_filter( $terms, array( $this, 'is_positive_string' ) );
					$exclude = array_filter( $terms, array( $this, 'is_negative_string' ) );
					$field = 'slug';
				} else {
					$include = array_filter( $terms, 'themify_is_positive_number' );
					$exclude = array_map( 'themify_make_absolute_number', array_filter( $terms, 'themify_is_negative_number' ) );
					$field = 'id';
				}

				if ( !empty( $include ) && !empty( $exclude ) ) {
					$tax_query = array(
						'relation' => 'AND'
					);
				}
				if ( !empty( $include ) ) {
					$tax_query[] = array(
						'taxonomy' => $post_type . '-category',
						'field'    => $field,
						'terms'    => $include,
					);
				}
				if ( !empty( $exclude ) ) {
					$tax_query[] = array(
						'taxonomy' => $post_type . '-category',
						'field'    => $field,
						'terms'    => $exclude,
						'operator' => 'NOT IN',
					);
				}
			}
			return $tax_query;
		}

		/**
		 * Select form element to filter the post list
		 * @return string HTML
		 */
		public function get_select() {
			$html = '';
			foreach ($this->taxonomies as $tax) {
				$options = sprintf('<option value="">%s %s</option>', __('View All', 'themify'),
				get_taxonomy($tax)->label);
				$class = is_taxonomy_hierarchical($tax) ? ' class="level-0"' : '';
				foreach (get_terms( $tax ) as $taxon) {
					$options .= sprintf('<option %s%s value="%s">%s%s</option>', isset($_GET[$tax]) ? selected($taxon->slug, $_GET[$tax], false) : '', '0' !== $taxon->parent ? ' class="level-1"' : $class, $taxon->slug, '0' !== $taxon->parent ? str_repeat('&nbsp;', 3) : '', "{$taxon->name} ({$taxon->count})");
				}
				$html .= sprintf('<select name="%s" id="%s" class="postform">%s</select>', $tax, $tax, $options);
			}
			return print $html;
		}

		/**
		 * Setup vars when filtering posts in edit.php
		 */
		function setup_vars() {
			$this->post_type =  get_current_screen()->post_type;
			$this->taxonomies = array_diff(get_object_taxonomies($this->post_type), get_taxonomies(array('show_admin_column' => 'false')));
		}

		/**
		 * Returns link wrapped in paragraph either to the post type archive page or a custom location
		 * @param bool|string False does nothing, true goes to archive page, custom string sets custom location
		 * @param      $more_text
		 * @param      $post_type
		 * @return string
		 */
		function section_link( $more_link = false, $more_text, $post_type ) {
			if ( $more_link ) {
				if ( 'true' == $more_link ) {
					$more_link = get_post_type_archive_link( $post_type );
				}
				return '<p class="more-link-wrap"><a href="' . esc_url( $more_link ) . '" class="more-link">' . $more_text . '</a></p>';
			}
			return '';
		}

		/**
		 * Returns class to add in columns when querying multiple entries
		 * @param string $style Entries layout
		 * @return string $col_class CSS class for column
		 */
		function column_class( $style ) {
			switch ( $style ) {
				case 'grid4':
					$col_class = 'col4-1';
					break;
				case 'grid3':
					$col_class = 'col3-1';
					break;
				case 'grid2':
					$col_class = 'col2-1';
					break;
				default:
					$col_class = '';
					break;
			}
			return $col_class;
		}

		/**
		 * Add shortcode to WP
		 * @param $atts Array shortcode attributes
		 * @return String
		 * @since 1.0.0
		 */
		function init_shortcode( $atts ) {
			$this->instance++;
			$this->atts = array(
				'id' => '',
				'title' => 'yes', // no
				'unlink_title' => 'no',
				'image' => 'yes', // no
				'unlink_image' => 'no',
				'post_meta' => 'yes', // no
				'post_date' => 'no', // yes
				'image_w' => '',
				'image_h' => '',
				'display' => 'none', // excerpt, none
				'more_link' => false, // true goes to post type archive, and admits custom link
				'more_text' => __('More &rarr;', 'themify'),
				'limit' => 3,
				'category' => 'all', // integer category ID
				'orderby' => 'event_date', // date, title, rand
				'order' => 'ASC', // DESC
				'style' => 'grid3', // grid4, grid2, list-post
				'use_original_dimensions' => 'no', // yes
				'auto' => 4, // autoplay pause length
				'effect' => 'scroll', // transition effect
				'speed' => 500, // transition speed
				'wrap' => 'yes',
				'slider_nav' => 'yes',
				'pager' => 'yes',
				// Shortcode specific
				'event_location' => 'yes',
				'event_date' => 'yes',
				'event_tab' => 'no', // not used in 1.0.0
			    'upcoming_events' => 'yes',
			    'past_events' => 'default',
			    'past_events_order' => '',
			);
			if ( ! isset( $atts['image_w'] ) || '' == $atts['image_w'] ) {
				if ( ! isset( $atts['style'] ) ) {
					$atts['style'] = 'grid3';
				}
				switch ( $atts['style'] ) {
					case 'list-post':
						$this->atts['image_w'] = 1160;
						$this->atts['image_h'] = 665;
						break;
					case 'grid4':
						$this->atts['image_w'] = 260;
						$this->atts['image_h'] = 150;
						break;
					case 'grid3':
					case '':
						$this->atts['image_w'] = 360;
						$this->atts['image_h'] = 205;
						break;
					case 'grid2':
						$this->atts['image_w'] = 560;
						$this->atts['image_h'] = 320;
						break;
					case 'list-large-image':
						$this->atts['image_w'] = 800;
						$this->atts['image_h'] = 460;
						break;
					case 'list-thumb-image':
						$this->atts['image_w'] = 260;
						$this->atts['image_h'] = 150;
						break;
					case 'grid2-thumb':
						$this->atts['image_w'] = 160;
						$this->atts['image_h'] = 95;
						break;
					case 'slider':
						$this->atts['image_w'] = 1280;
						$this->atts['image_h'] = 500;
						break;
				}
			}
			$shortcode_atts = shortcode_atts( $this->atts, $atts );
			return do_shortcode( $this->shortcode( $shortcode_atts, $this->post_type, $atts ) );
		}

		/**
		 * Main shortcode rendering
		 * @param array $atts
		 * @param $post_type
		 * @return string|void
		 */
		function shortcode( $atts = array(), $post_type, $original_args ) {
			global $themify;
			extract( $atts );

			/* with the slider style, hide the past events by default */
			if( ! isset( $original_args['past_events'] ) && isset( $original_args['style'] ) && $original_args['style'] == 'slider' ) {
				$past_events = 'no';
			}

			// Parameters to get posts
			$args = array(
				'post_type' => $post_type,
				'posts_per_page' => $limit,
				'suppress_filters' => false,
				// Post Type Specific
				'orderby' => $orderby,
				'order' => $order,
			);
			$args['tax_query'] = $this->parse_category_args( $category, $post_type );

			// Defines layout type
			$cpt_layout_class = $this->post_type.'-multiple clearfix type-multiple';
			$multiple = true;

			// Single post type or many single post types
			if ( '' != $id ) {
				if ( strpos($id, ',' ) ) {
					$ids = explode( ',', str_replace( ' ', '', $id ) );
					$int_ids = array();
					foreach ( $ids as $string_id ) {
						$int_ids[] = intval( $string_id );
					}
					$args['post__in'] = $int_ids;
					$args['orderby'] = 'post__in';
				} else {
					$args['p'] = intval( $id );
					$cpt_layout_class = $this->post_type . '-single';
					$multiple = false;
				}
			}

			// Event Query Setup
			$events = array();
			$is_slider = false !== stripos( $style, 'slider' );

			if( $orderby == 'event_date' ) {
				$args['orderby'] = 'meta_value';
				$args['meta_key'] = 'start_date';
			}

			if( $past_events == 'no' ) { // show only future events
				$args['meta_key'] = 'end_date';
				$args['meta_compare'] = '>=';
				$args['meta_value'] = date_i18n( $this->date_time_format );
				$events['upcoming'] = get_posts( apply_filters( 'themify_'.$post_type.'_shortcode_args', $args ) );
			} elseif( 'yes' == $past_events ) { // show only past events
				// Get past events
				$args['meta_key'] = 'end_date';
				$args['meta_compare'] = '<';
				$args['meta_value'] = date_i18n( $this->date_time_format );
				$args['order'] = '' != $past_events_order ? $past_events_order : $order;
				$events['past'] = get_posts( apply_filters( 'themify_'.$post_type.'_shortcode_args', $args ) );
			} else {
				$events['events'] = get_posts( apply_filters( 'themify_'.$post_type.'_shortcode_args', $args ) );
			}

			// Collect markup to be returned
			$out = '';
			$htabs = '';
			$btabs = '';
			$tab = 0;
			$past_on_tab_one = false;

			foreach( $events as $key => $posts ) {
				if ( $posts ) {
					$themify_save = clone $themify; // save a copy

					// override $themify object
					$themify->hide_title = 'yes' == $title? 'no': 'yes';
					$themify->unlink_title = $unlink_title;
					$themify->hide_image = 'yes' == $image? 'no': 'yes';
					$themify->unlink_image = $unlink_image;
					$themify->hide_meta = 'yes' == $post_meta? 'no': 'yes';
					$themify->hide_date = 'yes' == $post_date? 'no': 'yes';
					$themify->hide_meta_category = 'no';
					$themify->hide_meta_tag = 'no';
					$themify->hide_meta_author = 'yes';
					if ( ! $multiple ) {
						if( '' == $image_w || get_post_meta($args['p'], 'image_width', true ) ) {
							$themify->width = get_post_meta($args['p'], 'image_width', true );
						}
						if( '' == $image_h || get_post_meta($args['p'], 'image_height', true ) ) {
							$themify->height = get_post_meta($args['p'], 'image_height', true );
						}
					} else {
						$themify->width = $image_w;
						$themify->height = $image_h;
					}
					$themify->use_original_dimensions = 'yes' == $use_original_dimensions? 'yes': 'no';
					$themify->display_content = $display;
					$themify->more_link = $more_link;
					$themify->more_text = $more_text;
					$themify->post_layout = $style;
					$themify->col_class = $this->column_class($style);
					$themify->media_position = themify_check('setting-default_media_position')? themify_get('setting-default_media_position') : 'above';

					$themify->hide_event_date = 'yes' == $event_date? 'no': 'yes';
					$themify->hide_event_location = 'yes' == $event_location? 'no': 'yes';
					$themify->event_tab = 'yes' == $event_tab;

					$themify->show_post_media = true;
					$themify->is_shortcode = true;

					// SHORTCODE RENDERING

					$loop = themify_get_shortcode_template( $posts, 'includes/loop-' . $post_type, 'index' );

					if ( $is_slider ) {
						$loop = sprintf('%s<div class="slideshow-wrap"><div class="slideshow" data-id="%s-slider-%s" data-autoplay="%s" data-effect="%s" data-speed="%s" data-wrap="%s" data-slidernav="%s" data-pager="%s">',
							$this->slideLoader,
							$post_type,
							$this->instance,
							is_numeric( $auto ) ? $auto * 1000 : $auto,
							$effect,
							$speed,
							$wrap,
							$slider_nav,
							$pager
						) . $loop . '</div></div>';
					}

					if ( 'yes' == $event_tab && ! $is_slider ) {

						$htabs .= '<li>';
						if ( 0 == $tab ) {
							if ( ! empty( $events['upcoming'] ) ) {
								$htabs .= '<a href="#" class="htab-link" data-tab="upcoming">' . __( 'Upcoming', 'themify' );
								$btabs .= '<li class="upcoming-events btab-panel">';
							} elseif ( ! empty( $events['past'] ) ) {
								$htabs .= '<a href="#" class="htab-link" data-tab="past">' . __( 'Past', 'themify' );
								$btabs .= '<li class="past-events btab-panel">';
								$past_on_tab_one = true;
							}
						} elseif ( 1 == $tab && ! $past_on_tab_one ) {
							$htabs .= '<a href="#" class="htab-link" data-tab="past">' . __( 'Past', 'themify' );
							$btabs .= '<li class="past-events btab-panel">';

						}
						$htabs .= '</a></li>';
						$btabs .= "<div id='$post_type-slider-$this->instance' class='loops-wrapper shortcode $post_type $style $cpt_layout_class'>$loop</div>" . $this->section_link( $more_link, $more_text, $post_type );
						$tab++;

					} else {
						$out .= "<div id='$post_type-slider-$this->instance' class='loops-wrapper shortcode $post_type $style $cpt_layout_class'>$loop</div>" . $this->section_link( $more_link, $more_text, $post_type );
					}

					// END SHORTCODE RENDERING

					unset( $themify->is_shortcode );
					$themify = clone $themify_save; // revert to original $themify state
				}
			}

			if ( 'yes' == $event_tab && ! $is_slider ) {
				$htabs = '<ul class="htabs">' . $htabs . '</ul>';
				$btabs = '<ul class="btabs">' . $btabs . '</ul>';
				$out = '<div class="event-posts">' . $htabs . $btabs . $out . '</div>';
			}
                        wp_reset_postdata();
			return $out;
		}

		/**
		 * Renders and returns the map for a given address.
		 * @param $address
		 * @return string
		 */
		function get_map( $address ) {
			return themify_shortcode( apply_filters( 'themify_event_map_args', array(
				'address'	=> preg_replace( "[\n|\r]", ' ', $address ),
				'width'		=> '100%',
				'height'	=> '650px',
			) ), null, 'map');
		}

		/**
		 * Returns the specified date or time element
		 * @param $date
		 * @param string $part
		 * @return string
		 */
		function get_datetime( $date, $part = 'day' ) {
			$parse = explode( '@', $date );
			$all = explode( '-', trim( $parse[0] ) );
			switch( $part ) {
				case 'year':
					return $all[0];
					break;

				case 'month':
					switch( $all[1] ) {
						case '01':
							$month = __( 'Jan', 'themify' );
							break;
						case '02':
							$month = __( 'Feb', 'themify' );
							break;
						case '03':
							$month = __( 'Mar', 'themify' );
							break;
						case '04':
							$month = __( 'Apr', 'themify' );
							break;
						case '05':
							$month = __( 'May', 'themify' );
							break;
						case '06':
							$month = __( 'Jun', 'themify' );
							break;
						case '07':
							$month = __( 'Jul', 'themify' );
							break;
						case '08':
							$month = __( 'Aug', 'themify' );
							break;
						case '09':
							$month = __( 'Sep', 'themify' );
							break;
						case '10':
							$month = __( 'Oct', 'themify' );
							break;
						case '11':
							$month = __( 'Nov', 'themify' );
							break;
						case '12':
							$month = __( 'Dec', 'themify' );
							break;
						default:
							$month = $all[1];
							break;
					}
					return $month;
					break;

				case 'day':
					return $all[2];
					break;

				case 'date':
					return date_i18n( get_option( 'date_format' ), strtotime( $parse[0] ) );
					break;

				case 'time':
					return date_i18n( get_option( 'time_format' ), strtotime( $parse[1] ) );
					break;

				case 'rawdate':
					return str_replace( array( '-', ' ' ), '', trim( $parse[0] ) );
					break;

				case 'rawtime':
					return date( 'Hi', strtotime( trim( $parse[1] ) ) );
					break;
			}
		}

		/**
		 * Get date and time in format stored in custom field
		 * 
		 * @param string $date_and_time Date and time in a certain format.
		 * 
		 * @return string
		 */
		function event_date_to_mysql($date_and_time) {
			$date_parts = explode('@', $date_and_time);
			$is_pm = ( false !== stripos($date_parts[1], 'pm') ) ? true : false;
			$date_parts[1] = preg_replace('/\s(am|pm)/i', '', trim($date_parts[1]));
			$time = explode(':', $date_parts[1]);
			if ($is_pm) {
				$time[0] = ( $time[0] + 12 ) % 24;
				if ($time[0] < 10) {
					$time[0] = 0 . $time[0];
				}
			}
			$time = $time[0] . ':' . $time[1];
			return trim($date_parts[0]) . ' ' . $time;
		}

		/**
		 * Register widgets for this custom post type
		 */
		function widget() {
			register_widget( 'Themify_Events' );
		}

		/**
		 * Display admin notices for event datetime convert to 24hr format.
		 * Display admin notices when converting successed.
		 * 
		 * @since 1.2.5
		 * @access public
		 */
		public function data_update_notice() {
			
			if ( get_option( 'theme_event_data_update_125_done' ) != 'yes' ) {
				echo sprintf( '<div class="notice notice-error"><p>%s</p><p><a href="%s" class="button button-secondary" onClick="return confirm(\'%s\');">%s</a></p></div>', 
						esc_html__( 'Event date format in the theme has changed to 24hr. Run the updater to convert the date format.', 'themify' ),
						admin_url( 'edit.php?post_type=' . $this->post_type . '&theme_event_update_datetime=1' ),
						esc_html__( 'It is recommended to backup your database before proceeding. Click ok to run the date format updater.', 'themify' ),
						esc_html__( 'Run the updater', 'themify' )
				);
			}

			if ( isset( $_GET['theme_event_update_success'] ) && true == $_GET['theme_event_update_success'] ) {
				echo sprintf( '<div class="notice notice-success"><p>%s</p></div>',
					esc_html__( 'All event date have successfully converted to 24hr format.', 'themify' )
				);
			}
		}

		/**
		 * Convert 12hr to 24hr datetime format.
		 * 
		 * @since 1.2.5
		 * @access public
		 * @return type
		 */
		public function do_data_updater() {
			if ( isset( $_GET['theme_event_update_datetime'] ) && true == $_GET['theme_event_update_datetime'] && get_option( 'theme_event_data_update_125_done' ) != 'yes' ) {

				$args = array(
					'post_type' => $this->post_type,
					'posts_per_page' => 500,
					'post_status' => 'publish'
				);
				$query = new WP_Query( $args );
				$events = $query->get_posts();

				if ( $events ) {
					foreach( $events as $event ) {
						$old_start_date = get_post_meta( $event->ID, 'start_date', true );
						$old_end_date = get_post_meta( $event->ID, 'end_date', true );

						if ( false !== strpos( $old_start_date, '@' ) ) {
							update_post_meta( $event->ID, 'start_date', $this->event_date_to_mysql( $old_start_date ) );
						}

						if ( false !== strpos( $old_end_date, '@' ) ) {
							update_post_meta( $event->ID, 'end_date', $this->event_date_to_mysql( $old_end_date ) );
						}
					}
					update_option( 'theme_event_data_update_125_done', 'yes' );
				}
				wp_redirect( admin_url( 'edit.php?post_type=' . $this->post_type . '&theme_event_update_success=1' ) );
				exit;
			}
		}

		/**
		 * Check if event posts are exists.
		 * 
		 * @since 1.2.5
		 * @access public
		 * @return boolean
		 */
		public function event_exists() {
			global $wpdb;
			$sql = $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type='%s' AND post_status='%s'", array( $this->post_type, 'publish' ) );

			$count = $wpdb->get_var( $sql );
			if ( $count > 0 ) {
				return true;
			} else {
				return false;
			}
		}
	}
}

/**************************************************************************************************
 * Initialize Type Class
 **************************************************************************************************/
$GLOBALS['themify_event'] = new Themify_Event();

/**************************************************************************************************
 * Initialize Widget Class
 **************************************************************************************************/
class Themify_Events extends WP_Widget {

	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'event-posts', 'description' => __( 'A list of events.', 'themify' ) );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'themify-event-posts' );

		/* Create the widget. */
		parent::__construct( 'themify-event-posts', __( 'Themify - Event Posts', 'themify' ), $widget_ops, $control_ops );
	}

	/**
	 * Initialize widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {

		global $themify_event;

		extract( $args );

		/* User-selected settings. */
		$title 		= apply_filters('widget_title', $instance['title'] );
		$category 	= is_array( $instance['category'] ) ? $instance['category'] : explode( ',', trim( $instance['category'] ) );
		$show_count = $instance['show_count'];
		$show_thumb = $instance['show_thumb'] ? true : false;
		$show_title = $instance['hide_title'] ? false : true;
		$image_w 	= $instance['thumb_width'];
		$image_h 	= $instance['thumb_height'];
		$hide_meta = $instance['hide_meta'] ? false : true;
		$hide_event_location = $instance['hide_event_location'] ? false : true;
		$hide_event_date = $instance['hide_event_date'] ? false : true;
		$hide_past_events = !isset( $instance['hide_past_events'] ) ? false : true;

		$post_type = 'event';

		// Set initial query options
		$query_opts = array(
			'posts_per_page' => $show_count,
			'post_type' => $post_type,
			'orderby' => 'meta_value',
			'order' => 'ASC',
		);

		$events = array();

		if ( '0' != implode('', $category) ) {
			$query_opts['tax_query'] = array(
				array(
					'taxonomy' => $post_type . '-category',
					'field'    => 'id',
					'terms'    => $category
				)
			);
		}

		// Get past events
		if ( !$hide_past_events ) {
		 	$query_opts['order'] = 'DESC';
			$query_opts['meta_query'] = array(
				'relation' => 'AND',
				array(
					'key' => 'end_date',
					'value' => date_i18n( $themify_event->date_time_format ),
					'compare' => '<'
				),
				array(
					'key' => 'end_date',
					'value' => '',
					'compare' => '!='
				),
			);
		} else {
			$query_opts['meta_query'] = array(
				'relation' => 'OR',
				array(
					'key' => 'end_date',
					'value' => date_i18n( $themify_event->date_time_format ),
					'compare' => '>='
				),
				array(
					'key' => 'end_date',
					'compare' => 'NOT EXISTS'
				),
				array(
					'key' => 'end_date',
					'value' => '',
					'compare' => '='
				),
			);
		}

		$events['upcoming'] = get_posts( $query_opts );

		$htabs = '';
		$tab = 0;
		$btabs = '';

		foreach( $events as $posts ) {
			if ( $posts ) {

				global $themify;
				$themify_save = clone $themify; // save a copy

				// override $themify object
				$themify->hide_title = 'yes' == $show_title? 'no': 'yes';
				$themify->hide_image = $show_thumb? 'no': 'yes';
				$themify->width = isset( $image_w ) && '' != $image_w ? $image_w : 313;
				$themify->height = isset( $image_h ) && '' != $image_h ? $image_h : 200;
				$themify->use_original_dimensions = 'no';
				$themify->display_content = 'none';
				$themify->post_layout = 'list-post';

				$themify->hide_meta = 'yes' == $hide_meta? 'no': 'yes';
				$themify->hide_event_date = 'yes' == $hide_event_date? 'no': 'yes';
				$themify->hide_event_location = 'yes' == $hide_event_location? 'no': 'yes';

				//$themify->event_tab = 'yes' == $event_tab;

				$themify->is_event_widget = true;

				/*$htabs .= '<li>';
				if ( 0 == $tab ) {
					$htabs .= '<a href="#" class="htab-link" data-tab="upcoming">' . __( 'Upcoming', 'themify' );
					$btabs .= '<li class="upcoming-events btab-panel">';
				} else {
					$htabs .= '<a href="#" class="htab-link" data-tab="past">' . __( 'Past', 'themify' );
					$btabs .= '<li class="past-events btab-panel">';
				}
				$htabs .= '</a></li>';*/

				$btabs .= '
					<div class="shortcode ' . $post_type  . '-widget '. $themify->post_layout .'">' .
						themify_get_shortcode_template($posts, 'includes/loop', $post_type ) .
					'</div>
				</li>';

				$themify = clone $themify_save; // revert to original $themify state
			}
			$tab++;
		}


		if ( '' != $btabs ) {

			$htabs = '<ul class="htabs">' . $htabs . '</ul>';
			$btabs = '<ul class="btabs">' . $btabs . '</ul>';

			echo $before_widget;

			if ( $title ) {
				echo $before_title . $title . $after_title;
			}

			echo $htabs . $btabs;

			echo $after_widget;
		}
	}

	/**
	 * Save widget options
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['category'] = $new_instance['category'];
		$instance['show_count'] = $new_instance['show_count'];
		$instance['show_thumb'] = $new_instance['show_thumb'];
		$instance['hide_title'] = $new_instance['hide_title'];
		$instance['thumb_width'] = $new_instance['thumb_width'];
		$instance['thumb_height'] = $new_instance['thumb_height'];

		$instance['hide_meta'] = $new_instance['hide_meta'];
		$instance['hide_event_location'] = $new_instance['hide_event_location'];
		$instance['hide_event_date'] = $new_instance['hide_event_date'];
		$instance['hide_past_events'] = $new_instance['hide_past_events'];

		return $instance;
	}

	/**
	 * Render widget form
	 * @param array $instance
	 *
	 * @return string|void
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
	$defaults = array(
		'title'          => __( 'Events', 'themify' ),
		'category'       => 0,
		'show_count'     => 5,
		'show_thumb'     => false,
		'display'        => 'none',
		'hide_title'     => false,
		'thumb_width'    => 313,
		'thumb_height'   => 200,

		'hide_meta' => false,
		'hide_event_location' => false,
		'hide_event_date' => false,
	    'hide_past_events' => false,
	);
		$instance = wp_parse_args( (array) $instance, $defaults );
		$categories = get_categories( array( 'taxonomy' => 'event-category' ) );
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'themify'); ?></label><br />
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" width="100%" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e('Category:',
					'themify'); ?></label>
			<select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
				<option value="0" <?php if ( !$instance['category'] ) echo 'selected="selected"'; ?>><?php _e('All', 'themify'); ?></option>
				<?php
				foreach( $categories as $cat ) {
					echo '<option value="' . $cat->cat_ID . '"';
					if ( $cat->cat_ID == $instance['category'] ) echo ' selected="selected"';
					echo '>' . $cat->cat_name . ' (' . $cat->category_count . ')';
					echo '</option>';
				}
				?>
			</select>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['hide_past_events'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_past_events' ); ?>" name="<?php echo $this->get_field_name( 'hide_past_events' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'hide_past_events' ); ?>"><?php _e('Show upcoming events only', 'themify'); ?></label>
			<div class="description"><?php _e( 'If this option is enabled only upcoming events will be displayed, if the option is not enabled only past events are shown.', 'themify' ); ?></div>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show_count' ); ?>"><?php _e('Show:', 'themify'); ?></label>
			<input id="<?php echo $this->get_field_id( 'show_count' ); ?>" name="<?php echo $this->get_field_name( 'show_count' ); ?>" value="<?php echo $instance['show_count']; ?>" size="2" /> <?php _e('events', 'themify'); ?>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['hide_title'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_title' ); ?>" name="<?php echo $this->get_field_name( 'hide_title' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'hide_title' ); ?>"><?php _e('Hide event title', 'themify'); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_thumb'], 'on' ); ?> id="<?php echo $this->get_field_id( 'show_thumb' ); ?>" name="<?php echo $this->get_field_name( 'show_thumb' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_thumb' ); ?>"><?php _e('Display featured image', 'themify'); ?></label>
		</p>

		<?php
		// only allow thumbnail dimensions if GD library supported
		if ( function_exists('imagecreatetruecolor') ) {
			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'thumb_width' ); ?>"><?php _e('Image size:', 'themify'); ?></label> <input type="text" id="<?php echo $this->get_field_id( 'thumb_width' ); ?>" name="<?php echo $this->get_field_name( 'thumb_width' ); ?>" value="<?php echo $instance['thumb_width']; ?>" size="3" /> x <input type="text" id="<?php echo $this->get_field_id( 'thumb_height' ); ?>" name="<?php echo $this->get_field_name( 'thumb_height' ); ?>" value="<?php echo $instance['thumb_height']; ?>" size="3" />
			</p>
		<?php
		}
		?>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['hide_meta'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_meta' ); ?>" name="<?php echo $this->get_field_name( 'hide_meta' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'hide_meta' ); ?>"><?php _e('Hide event meta', 'themify'); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['hide_event_date'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_event_date' ); ?>" name="<?php echo $this->get_field_name( 'hide_event_date' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'hide_event_date' ); ?>"><?php _e('Hide event date', 'themify'); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['hide_event_location'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_event_location' ); ?>" name="<?php echo $this->get_field_name( 'hide_event_location' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'hide_event_location' ); ?>"><?php _e('Hide event location', 'themify'); ?></label>
		</p>

	<?php
	}
}
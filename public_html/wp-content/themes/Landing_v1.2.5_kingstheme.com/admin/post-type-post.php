<?php
/**
 * Appearance Tab for Themify Custom Panel
 *
 * @since 1.0.0
 *
 * @return array
 */
function themify_theme_post_appearance_meta_box() {
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
			'type' 	=> 'radio',
			'meta'  => themify_ternary_options(),
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
				'after' => '<div class="clear"></div>',
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
			'type' 	=> 'radio',
			'meta'  => themify_ternary_options(),
		),
		// Exclude Footer
		array(
			'name' 		=> 'exclude_footer',
			'title'		=> __('Exclude Footer', 'themify'),
			'description'	=> '',
			'type' 	=> 'radio',
			'meta'  => themify_ternary_options(),
		),
	);
}

/**
 * Post Meta Box Options
 * @param array $args
 * @return array
 * @since 1.0.0
 */
function themify_theme_post_meta_box( $args = array() )  {
	extract( $args );
	return array(
		// Layout
		array(
			'name' 		=> 'layout',
			'title' 		=> __('Sidebar Option', 'themify'),
			'description' => '',
			'type' 		=> 'layout',
			'show_title' => true,
			'meta'		=> array(
				array('value' => 'default', 'img' => 'images/layout-icons/default.png', 'selected' => true, 'title' => __('Default', 'themify')),
				array('value' => 'sidebar1', 'img' => 'images/layout-icons/sidebar1.png', 'title' => __('Sidebar Right', 'themify')),
				array('value' => 'sidebar1 sidebar-left', 'img' => 'images/layout-icons/sidebar1-left.png', 'title' => __('Sidebar Left', 'themify')),
				array('value' => 'sidebar-none', 'img' => 'images/layout-icons/sidebar-none.png', 'title' => __('No Sidebar ', 'themify'))
			)
		),
		// Content Width
		array(
			'name'=> 'content_width',
			'title' => __('Content Width', 'themify'),
			'description' => '',
			'type' => 'layout',
			'show_title' => true,
			'meta' => array(
				array(
					'value' => 'default_width',
					'img' => 'themify/img/default.png',
					'selected' => true,
					'title' => __( 'Default', 'themify' )
				),
				array(
					'value' => 'full_width',
					'img' => 'themify/img/fullwidth.png',
					'title' => __( 'Fullwidth', 'themify' )
				)
			)
		),
		// Post Image
		array(
			'name' 		=> 'post_image',
			'title' 		=> __('Featured Image', 'themify'),
			'description' => '',
			'type' 		=> 'image',
			'meta'		=> array()
		),
		// Featured Image Size
		array(
			'name'	=>	'feature_size',
			'title'	=>	__('Image Size', 'themify'),
			'description' => sprintf(__('Image sizes can be set at <a href="%s">Media Settings</a> and <a href="%s" target="_blank">Regenerated</a>', 'themify'), 'options-media.php', 'admin.php?page=regenerate-thumbnails'),
			'type'		 =>	'featimgdropdown'
		),
		// Multi field: Image Dimension
		themify_image_dimensions_field(),
		// Hide Post Title
		array(
			'name' 		=> 'hide_post_title',
			'title' 		=> __('Hide Post Title', 'themify'),
			'description' => '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Unlink Post Title
		array(
			'name' 		=> 'unlink_post_title',
			'title' 		=> __('Unlink Post Title', 'themify'),
			'description' => __('Unlink post title (it will display the post title without link)', 'themify'),
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Multi field: Hide Post Meta
		themify_multi_meta_field(),
		// Hide Post Date
		array(
			'name' 		=> 'hide_post_date',
			'title' 		=> __('Hide Post Date', 'themify'),
			'description' => '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Hide Post Image
		array(
			'name' 		=> 'hide_post_image',
			'title' 		=> __('Hide Featured Image', 'themify'),
			'description' => '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Unlink Post Image
		array(
			'name' 		=> 'unlink_post_image',
			'title' 		=> __('Unlink Featured Image', 'themify'),
			'description' => __('Display the Featured Image without link', 'themify'),
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify')),
				array('value' => 'no',	'name' => __('No', 'themify'))
			)
		),
		// Video URL
		array(
			'name' 		=> 'video_url',
			'title' 		=> __('Video URL', 'themify'),
			'description' => __('Replace Featured Image with a video embed URL such as YouTube or Vimeo video url (<a href="http://themify.me/docs/video-embeds">details</a>).', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array()
		),
		// External Link
		array(
			'name' 		=> 'external_link',
			'title' 		=> __('External Link', 'themify'),
			'description' => __('Link Featured Image and Post Title to external URL', 'themify'),
			'type' 		=> 'textbox',
			'meta'		=> array()
		),
		// Lightbox Link + Zoom icon
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
	);
}

/**
 * Default Single Post Layout
 * @param array $data Theme settings data
 * @return string Markup for module.
 * @since 1.0.0
 */
function themify_default_post_layout( $data = array() ){
	$data = themify_get_data();

	/**
	 * Theme Settings Option Key Prefix
	 * @var string
	 */
	$prefix = 'setting-default_page_';

	/**
	 * Tertiary options <blank>|yes|no
	 * @var array
	 */
	$default_options = array(
		array('name' => '', 'value' => ''),
		array('name' => __('Yes', 'themify'), 'value' => 'yes'),
		array('name' => __('No', 'themify'), 'value' => 'no')
	);

	/**
	 * Sidebar placement options
	 * @var array
	 */
	$sidebar_location_options = array(
		array('value' => 'sidebar1', 'img' => 'images/layout-icons/sidebar1.png', 'selected' => true, 'title' => __('Sidebar Right', 'themify')),
		array('value' => 'sidebar1 sidebar-left', 'img' => 'images/layout-icons/sidebar1-left.png', 'title' => __('Sidebar Left', 'themify')),
		array('value' => 'sidebar-none', 'img' => 'images/layout-icons/sidebar-none.png', 'title' => __('No Sidebar', 'themify'))
	);
	/**
	 * Image alignment options
	 * @var array
	 */
	$alignment_options = array(
		array('name' => '', 'value' => ''),
		array('name' => __('Left', 'themify'), 'value' => 'left'),
		array('name' => __('Right', 'themify'), 'value' => 'right')
	);

	/**
	 * Module markup
	 * @var string
	 */
	$output = '';

	/**
	 * Post sidebar placement
	 */
	$output .= '<p>
					<span class="label">' . __('Post Sidebar Option', 'themify') . '</span>';
	$val = $data[$prefix.'post_layout'];
	foreach($sidebar_location_options as $option){
		if(($val == '' || !$val || !isset($val)) && $option['selected']){
			$val = $option['value'];
		}
		if($val == $option['value']){
			$class = 'selected';
		} else {
			$class = '';
		}
		$output .= '<a href="#" class="preview-icon '.$class.'" title="'.$option['title'].'"><img src="'.THEME_URI.'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';
	}
	$output .= '	<input type="hidden" name="'.$prefix.'post_layout" class="val" value="'.$val.'" />
				</p>';

	/**
	 * Hide Post Title
	 */
	$output .= '<p>
					<span class="label">' . __('Hide Post Title', 'themify') . '</span>
					<select name="'.$prefix.'post_title">'.
						themify_options_module($default_options, $prefix.'post_title') . '
					</select>
				</p>';

	/**
	 * Unlink Post Title
	 */
	$output .= '<p>
					<span class="label">' . __('Unlink Post Title', 'themify') . '</span>
					<select name="'.$prefix.'unlink_post_title">'.
						themify_options_module($default_options, $prefix.'unlink_post_title') . '
					</select>
				</p>';

	/**
	 * Hide Post Meta
	 */
	$output .= themify_post_meta_options($prefix.'post_meta', $data);

	/**
	 * Hide Post Date
	 */
	$output .= '<p>
					<span class="label">' . __('Hide Post Date', 'themify') . '</span>
					<select name="'.$prefix.'post_date">'.
						themify_options_module($default_options, $prefix.'post_date') . '
					</select>
				</p>';

	/**
	 * Hide Featured Image
	 */
	$output .= '<p>
					<span class="label">' . __('Hide Featured Image', 'themify') . '</span>
					<select name="'.$prefix.'post_image">'.
						themify_options_module($default_options, $prefix.'post_image') . '
					</select>
				</p>';

	/**
	 * Unlink Featured Image
	 */
	$output .= '<p>
					<span class="label">' . __('Unlink Featured Image', 'themify') . '</span>
					<select name="'.$prefix.'unlink_post_image">'.
						themify_options_module($default_options, $prefix.'unlink_post_image') . '
					</select>
				</p>';
	/**
	 * Featured Image Sizes
	 */
	$output .= themify_feature_image_sizes_select('image_post_single_feature_size');

	/**
	 * Image dimensions
	 */
	$output .= '<p>
			<span class="label">' . __('Image Size', 'themify') . '</span>
					<input type="text" class="width2" name="setting-image_post_single_width" value="'.$data['setting-image_post_single_width'].'" /> ' . __('width', 'themify') . ' <small>(px)</small>
					<input type="text" class="width2" name="setting-image_post_single_height" value="'.$data['setting-image_post_single_height'].'" /> ' . __('height', 'themify') . ' <small>(px)</small>
					<br /><span class="pushlabel show_if_enabled_img_php"><small>' . __('Enter height = 0 to disable vertical cropping with img.php enabled', 'themify') . '</small></span>
				</p>';

	/**
	 * Disable comments
	 */
	$pre = 'setting-comments_posts';
	$comments_posts_checked = themify_check( $pre ) ? 'checked="checked"': '';
	$output .= '<p><span class="label">' . __('Post Comments', 'themify') . '</span><label for="'.$pre.'"><input type="checkbox" id="'.$pre.'" name="'.$pre.'" '.$comments_posts_checked.' /> ' . __('Disable comments in all Posts', 'themify') . '</label></p>';

	/**
	 * Show author box
	 */
	$pre = 'setting-post_author_box';
	$author_box_checked = themify_check( $pre ) ? 'checked="checked"': '';

	$output .= '<p><span class="label">' . __('Show Author Box', 'themify') . '</span><label for="'.$pre.'"><input type="checkbox" id="'.$pre.'" name="'.$pre.'" '.$author_box_checked.' /> ' . __('Show author box in all Posts', 'themify') . '</label></p>';

	/**
	 * Remove Post Navigation
	 */
	$pre = 'setting-post_nav_';
	$output .= '<p>
					<span class="label">' . __('Post Navigation', 'themify') . '</span>
					<label for="'.$pre.'disable">
						<input type="checkbox" id="' . $pre . 'disable" name="' . $pre . 'disable" ' . checked( themify_get( $pre . 'disable' ), 'on', false ) . '/> ' . __( 'Remove Post Navigation', 'themify' ) . '
						</label>
					<span class="pushlabel vertical-grouped">
						<label for="'.$pre.'same_cat">
							<input type="checkbox" id="' . $pre . 'same_cat" name="' . $pre . 'same_cat" ' . checked( themify_get( $pre . 'same_cat' ), 'on', false ) . '/> ' . __( 'Show only posts in the same category', 'themify' ) . '
						</label>
					</span>
				</p>';

	return $output;
}

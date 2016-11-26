<?php

	return array(
		// Featured Image Size
		array(
			'name'	=>	'feature_size',
			'title'	=>	__('Image Size', 'themify-portfolio-posts'),
			'description' => sprintf( __( 'Image sizes can be set at <a href="%s">Media Settings</a>', 'themify-portfolio-posts' ), admin_url( 'options-media.php' ) ),
			'type'		 =>	'featimgdropdown'
		),
	    // Gallery Shortcode
        array(
            'name' 		=> 'gallery_shortcode',
            'title' 	=> __('Gallery', 'themify-portfolio-posts'),
            'description' => __( 'This is the masonry gallery in the portfolio single view', 'themify-portfolio-posts' ),
            'type' 		=> 'gallery_shortcode'
        ),
		// Multi field: Image Dimension
		themify_image_dimensions_field(),
		// Hide Title
		array(
			'name' 		=> 'hide_post_title',
			'title'		=> __('Hide Post Title', 'themify-portfolio-posts'),
			'description'	=> '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// Unlink Post Title
		array(
			'name' 		=> 'unlink_post_title',
			'title' 		=> __('Unlink Post Title', 'themify-portfolio-posts'),
			'description' => __('Unlink post title (it will display the post title without link)', 'themify-portfolio-posts'),
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// Hide Post Date
		array(
			'name' 		=> 'hide_post_date',
			'title'		=> __('Hide Post Date', 'themify-portfolio-posts'),
			'description'	=> '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// Hide Post Meta
		array(
			'name' 		=> 'hide_post_meta',
			'title'		=> __('Hide Post Meta', 'themify-portfolio-posts'),
			'description'	=> '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// Hide Post Image
		array(
			'name' 		=> 'hide_post_image',
			'title' 		=> __('Hide Featured Image', 'themify-portfolio-posts'),
			'description' => '',
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// Unlink Post Image
		array(
			'name' 		=> 'unlink_post_image',
			'title' 		=> __('Unlink Featured Image', 'themify-portfolio-posts'),
			'description' => __('Display the Featured Image without link', 'themify-portfolio-posts'),
			'type' 		=> 'dropdown',
			'meta'		=> array(
				array('value' => 'default', 'name' => '', 'selected' => true),
				array('value' => 'yes', 'name' => __('Yes', 'themify-portfolio-posts')),
				array('value' => 'no',	'name' => __('No', 'themify-portfolio-posts'))
			)
		),
		// External Link
		array(
			'name' 		=> 'external_link',
			'title' 		=> __('External Link', 'themify-portfolio-posts'),
			'description' => __('Link Featured Image to external URL', 'themify-portfolio-posts'),
			'type' 		=> 'textbox',
			'meta'		=> array()
		),
		// Lightbox Link
		themify_lightbox_link_field(),
		// Separator - Project Information
		array(
			'name'        => '_separator_project_info',
			'title'       => '',
			'description' => '',
			'type'        => 'separator',
			'meta'        => array(
				'html' => '<h4>' . __( 'Project Info', 'themify-portfolio-posts' ) . '</h4><hr class="meta_fields_separator"/>'
			),
		),
		// Project Date
		array(
			'name'        => 'project_date',
			'title'       => __( 'Date', 'themify-portfolio-posts' ),
			'description' => '',
			'type'        => 'textbox',
			'meta'        => array()
		),
		// Project Client
		array(
			'name'        => 'project_client',
			'title'       => __( 'Client', 'themify-portfolio-posts' ),
			'description' => '',
			'type'        => 'textbox',
			'meta'        => array()
		),
		// Project Services
		array(
			'name'        => 'project_services',
			'title'       => __( 'Services', 'themify-portfolio-posts' ),
			'description' => '',
			'type'        => 'textbox',
			'meta'        => array()
		),
		// Project Launch
		array(
			'name'        => 'project_launch',
			'title'       => __( 'Link to Launch', 'themify-portfolio-posts' ),
			'description' => '',
			'type'        => 'textbox',
			'meta'        => array()
		),
	);
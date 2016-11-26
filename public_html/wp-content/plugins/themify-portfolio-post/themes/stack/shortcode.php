<?php

	$this->instance++;

	extract( $this->parse_atts( $atts ) );

	// Pagination
	global $paged;
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	// Parameters to get posts
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => $limit,
		'order' => $order,
		'orderby' => $orderby,
		'suppress_filters' => false,
		'paged' => $paged
	);
	// Category parameters
	$args['tax_query'] = $this->parse_category_args( $category, $post_type );

	$multiple = true;

	// Single post type or many single post types
	if( '' != $id ){
		if( strpos( $id, ',' ) ) {
			$ids = explode(',', str_replace(' ', '', $id));
			foreach ($ids as $string_id) {
				$int_ids[] = intval($string_id);
			}
			$args['post__in'] = $int_ids;
			$args['orderby'] = 'post__in';
		} else {
			$args['p'] = intval($id);
			$multiple = false;
		}
	}

	// Get posts according to parameters
	$query = new WP_Query( $args );

	if( $query ) {
		if(!$multiple) {
			if( '' == $image_w || get_post_meta($args['p'], 'image_width', true ) ){
				$image_w = get_post_meta($args['p'], 'image_width', true );
			}
			if( '' == $image_h || get_post_meta($args['p'], 'image_height', true ) ){
				$image_h = get_post_meta($args['p'], 'image_height', true );
			}
		}

		include $this->locate_template( 'portfolio-loop' );
	}

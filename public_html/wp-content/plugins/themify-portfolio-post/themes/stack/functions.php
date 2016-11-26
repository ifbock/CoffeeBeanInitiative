<?php

/**
 * Load assets needed for Stack theme on front end
 *
 * @since 1.0
 */
function themify_portfolio_posts_stack_enqueue() {
	global $themify_portfolio_posts;

	// Masonry layout
	wp_enqueue_script( 'themify-isotope', $themify_portfolio_posts->get_theme_url() . '/js/jquery.isotope.min.js', array('jquery'), $themify_portfolio_posts->version, true );

	// Backstretch
	wp_register_script( 'themify-backstretch', $themify_portfolio_posts->get_theme_url() . '/js/backstretch.js', array( 'jquery' ), $themify_portfolio_posts->version, true );

	wp_enqueue_script( 'themify-portfolio-posts-stack', $themify_portfolio_posts->get_theme_url() . '/js/scripts.js', array( 'jquery' ), $themify_portfolio_posts->version, true );

	wp_enqueue_style( $themify_portfolio_posts->pid, $themify_portfolio_posts->get_theme_url() . '/style.css' );
	wp_enqueue_style( 'themify-font-icons-css', THEMIFY_URI . '/fontawesome/css/font-awesome.min.css', array(), THEMIFY_VERSION );
}
add_action( 'wp_enqueue_scripts', 'themify_portfolio_posts_stack_enqueue' );

if ( ! function_exists( 'themify_portfolio_posts_stack_custom_post_css' ) ) {
	/**
	 * Outputs custom post CSS at the end of a post
	 * @since 1.0.0
	 */
	function themify_portfolio_posts_stack_custom_post_css() {
		global $themify;

		if( tpp_is_portfolio_single() ) {
			return;
		}

		$post_id = get_the_ID();
		if ( in_array( get_post_type( $post_id ), array( 'post', 'portfolio' ) ) ) {
			$css = array();
			$style = '';
			$rules = array();

			if ( ! is_single() ) {
				$entry_id = '.post-' . $post_id;
				$entry = $entry_id . '.post';
				$rules = array(
					$entry => array(
						array(
							'prop' => 'background-color',
							'key'  => 'background_color'
						),
						array(
							'prop' => 'background-image',
							'key'  => 'background_image'
						),
						array(
							'prop' => 'background-repeat',
							'key'  => 'background_repeat',
							'dependson' => array(
								'prop' => 'background-image',
								'key'  => 'background_image'
							),
						),
						array(
							'prop' => 'color',
							'key'  => 'text_color'
						),
					),
					"$entry a" => array(
						array(
							'prop' => 'color',
							'key'  => 'link_color'
						),
					),
				);
			}

			foreach ( $rules as $selector => $property ) {
				foreach ( $property as $val ) {
					$prop = $val['prop'];
					$key = $val['key'];
					if ( is_array( $key ) ) {
						if ( $prop == 'font-size' && themify_check( $key[0] ) ) {
							$css[$selector][$prop] = $prop . ': ' . themify_get( $key[0] ) . themify_get( $key[1] );
						}
					} elseif ( themify_check( $key ) && 'default' != themify_get( $key ) ) {
						if ( $prop == 'color' || stripos( $prop, 'color' ) ) {
							$css[$selector][$prop] = $prop . ': #' . themify_get( $key );
						}
						elseif ( $prop == 'background-image' && 'default' != themify_get( $key ) ) {
							$css[$selector][$prop] = $prop .': url(' . themify_get( $key ) . ')';
						}
						elseif ( $prop == 'background-repeat' && 'fullcover' == themify_get( $key ) ) {
							if ( isset( $val['dependson'] ) ) {
								if ( $val['dependson']['prop'] == 'background-image' && ( themify_check( $val['dependson']['key'] ) && 'default' != themify_get( $val['dependson']['key'] ) ) ) {
									$css[$selector]['background-size'] = 'background-size: cover';
								}
							} else {
								$css[$selector]['background-size'] = 'background-size: cover';
							}
						}
						elseif ( $prop == 'font-family' ) {
							$font = themify_get( $key );
							$css[$selector][$prop] = $prop .': '. $font;
							if ( ! in_array( $font, themify_get_web_safe_font_list( true ) ) ) {
								$themify->google_fonts .= str_replace( ' ', '+', $font.'|' );
							}
						}
						else {
							$css[$selector][$prop] = $prop .': '. themify_get( $key );
						}
					}
				}
				if ( ! empty( $css[$selector] ) ) {
					$style .= "$selector {\n\t" . implode( ";\n\t", $css[$selector] ) . "\n}\n";
				}
			}

			if ( '' != $style ) {
				echo "\n<!-- Entry Style -->\n<style>\n$style</style>\n<!-- End Entry Style -->\n";
			}
		}
	}
}
add_action( 'themify_portfolio_post_end', 'themify_portfolio_posts_stack_custom_post_css' );
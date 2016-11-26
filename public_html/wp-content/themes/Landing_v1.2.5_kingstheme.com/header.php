<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php
	/** Themify Default Variables
	 *  @var object */
	global $themify; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- wp_head -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php themify_body_start(); // hook ?>

<div id="pagewrap" class="hfeed site">

	<?php if ( themify_theme_show_area( 'header' ) && themify_theme_do_not_exclude_all( 'header' ) ) : ?>
		<div id="headerwrap">

			<?php themify_header_before(); // hook ?>

			<header id="header" class="pagewidth clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

	            <?php themify_header_start(); // hook ?>

	            <?php if ( themify_theme_show_area( 'site_logo' ) ) : ?>
					<?php echo themify_logo_image(); ?>
				<?php endif; ?>

				<?php if ( themify_theme_show_area( 'site_tagline' ) ) : ?>
					<?php echo themify_site_description(); ?>
				<?php endif; ?>

				<?php if ( themify_theme_do_not_exclude_all( 'mobile-menu' ) ) : ?>
					<a id="menu-icon" href="#mobile-menu"></a>
					<div id="mobile-menu" class="sidemenu sidemenu-off">

						<?php if ( themify_theme_show_area( 'search_form' ) ) : ?>
							<div id="searchform-wrap">
								<?php get_search_form(); ?>
							</div>
							<!-- /searchform-wrap -->
						<?php endif; // exclude search form ?>

						<?php $social_widget = themify_theme_show_area( 'social_widget' );
                                                      $rss = themify_theme_show_area( 'rss' );
                                                ?>
						<?php if ( $social_widget || $rss ) : ?>
							<div class="social-widget">
                                <?php if($social_widget):?>
                                    <?php  dynamic_sidebar( 'social-widget' ); ?>
                                     <!-- /.social-widget -->
                                <?php endif;?>
								<?php if ( $rss ) : ?>
									<div class="rss">
										<a href="<?php echo esc_url( themify_get( 'setting-custom_feed_url' ) != '' ? themify_get( 'setting-custom_feed_url' ) : get_bloginfo( 'rss2_url' ) ); ?>"></a>
									</div>
								<?php endif; // exclude rss ?>
							</div>
						<?php endif;?>

						<?php if ( themify_theme_show_area( 'menu_navigation' ) ) : ?>
							<nav itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
								<?php themify_theme_menu_nav(); ?>
								<!-- /#main-nav -->
							</nav>
						<?php endif; // exclude menu navigation ?>

						<a id="menu-icon-close" href="#"></a>
					</div>
					<!-- /#mobile-menu -->
				<?php endif; // do not exclude all this ?>

				<?php themify_header_end(); // hook ?>

			</header>
			<!-- /#header -->

	        <?php themify_header_after(); // hook ?>

		</div>
		<!-- /#headerwrap -->
	<?php endif; // exclude header ?>

	<div id="body" class="clearfix">

		<?php themify_layout_before(); //hook ?>

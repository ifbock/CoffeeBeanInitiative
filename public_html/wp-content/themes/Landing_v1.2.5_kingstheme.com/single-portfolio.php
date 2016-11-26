<?php
/**
 * Template for single portfolio view
 * @package themify
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify, $themify_portfolio; ?>

<?php if( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="featured-area <?php echo themify_theme_featured_area_style(); ?>">
		<div class="featured-background"></div>
		<div class="pagewidth clearfix">

			<div class="portfolio-post-wrap">

				<?php if ( $themify->hide_meta != 'yes' ): ?>
					<p class="post-meta entry-meta">
						<?php the_terms( get_the_ID(), get_post_type() . '-category', '<span class="post-category">', ' <span class="separator">/</span> ', ' </span>' ) ?>
					</p>
				<?php endif; //post meta ?>
				<!-- /post-meta -->

				<?php if ( $themify->hide_title != 'yes' ): ?>
					<?php themify_before_post_title(); // Hook ?>
					<h1 class="post-title entry-title">
						<?php if ( $themify->unlink_title == 'yes' ): ?>
							<?php the_title(); ?>
						<?php else: ?>
							<a href="<?php echo themify_get_featured_image_link(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						<?php endif; //unlink post title ?>
					</h1>
					<?php themify_after_post_title(); // Hook ?>
				<?php endif; //post title ?>

				<?php if ( $themify->hide_date != 'yes' ): ?>
					<time class="post-date entry-date updated">
						<?php echo get_the_date( apply_filters( 'themify_loop_date', '' ) ) ?>
					</time>
				<?php endif; //post date ?>

		<?php if( $themify->hide_image != 'yes' ) : ?>

		<?php
		/**
		 * SHOW GALLERY
		 */
		if ( themify_get( 'gallery_shortcode' ) != '' ) : ?>

			<?php
			$images = $themify_portfolio->get_gallery_images();

			if ( $images ) : $counter = 0; ?>

				<div class="gallery-wrapper masonry clearfix gallery-columns-<?php echo $themify_portfolio->get_gallery_columns(); ?>">

					<?php foreach ( $images as $image ) :
						$counter++;

						$caption = $themify_portfolio->get_caption( $image );
						$description = $themify_portfolio->get_description( $image );
						if ( $caption ) {
							$alt = $caption;
						} elseif ( $description ) {
							$alt = $description;
						} else {
							$alt = the_title_attribute('echo=0');
						}
						$featured = get_post_meta( $image->ID, 'themify_gallery_featured', true );
						if ( $featured && '' != $featured ) {
							$img_size = array(
								'width' => 350,
								'height' => 400,
							);
						} else {
							$img_size = array(
								'width' => 350,
								'height' => 200,
							);
						}
						$img_size = apply_filters( 'themify_theme_single_portfolio_image_size', $img_size );

						if ( themify_check( 'setting-img_settings_use' ) ) {
							$size = $featured && '' != $featured ? 'large' : 'medium';
							$img = wp_get_attachment_image_src( $image->ID, apply_filters( 'themify_gallery_post_type_single', $size ) );
							$out_image = '<img src="' . $img[0] . '" alt="' . $alt . '" width="' . $img_size['width'] . '" height="' . $img_size['height'] . '" />';
						} else {
							$img = wp_get_attachment_image_src( $image->ID, apply_filters( 'themify_gallery_post_type_single', 'large' ) );
							$out_image = themify_get_image( "src={$img[0]}&w={$img_size['width']}&h={$img_size['height']}&ignore=true&alt=$alt" );
						}

						?>
						<div class="item gallery-icon <?php echo $featured; ?>">
							<a href="<?php echo $img[0]; ?>" class="" data-image="<?php echo $img[0]; ?>" data-caption="<?php echo $caption; ?>" data-description="<?php echo $description; ?>">
								<span class="gallery-item-wrapper">

									<?php echo $out_image; ?>

									<span class="gallery-caption">
										<h2 class="post-title entry-title">
											<?php echo $image->post_title; ?>
										</h2>
										<p class="entry-content">
											<?php echo $caption; ?>
										</p>
									</span>

								</span>
							</a>
						</div>
					<?php endforeach; // images as image ?>

				</div>
			<?php endif; // images ?>

		<?php else:  ?>

			<?php
			/**
			 * SHOW FEATURED IMAGE
			 */
			get_template_part( 'includes/post-media', get_post_type() ); ?>

		<?php endif; // gallery shortcode not empty ?>

	<?php endif //hide image ?>

			</div>
			<!-- /.portfolio-post-wrap -->
		</div>
	</div>
	<!-- /.featured-area -->

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">

	<?php themify_content_before(); // hook ?>

	<!-- content -->
	<div id="content" class="list-post">
    	<?php themify_content_start(); // hook ?>

	<?php get_template_part( 'includes/loop-portfolio', 'single' ); ?>

	<?php wp_link_pages(array('before' => '<p class="post-pagination"><strong>' . __('Pages:', 'themify') . ' </strong>', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<?php get_template_part( 'includes/author-box', 'single'); ?>

	<?php get_template_part( 'includes/post-nav' ); ?>

	<?php if(!themify_check('setting-comments_posts')): ?>
		<?php comments_template(); ?>
	<?php endif; ?>

	<?php themify_content_end(); // hook ?>
	</div>
	<!-- /content -->

    <?php themify_content_after(); // hook ?>

<?php endwhile; ?>

<?php
/////////////////////////////////////////////
// Sidebar
/////////////////////////////////////////////
if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>

</div>
<!-- /layout-container -->

<?php get_footer(); ?>

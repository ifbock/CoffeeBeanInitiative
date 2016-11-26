<?php
/**
 * Template for site footer
 * @package themify
 * @since 1.0.0
 */
?>
<?php
/** Themify Default Variables
 *  @var object */
	global $themify; ?>

				<?php themify_layout_after(); // hook ?>
			</div>
			<!-- /body -->
			<?php if ( themify_theme_show_area( 'footer_widgets' ) ) : ?>
				<div class="footer-widgets-wrap">
					<?php get_template_part( 'includes/footer-widgets'); ?>
				</div>
			<?php endif; // exclude footer widgets ?>

			<?php if ( themify_theme_show_area( 'footer' ) ) : ?>
				<div id="footerwrap">

					<?php themify_footer_before(); // hook ?>

					<footer id="footer" class="pagewidth clearfix" itemscope="itemscope" itemtype="https://schema.org/WPFooter">

						<?php themify_footer_start(); // hook ?>

						<div class="footer-text clearfix">

							<?php themify_the_footer_text(); ?>

							<?php themify_the_footer_text('right'); ?>

						</div>
						<!-- /footer-text -->

						<?php themify_footer_end(); // hook ?>

					</footer>
					<!-- /#footer -->

					<?php themify_footer_after(); // hook ?>

				</div>
				<!-- /#footerwrap -->
			<?php endif; // exclude footer ?>

		</div>
		<!-- /#pagewrap -->

		<?php
		/**
		 * Stylesheets and Javascript files are enqueued in theme-functions.php
		 */
		?>

		<!-- wp_footer -->
		<?php themify_body_end(); // hook ?>
		<?php wp_footer(); ?>
	</body>
</html>
<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Uridimmu
 * @subpackage Template
 */
?>
				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php do_atomic( 'close_main' ); // uridimmu_close_main ?>

			</div><!-- .wrap -->

		</div><!-- #main -->

		<?php do_atomic( 'after_main' ); // uridimmu_after_main ?>

		<?php do_atomic( 'before_footer' ); // uridimmu_before_footer ?>

		<footer id="footer">

			<?php do_atomic( 'open_footer' ); // uridimmu_open_footer ?>

			<div class="wrap">

				<div class="footer-content">
					<?php hybrid_footer_content(); ?>
				</div><!-- .footer-content -->

				<?php do_atomic( 'footer' ); // uridimmu_footer ?>

			</div><!-- .wrap -->

			<?php do_atomic( 'close_footer' ); // uridimmu_close_footer ?>

		</footer><!-- #footer -->

		<?php do_atomic( 'after_footer' ); // uridimmu_after_footer ?>

	</div><!-- #container -->

	<?php do_atomic( 'close_body' ); // uridimmu_close_body ?>

	<?php wp_footer(); // wp_footer ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP Seattle
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer grid" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'wpseattle_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpseattle' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpseattle' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wpseattle' ), 'WP Seattle', '<a href="http://www.meetup.com/SeattleWordPressMeetup/" rel="designer">WP Seattle</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LondonGinger
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="instagram-feed">
			<h3>Instagram @QuelSol</h3>
			<!-- SnapWidget -->
				<script src="http://snapwidget.com/js/snapwidget.js"></script>
				<iframe src="http://snapwidget.com/in/?u=cXVlbHNvbHxpbnw3MHw1fDF8fG5vfDV8bm9uZXxvblN0YXJ0fHllc3x5ZXM=&ve=021115" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="follow">
			<h3>Follow:</h3>
		</div>
		<div class="social">
			<li><a href="https://www.facebook.com/thelondonginger" id="facebook" target="_blank"><img src='http://localhost:8888/wordpress/wp-content/uploads/2016/01/Facebook.png' alt="Facebook" /></a></li>
			<li><a href="https://www.instagram.com/quelsol/" id="instagram" target="_blank"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/01/Instagram.png" alt="Instagram" /></a></li>
			<li><a href="#" id="snapchat" target="_blank"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/01/Snapchat.png" alt="Snapchat" /></a></li>
			<li><a href="https://twitter.com/quelsol" id="twitter" target="_blank"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/01/Twitter.png" alt="Twitter" /></a></li>
		</div>
		<div class="copyright">
			<p>&copy The London Ginger 2016</p>
			<!-- <p id="created-by">Created and developed by The Bucket List</p> -->
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ginger' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ginger' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ginger' ), 'ginger', '<a href="http://thelondonginger.com" rel="designer">Leo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

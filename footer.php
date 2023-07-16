</main><!-- /#main -->
<footer id="footer">
	to jest footer
	<div class="container">
		<?php
		if (has_nav_menu('footer-menu')): // See function register_nav_menus() in functions.php
			wp_nav_menu(
				array(
					'container' => 'nav',
					'container_class' => 'col-md-6',
					//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
					'walker' => new WP_Bootstrap4_Navwalker_Footer(),
					'theme_location' => 'footer-menu',
					'items_wrap' => '<ul class="menu nav justify-content-end">%3$s</ul>',
				)
			);
		endif;
		?>

	</div><!-- /.row -->
</footer><!-- /#footer -->
</div><!-- /#wrapper -->
<?php
wp_footer();
?>
</body>

</html>
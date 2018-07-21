<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy;2018 - Advanced WP Themes</p>
			</div>
			<div class="f_right">
				<?php 
				array(
					'theme_location' => 'footer'	
				);

			 ?>
			 <?php wp_nav_menu($args); ?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
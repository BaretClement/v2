<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unowr
 */
?>
	
	<!-- FOOTER -->
	<footer>
		<p class="footer">WE <i class="red heart icon"></i>YOU
		<br>Version 2.0.0</p>
	</footer>

	<!-- GO TOP BUTTON  -->
	<a href="#top" class="smooth-scroll"><button class="ui circular icon button" style="position: fixed; bottom: 20px; right: 20px;"><i class="arrow up icon"></i></button></a>
	<!-- GO TOP BUTTON  -->
	
	<!-- FOOTER -->
	<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/merge-scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
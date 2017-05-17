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
	<footer style="text-align: center; background-color: #1B1C1D; color: #FFFFFF; padding: 15px">
		<p class="footer">WE <i class="red heart icon"></i>YOU
		<br>Version 2.0.0</p>
	</footer>
	
	<!-- FOOTER -->
	<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/merge-scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDMPQMJ');</script>
<!-- End Google Tag Manager -->

</body>
</html>
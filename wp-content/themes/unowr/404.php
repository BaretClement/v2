<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package unowr
 */

get_header(); ?>
</div>

<div class="ui three quarter height grid text container">
	<div class="middle aligned column">
		<img src="<?php echo get_template_directory_uri() ?>/css/img/avatar/erreur-404.svg" class="ui large margin auto image">
		<h1 class="align-center no padding"><b>Page non trouvée...</b></h1>
		<p class="align-center" >Mais tu peux retourner sur la <b><a href="<?php echo get_home_url(); ?>">homepage</a></b> si tu veux !</p>
	</div>
</div>
</div>

<?php
get_footer();

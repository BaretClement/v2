<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unowr
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/semantic.css">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script> <!-- modified -->
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script> <!-- added -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/semantic.js"></script>
<script type="text/javascript" src="https://rawgit.com/space10-community/conversational-form/master/dist/conversational-form.min.js" crossorigin></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- MENU -->
<body id="top">
	<!-- Sidebar Menu -->
	<div class="ui vertical inverted sidebar menu left">
		<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/Logo_unowr_header.png" class="ui small margin auto image" style="margin: auto !important; padding: 15px"></a>
		<?php
			wp_nav_menu( array(
				'link_before' => '<div class="item menu">', 
				'link_after' => '</div>', 
				'container_class' => 'div',
			));
		?>
	</div>

	<!-- Following Menu -->
	<div class="ui large top fixed menu inverted transition hidden">
		<div class="item">
			<a class="toc item"><i class="sidebar large icon"></i></a>
		</div>
		<div class="right item">
			<div class="item">
				<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/Logo_unowr_header.png" class="ui tiny margin auto image" style="margin: auto !important"></a>
			</div>
		</div>
	</div>

	<!-- Page Contents -->
	<div class="pusher">
		<div class="ui inverted vertical masthead center aligned no padding segment">
			<div class="ui large secondary inverted pointing menu">
				<div class="item" style="margin: auto 0">
					<a class="toc item"><i class="sidebar large icon"></i></a>
				</div>
				<div class="right item">
					<div class="item">
						<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/Logo_unowr_header.png" class="ui tiny margin auto image" style="margin: auto !important"></a>
					</div>
				</div>
			</div>
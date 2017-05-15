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
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/merge-styles_2.css">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<title>UNOWR</title>

<!-- This site is optimized with the Yoast SEO plugin v4.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
<!-- Avis pour l’administrateur&nbsp;: cette page n’affiche pas de méta description car elle n’en a pas. Vous pouvez donc soit l’ajouter spécifiquement pour cette page soit vous rendre dans vos réglages (SEO -> Titres) pour configurer un modèle. -->
<meta name="robots" content="noindex,follow">
<link rel="canonical" href="<?php echo get_template_directory_uri(); ?>/">
<meta property="og:locale" content="fr_FR">
<meta property="og:type" content="website">
<meta property="og:title" content="Homepage | UNOWR">
<meta property="og:url" content="<?php echo get_template_directory_uri(); ?>/">
<meta property="og:site_name" content="UNOWR">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Homepage | UNOWR">
<meta name="twitter:site" content="@unowr">
<meta name="twitter:creator" content="@unowr">
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/localhost:8888\/unowr_v2\/","name":"UNOWR","potentialAction":{"@type":"SearchAction","target":"http:\/\/localhost:8888\/unowr_v2\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="UNOWR » Flux" href="<?php echo get_template_directory_uri(); ?>/feed/">
<link rel="alternate" type="application/rss+xml" title="UNOWR » Flux des commentaires" href="<?php echo get_template_directory_uri(); ?>/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost:8888\/unowr_v2\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.6.1"}};
			!function(a,b,c){function d(a){var c,d,e,f,g,h=b.createElement("canvas"),i=h.getContext&&h.getContext("2d"),j=String.fromCharCode;if(!i||!i.fillText)return!1;switch(i.textBaseline="top",i.font="600 32px Arial",a){case"flag":return i.fillText(j(55356,56806,55356,56826),0,0),!(h.toDataURL().length<3e3)&&(i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,65039,8205,55356,57096),0,0),c=h.toDataURL(),i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,55356,57096),0,0),d=h.toDataURL(),c!==d);case"diversity":return i.fillText(j(55356,57221),0,0),e=i.getImageData(16,16,1,1).data,f=e[0]+","+e[1]+","+e[2]+","+e[3],i.fillText(j(55356,57221,55356,57343),0,0),e=i.getImageData(16,16,1,1).data,g=e[0]+","+e[1]+","+e[2]+","+e[3],f!==g;case"simple":return i.fillText(j(55357,56835),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode8":return i.fillText(j(55356,57135),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode9":return i.fillText(j(55358,56631),0,0),0!==i.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity","unicode9"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="<?php echo get_template_directory_uri(); ?>/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.6.1" type="text/css" media="all">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<link rel="https://api.w.org/" href="<?php echo get_template_directory_uri(); ?>/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo get_template_directory_uri(); ?>/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo get_template_directory_uri(); ?>/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.6.1">
<link rel="shortlink" href="<?php echo get_template_directory_uri(); ?>/">
<link rel="alternate" type="application/json+oembed" href="<?php echo get_template_directory_uri(); ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A8888%2Funowr_v2%2F">
<link rel="alternate" type="text/xml+oembed" href="<?php echo get_template_directory_uri(); ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A8888%2Funowr_v2%2F&amp;format=xml">

	</head>

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

	<?php 
	$template = get_post_meta( $post->ID, '_wp_page_template', true );
	?>

	<!-- Page Contents -->
	<div class="pusher <?php echo str_replace('.php', '', $template); ?>">
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
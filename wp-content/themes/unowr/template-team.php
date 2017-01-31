<?php
/* 
Template Name: team
*/

get_header(); ?>

<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>

<script>
$('.grid').masonry({
  // options...
  itemSelector: '.grid-item',
  columnWidth: 200
});
</script>



	<style type="text/css">
		.ui.tiny.image{
			margin-bottom: 15px !important;
		}
		.content{
			width: 100%;
		}
		.column{
			margin: 0 !important;
			box-sizing: border-box;
		}
		.card{
			height: 450px;
		  	display: flex;
		  	align-items: center;
			padding: 20px;
		}
		.content{
			padding: 25px;
			margin: auto;
		}
		svg{
			fill: #FAFAFA;
		}
		.job{
			background: #BDBDBD;
		}
		.function{
			font-size: 0.8rem;
		}
		.image{
			margin: auto !important;
		}
		/* Grow */
		.hvr-grow {
		    vertical-align: middle;
		    transform: translateZ(0);
		    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		    backface-visibility: hidden;
		    -moz-osx-font-smoothing: grayscale;
		    transition-duration: 0.3s;
		    transition-property: transform;
		}

		.hvr-grow:hover,
		.hvr-grow:focus,
		.hvr-grow:active {
		    transform: scale(1.1);
		}
	</style>

<!-- intro PART -->
<div class="ui center aligned three quarter height grid">
	<div class="black row">
		<div class="sixteen middle aligned wide column">
			<img src="<?php echo get_template_directory_uri(); ?>/css/img/team-work-white.svg" class="ui small margin auto image">
			<h1>TEAM</h1>
			<p>Découvrez l'équipe UNOWR</p>
			<a href="#team" class="smooth-scroll"><button class="inverted circular ui basic icon button"><i class="arrow down icon"></i></button></a>
		</div>
	</div>
</div>

</div>

<!-- TEAM PART -->
<div id="team" class="ui four column stackable no padding grid">
			
			<div class="center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui circular small bordered image" src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/Erwan-gauthier.jpg">
						<p class="ui header">Erwan</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui tiny image" src="<?php echo get_template_directory_uri(); ?>/css/img/detective.svg">
						<p class="ui header">Mickaël</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui circular small bordered image" src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/clement.png">
						<p class="ui header">Clément</p>
						<p>Co-funder<br>
						<span class="function">Développeur</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui circular small bordered image" src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/emilie.png">
						<p class="ui header">Émilie</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui circular small bordered image" src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/benjamin.png">
						<p class="ui header">Benjamin</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui tiny image" src="<?php echo get_template_directory_uri(); ?>/css/img/detective.svg" style="color: #E0E0E0">
						<p class="ui header">Paul</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui tiny image" src="<?php echo get_template_directory_uri(); ?>/css/img/detective.svg" style="color: #E0E0E0">
						<p class="ui header">Adrien</p>
						<p>Co-funder<br>
						<span class="function">Nouvel an 2017</span></p>

					</div>
				</div>
			</div>

			<div class="travel center aligned column grid-item">
				<div class="hvr-grow card">
					<div class="content">
						<img class="ui small image" src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/4.neutral-thanks.svg" style="color: #E0E0E0">
						<p class="ui header">BOT</p>
						<p>À votre service<br>
						<span class="function"></span></p>

					</div>
				</div>
			</div>
	
	</div>

<script>
	$('.grid').masonry({
		// options...
		itemSelector: '.grid-item',
	});
</script>

<?php get_footer( '' ); ?>

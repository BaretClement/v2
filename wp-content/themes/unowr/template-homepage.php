<?php
/*
Template Name: Homepage
*/

get_header( '' ); ?>

			<!-- USER PART -->
			<div id="user-part" class="ui middle aligned first-part height grid container">
				<div id="user-part" class="ui middle aligned grid container">
					<div class="sixteen middle aligned wide column">
						<img src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/intro-large-screen.png" class="ui fluide image large-screen">
						<img src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/intro-mobile.png" class="ui fluide image mobile">
						<!-- <h1>Trouvez le restaurant dont vous avez réellement envie, maintenant.</h1> -->
						<br><a href="<?php echo get_template_directory_uri(); ?>/rechercher-un-restaurant"><button class="ui red button"><i class="search icon"></i> Chercher un restaurant</button></a>
						<br><br>
						<a href="#restaurant-part" class="smooth-scroll"><button class="inverted circular ui basic icon button"><i class="arrow down icon"></i></button></a>
					</div>
				</div>
			</div>
			<!-- USER PART -->
		</div>

		<!-- RESTAURANT PART -->
		<div id="restaurant-part" class="ui center aligned full height grid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/css/img/background-restaurateur-part.png);">
			<div class="row">
				<div class="sixteen middle aligned wide column">
					<img src="<?php echo get_template_directory_uri(); ?>/css/img/restaurant.svg" class="ui small margin auto image">
					<h2>Rejoignez nous et faites partie de nos partenaires :)</h2>
					<p>UNOWR vous offre une nouvelle clientèle.</p>
					<a href="<?php echo get_template_directory_uri(); ?>/contact-restaurateur"><button class="ui black button"><i class="add icon"></i>Demande d'inscription</button></a><br><br>
					<a href="#how-to-part" class="smooth-scroll"><button class="circular ui basic icon button"><i class="arrow down icon"></i></button></a>
				</div>
			</div>
		</div>
		<!-- RESTAURANT PART -->

		<!-- HOW TO PART -->
		<div id="how-to-part" class="ui grid center aligned">
			<div id="title" class="center aligned column">
				<h2>Comment ça marche ?</h2>
				<p>Rien de plus simple, seulement trois grandes étapes !</p>
			</div>
		</div>
		<div class="ui grid stackable two column container">
			<div id="mock-up" class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="ui fluid image">
			</div>

			<div id="steps" class="middle aligned column">
				<h3 class="ui large header">
					<span class="number">01.</span><br>
					<div class="content">Réponds aux questions <div class="sub header">En fonction de tes réponses nous pourrons te proposer les restaurants qui correspondent le mieux à tes attentes.</div>
					</div>
				</h3>
			</div>

		</div>

		<div class="ui no padding grid stackable two column mobile reversed container">

			<div id="steps" class="middle aligned column">
				<h3 class="ui large header right aligned">
					<span class="number">02.</span><br>
					<div class="content">Choisis ton restaurant<div class="sub header">À la fin, il n'en restera que trois (les plus pertinents). Tu pourras alors choisir simplement et rapidement.</div>
					</div>
				</h3>
			</div>

			<div id="mock-up" class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="ui fluid image">
			</div>
		</div>

		<div class="ui grid stackable two column container">
			<div id="mock-up" class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="ui fluid image">
			</div>

			<div id="steps" class="middle aligned column">
				<h3 class="ui large header">
					<span class="number">03.</span><br>
					<div class="content">Réserve gratuitement<div class="sub header">Rien de plus simple, clique sur le bouton de réservation, nous nous occupons de tout, c'est rapide et surtout gratuit !</div>
					</div>
				</h3>
			</div>

		</div>
		<!-- HOW TO PART -->

		<!-- PART -->
		<div id="multi-content-part" class="ui center aligned equal width stackable light grey grid">	
			
			<div id="concept-part" class="five wide middle aligned padded column hvr-grow">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/laptop.svg" class="ui tiny margin auto image">
				<h3>Découvrez le concept</h3>
				<a href="<?php echo get_template_directory_uri(); ?>/concept"><button class="ui button"><i class="add icon"></i>Let's go !</button></a>
			</div>

			<div id="blog-part" class="six wide middle aligned padded column hvr-grow">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/breakfast.svg" class="ui tiny margin auto image">
				<h3>Suivez notre blog</h3>
				<a href="<?php echo get_template_directory_uri(); ?>/blog"><button class="ui button"><i class="add icon"></i>Lire les articles</button></a>
			</div>

			<div id="team-part" class="five wide middle aligned padded column hvr-grow">
				<img src="<?php echo get_template_directory_uri(); ?>/css/img/team-work.svg" class="ui tiny margin auto image">
				<h3>Rencontrez l'équipe</h3>
				<a href="<?php echo get_template_directory_uri(); ?>/lequipe"><button class="ui button"><i class="add icon"></i>Voir l'équipe</button></a>
			</div>

		</div>
		<div id="feedback-part" class="ui center aligned grey grid">
			<div class="middle aligned padded column">
				<h3>VOUS AVEZ DES REMARQUES OU DES SUGGESTIONS ?</h3>
				<a href="<?php echo get_template_directory_uri(); ?>/feedback"><button class="ui button"><i class="add airplane"></i>Écrivez-nous !</button></a>
			</div>

		</div>
		<!-- PART -->

		<!-- SOCIAL PART -->
		<div id="social-part" class="ui center aligned no padding grid">
			<div class="black row">
				<div class="sixteen middle aligned wide column">
					<img src="<?php echo get_template_directory_uri(); ?>/css/img/network.svg" class="ui tiny margin auto image">
					<h2>Nous sommes aussi sur les réseaux sociaux</h2>
					<p>Partagez, commentez, trollez, retweetez !</p>
					<button class="ui icon basic inverted huge blue button"><i class="facebook f icon"></i></button>
					<button class="ui icon basic inverted huge teal button"><i class="twitter icon"></i></button>
					<button class="ui icon basic inverted huge violet button"><i class="instagram icon"></i></button>
					<button class="ui icon basic inverted huge yellow button"><i class="snapchat ghost icon"></i></button>
				</div>
			</div>
		</div>
		<!-- SOCIAL PART -->

<?php get_footer( '' ); ?>

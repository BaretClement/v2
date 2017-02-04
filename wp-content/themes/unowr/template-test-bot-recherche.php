<?php
/*
Template Name: BOT test
*/
get_header(); ?>
</div>
	
	<!-- -->
	<div class="ui no padding grid text container" style="height: calc(100vh - 155.33px);" cf-context>
		<div class="column">
			<form id="feedback" cf-form-element>
			    <!-- Question prénom -->
			    	<input name="prenom" type="text" cf-questions="Salut comment t'appelles-tu ?| Hello ! Quel est ton prénom ?">
                
                <!-- préférence alimentaire -->      
	            	<select cf-questions="Quelle est ta préférence alimentaire ?">
	                	<option>Casher</option>
	                	<option>Vegan</option>
	                	<option>Végétarien</option>
	                	<option>Halal</option>
	                	<option>Aucune préférence !</option>
	                </select>

                <!-- Type de cuisine 1 -->      
	            	<select name="type_de_cuisne_1" cf-questions="{previous-answer}, c'est noté ! Quel type de cuisine souhaites-tu manger ?">
	                	<option>Nord-Américaine (choisi celle-ci)</option>
	                	<option>Européenne</option>
	                	<option>Sud-Américaine</option>
	                	<option>Asiatique</option>
	                	<option>Orientale</option>
	                	<option>Fruits de mer & poissons</option>
	                </select>

                <!-- Type de cuisine 2 -->      
	            	<select name="type_de_cuisne_2" cf-questions="Ok, {previous-answer} une idée plus précise ?">
	                	<option>Bagel</option>
	                	<option>Burger</option>
						<option>Peu importe</option>
	                </select>

	            <!-- Prix -->
	            	<input name="prix" type="text" cf-questions="Quel est ton budget maximum pour un menu ? (il faudrait récupérer que le valeur (pas le signe € par exemple">

				<!-- Occasion 1 -->
					<select name="occasion_1" cf-questions="Ok, {previous-answer} €. As-tu une occasion en particulier ?">
	                	<option>Rencard (choisi celui-ci)</option>
	                	<option>Amis</option>
						<option>Famille</option>
						<option>Business</option>
						<option>Pas vraiment...</option>
	                </select>

				<!-- Occasion 2 -->
					<select name="occasion_2" cf-questions="Ça marche, une occasion plus particulière ?">
	                	<option>Premier date</option>
	                	<option>Fini la routine</option>
						<option>Diner aux chandelles</option>
						<option>Nop</option>
	                </select>

	            <!-- Ambiance -->
					<select name="ambiance" cf-questions="Est-ce qu'il te faudrait une ambiance spécifique ?">
	                	<option>Lumière tamisée</option>
	                	<option>Chill</option>
						<option>Costume trois pièces</option>
						<option>Bonne franquette</option>
						<option>Rendez-vous en terre inconnue</option>
						<option>Le bon classique</option>
						<option>Surprend moi !</option>
	                </select>
				<!-- Nombre de personnes -->
	            	<input name="nombre_de_personnes" type="text" cf-questions="Je dois réserver pour combien ?">
				
				<!-- Quand -->
	            	<input name="horaires" type="text" cf-questions="On reserve quand ? (faut voir comment on fait)">



            </form>
		</div>
	</div>

	<script>
		var bot_img = "<?php echo get_template_directory_uri(); ?>/css/img/avatar/2.normal.svg";
	</script>
</div>

<?php get_footer( '' ); ?>

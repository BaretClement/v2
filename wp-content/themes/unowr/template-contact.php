<?php
/*
Template Name: contact
*/

get_header(); ?>

</div>
	<?php 
		$message_success = '<div class="ui center aligned segment" style="padding: 25px"><img src="' . get_template_directory_uri() . '/css/img/avatar/4.neutral-thanks.svg" class="ui small margin auto image"><h1  style="margin: 0 !important"><b>Merci ' . $_POST['prenom'] . '!</b></h1><p style="margin: 0 !important"><br>Ta demande de contact a bien été envoyée.</p><br><p>L' . "'" . 'intérêt que tu portes à <b>UNOWR</b> compte énormément.<br>Nous te recontacterons très rapidement !</p><p>En attendant, je te propose de retourner sur la <a href="' . get_home_url() .'">homepage</a> :)</p></div>'; 
	?>

	<?php
		if (isset($_POST['prenom']) && isset($_POST['restaurant_name']) && isset($_POST['telephone']) && isset($_POST['email'])) {
	?>
	<!-- -->
	<div id="feedback-test" class="ui middle aligned single-part height grid text container">
		<div class="middle aligned column">
			<?php 
			echo $message_success;
			$hide = "display: none !important;";
			?>
		</div>
	</div>
	<?php
		// envoi du mail 
		$to = "clement.baret@gmail.com";
		$subject = "⚠️️ Demande de contact ⚠️️  from ". $_POST['prenom'];

		$message="<html><head></head><body><p style='font-size:0.8rem'><i>" . $_POST['prenom'] . " souhaite qu'on le contacte</i> :</p><div style='background: #FFFFFF; box-shadow: 0px 1px 2px 0 rgba(34, 36, 38, 0.15); margin: 1rem 0em; padding: 1em 1em; border-radius: 0.28571429rem; border: 1px solid rgba(34, 36, 38, 0.15);'><p><u>Contact</u> : " . $_POST['prenom'] . "<br><u>Nom du restaurant</u> : " . $_POST['restaurant_name'] . "<br><u>Numéro de téléphone</u> : " . $_POST['telephone'] . "<br><u>Adresse mail</u> : " . $_POST['email'] . "</p></div><br><br><p style='font-size:0.8rem; color:#616161'><i>Ce message a été envoyé depuis le formulaire de contact accessible via la homepage.</i></p></body></html>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
		$header = "From: clement.baret@gmail.com";

		@mail($to,$subject,$message,$headers);
		}
		else{
	?>

	<!-- -->
	<div id="feedback-context-bot" class="ui grid text container" style="height: calc(100vh - 155.33px); <?php echo $hide; ?>" cf-context>
		<div class="column">
		</div>
	</div>

	<!-- -->
	<div id="feedback-context" class="ui no padding grid text container" style="height: 0px !important" cf-context>
		<div class="column">
			<form id="feedback" method="post" action="<?php site_url() ?>" cf-form-element>
			    <!-- Question prénom -->
			    <input name="prenom" type="text" cf-questions="Salut comment t'appelles-tu ?| Hello ! Comment t'appelles-tu ?">
			    <!-- Question nom du restaurant -->
			    <input type="text" name="restaurant_name" cf-questions="Enchanté {previous-answer} ! Tu souhaites donc inscrire ton restaurant, pourrais-tu me dire comment il s'appelle ?">
			    <!-- Question telephone -->
			    <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="telephone" cf-questions="Super, aurais-tu un numéro de téléphone sur lequel je pourrais te joindre ?" cf-error="Le numéro de téléphone n'est pas valide...">
			    <!-- Question email -->
			    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" cf-questions="Il me faudrait aussi une adresse mail au cas où." cf-error="L'adresse mail n'est pas valide...">
            </form>
		</div>
	</div>

	<script>
		var bot_img = "<?php echo get_template_directory_uri(); ?>/css/img/avatar/2.normal.svg";
		var user_img = ""
	</script>
	<?php
		}
	?>
</div>
<?php get_footer( '' ); ?>

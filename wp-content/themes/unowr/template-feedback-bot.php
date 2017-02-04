<?php
/*
Template Name: BOT feedback
*/
get_header(); ?>
</div>
	<?php 
		$message_success = '<div class="ui center aligned segment" style="padding: 25px !important"><img src="' . get_template_directory_uri() . '/css/img/avatar/4.neutral-thanks.svg" class="ui medium margin auto image"><h1  style="margin: 0 !important"><b>Merci ' . $_POST['prenom'] . '!</b></h1><p style="margin: 0 !important"><br>Ton message a bien été envoyé.</p><br><p>Nous allons regarder avec intérêt ton message afin de nous améliorer et te proposer le meilleur service possible !</p><p>Je te propose de retourner sur la <a href="' . get_home_url() .'">homepage</a> :)</p></div>'; 
	?>

	<?php
		if (isset($_POST['prenom']) && isset($_POST['message'])) {
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
		$subject = "⚠️️  Feedback ⚠️️  from ". $_POST['prenom'];

		$message="<html><head></head><body><p style='font-size:0.8rem'><i>" . $_POST['prenom'] . " " . $_POST['nom'] . " a dit</i> :</p><div style='background: #FFFFFF; box-shadow: 0px 1px 2px 0 rgba(34, 36, 38, 0.15); margin: 1rem 0em; padding: 1em 1em; border-radius: 0.28571429rem; border: 1px solid rgba(34, 36, 38, 0.15);'>" . $_POST['message'] . "</div><br><br><p style='font-size:0.8rem; color:#616161'><i>Ce message a été envoyé depuis le formulaire de remarque / suggestion accessible via la homepage.</i></p></body></html>";
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
			    <input name="prenom" type="text" cf-questions="Salut comment t'appelles-tu ?| Hello ! Quel est ton prénom ?">
			    

				<!-- test select + date picker -->
                      <select cf-questions="Do you think conversational forms will replace web forms in the future?" name="opinion" id="opinion" class="form-control">
                        <option></option>
                        <div class="ui calendar" id="example1"><div class="ui button">Select date</div></div>
                        <option>Euh....</option>
                      </select>


			    <!-- Question message -->
			    <input value="okay" name="message" type="text" cf-questions="Ok {previous-answer}, de quoi souhaites-tu nous faire part ?| Hello {previous-answer} ! Quelles sont tes remarques ? :)">
            </form>
		</div>
	</div>

	<script>
		var bot_img = "<?php echo get_template_directory_uri(); ?>/css/img/avatar/2.normal.svg";
	</script>
	<?php
		}
	?>
</div>

<?php get_footer( '' ); ?>

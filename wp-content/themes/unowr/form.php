<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/semantic.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:200,300,400" rel="stylesheet">
	</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/semantic.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<div class="ui text container grid">
	<form class="ui form" style="width:100%" id="form" action="#form" method="post">
		
		<div class="required field">
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>">
		</div>


		<div class="required field">
			<label for="prenom">nom</label>
			<input type="text" name="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : '' ?>">
		</div>

		<div class="required field">
			<label for="message">Message</label>
			<textarea name="message"><?php echo isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
		</div>
		
		<input class="ui positive button" type="submit" name="envoyer">

		<?php
			if (empty($_POST['envoyer'])) {
				echo "";
			}
			elseif (empty($_POST['prenom'])) {
				echo 'Le prénom est requis';
			}
			elseif (empty($_POST['nom'])) {
				echo 'Le nom est requis';
			}
			elseif (empty($_POST['message'])) {
				echo 'Le message est requis';
			}
			else{
				echo 'Merci votre message a bien été envoyé';
			}
		?>
	</form>
</div>
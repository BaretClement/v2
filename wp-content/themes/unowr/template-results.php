<?php
/* 
Template Name: resultats
*/

get_header('home'); ?>

<div id="message_results_page" class="ui two column stackable grid container; <?php echo $hidden ?>">
	<div class="bottom aligned column" style="padding-bottom: 0 !important">
		<img src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/4.neutral-thanks.svg" class="ui large right floated rounded image" style="margin: auto !important">
	</div>
	<div class="middle aligned column">
		<div class="talk-bubble tri-right left-in">
  			<div class="talktext">
    			<p>Voici les restaurant qui devraient te plaire !</p>
  			</div>
		</div>
	</div>
</div>
</div>

<?php if (isset($_POST["json"])) { ?>

<?php
	$json = json_decode(stripslashes(html_entity_decode($_POST["json"])));
	$resto = $json->resto;

	// echo"<pre>";
	// 	var_dump($json, "\0");
	// echo"</pre>";
?>

<style type="text/css">
	p .text{
		font-family: 'Lato', sans-serif;
		font-size: 21px;
		font-weight: 300;
	}
	#title.left.floated.column{
		padding-left: 20%;
	}
	#title.right.floated.column{
		padding-right: 20%;
	}
	.first-content{
		padding-right: 15px;
	}
	#title.right.floated{
		padding-left: 15px;
	}
	#second-content{
	}
	.first-content::before{
		font-size: 45px;
	}
	.result-content-0::before{
		content: "01";
	}
	.result-content-1::before{
		content: "02";
	}
	.result-content-2::before{
		content: "03";
	}
	.category{
		font-family: 'Lato', sans-serif;
		font-size: 1.5rem;
		font-weight: 300 !important;
		margin-bottom: 15px;
		text-transform: uppercase;
	}
	.category{
		color: #F44336;
	}
	.title h2{
		font-family: 'Roboto', sans-serif;
		font-size: 2.5rem;
		font-weight: 900;
		text-transform: uppercase;
	}
	.text p{
		margin-top: 15px;
	}
	#button{
		margin-top: 25px;
	}
	.green.button{
		background: #009688 !important;
		color: #FFFFFF;
	}
	.white{
		background: #FFFFFF;
	}

	.full.height.row{
		height: 100vh;
	}

	.ui.vertical.stripe {
    padding: 0 !important;
	}

	.row{
		margin-top: 50px;
		margin-bottom: 50px;
	}
	
	@media only screen and (max-width: 767px) {
		#title.column{
			
		}
		.first-content::after{
			font-family: 'Roboto', sans-serif;
			font-weight: 900;
			position: relative;
			font-size: 100px;
			bottom: -60px;
			left: 100px !important;
			color: rgba(0, 0, 0, 0.05);
		}	
	}

</style>

	<?php for ($i=0; $i < count($json->resto); $i++) { ?>
		<!-- 01 -->
		<div class="ui vertical stripe segment container">
			<div class="ui middle aligned stackable grid">
			<div class="first-part row">
				<div id="title" class="middle aligned eight wide column">
					<div id="first-result" class="first-content result-content-<?php echo $i; ?>">
						<div class="title"><h2><?php echo $json->resto[$i]->title ?></h2></div>
						<div class="ui mini tag label"><? echo $json->resto[$i]->category; ?></div>  <div class="ui mini tag label"><? echo $json->resto[$i]->subcategory; ?></div>
						<div class="text"><p>Prix moyen : <b><?php echo $json->resto[$i]->prix_moyen;  ?>€</b></p></div>
						<div class="text"><p><?php echo $json->resto[$i]->content ?></p></div>
						

						<form method="post" action="<?php echo get_home_url() ?>/confirmation">
							<input type="hidden" name="resto" value="<?php echo htmlspecialchars(json_encode($json->resto[$i])); ?>">
							<input type="hidden" name="info" value="<?php echo htmlspecialchars(json_encode($json->info)); ?>">
							<button id="button" name="resa" class="ui black button">Réserver gratuitement</button>
						</form>
					</div>
				</div>
				
				<div id="second-content" class="eight wide middle aligned column"><img src="<?php echo $json->resto[$i]->image ?>" class="margin auto fluide image"></div>
			</div>
		</div>
	</div>
		<!-- 01 -->

	<?php } ?>

<?php }elseif (isset($_POST["resto"])) {  ?>

<div class="ui container">
	<?php 
		echo $message_success = '<div class="ui center aligned segment" style="padding: 25px"><img src="' . get_template_directory_uri() . '/css/img/avatar/4.neutral-thanks.svg" class="ui small margin auto image"><h1  style="margin: 0 !important"><b>Merci ' . $_POST['name'] . '!</b></h1><p style="margin: 0 !important"><br>Ta demande de contact a bien été envoyée.</p><br><p>L' . "'" . 'intérêt que tu portes à <b>UNOWR</b> compte énormément.<br>Nous te recontacterons très rapidement !</p><p>En attendant, je te propose de retourner sur la <a href="' . get_home_url() .'">homepage</a> :)</p></div>'; 
	?>
</div>
<?php
	$resto = json_decode(stripslashes(html_entity_decode($_POST["resto"])));
    $info = json_decode(stripslashes(html_entity_decode($_POST["info"])));

	// envoi du mail 
	$to = "clement.baret@gmail.com"; // wp@unowr.fr
	
	$subject = "resa from ". $_POST['name'];

	$message = "Restau";
	$message .= "title:" . $_POST['title'] . "\n";
	$message .= "guid:" . $_POST['guid'] . "\n";
	$message .= "prenom_du_contact:" . $_POST['prenom_du_contact'] . "\n";
	$message .= "nom_du_contact:" . $_POST['nom_du_contact'] . "\n";
	$message .= "adresse:" . $_POST['adresse'] . "\n";
	$message .= "code_postal:" . $_POST['code_postal'] . "\n";
	$message .= "ville:" . $_POST['ville'] . "\n";
	$message .= "telephone:" . $_POST['telephone'] . "\n";
	$message .= "email:" . $_POST['email'] . "\n";
	$message .= "category:" . $_POST['category'] . "\n";
	$message .= "subcategory:" . $_POST['subcategory'] . "\n";
	$message .= "ambiances:" . $_POST['ambiances'] . "\n";
	$message .= "\n";
	$message .= "User";
	$message .= "question:" . $_POST['question-index'] . "\n";
	$message .= "prix_moyen:" . $_POST['prix_moyen'] . "\n";
	$message .= "agenda:" . $_POST['agenda'] . "\n";
	$message .= "type_de_cuisine:" . $_POST['type_de_cuisine'] . "\n";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
	$headers = "From: clement.baret@gmail.com";

	mail($to, $subject, $message, $headers);
	}

	else{

    echo"<pre>";
        var_dump($resto);
        var_dump($info);
    echo"</pre>";
?>
<?php }  ?>
<div class="ui inverted vertical stripe segment" style="padding: 50px 0 50px 0 !important">
	<div class="ui grid container">
		<div class="center aligned column">
			<p>Si aucun restaurant ne te convient, tu peux essayer à nouveau.<br>
			Nous te proposerons d'autres restaurants !</p>
			<a href="<?php echo get_template_directory_uri(); ?>/rechercher-un-restaurant"><div class="ui button">Rechercher à nouveau</div></a>
		</div>
	</div>
</div>
<?php get_footer( '' ); ?>

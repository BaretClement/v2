<?php
/* 
Template Name: resultats
*/

get_header(); ?>

</div>

<?php
	if (isset($_POST["json"])) {
?>
<?php
	$json = json_decode(stripslashes(html_entity_decode($_POST["json"])));
	$resto = $json->resto;

	// echo"<pre>";
		// var_dump($json, "\0");
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
		padding: 100px;
	}
	.first-content::before{
		font-family: 'Roboto', sans-serif;
		font-weight: 900;
		position: relative;
		font-size: 250px;
		bottom: -80px;
		left: -100px;
		color: rgba(0, 0, 0, 0.05);
	}
	.first-content::after{
		font-family: 'Roboto', sans-serif;
		font-weight: 900;
		position: relative;
		font-size: 100px;
		bottom: -80px;
		left: 50px;
		color: rgba(0, 0, 0, 0.05);
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
		text-transform: uppercase;">
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
		<style>
			.result-content-<?php echo $i; ?>::after{
				content: "<?php echo $json->resto[$i]->prix_moyen;  ?>€";
			}
		</style>
		<!-- 01 -->
		<div class="ui two column stackable no padding grid">
			<div class="first-part height row">
				<div id="title" class="middle aligned left floated column">
					<div id="first-result" class="first-content result-content-<?php echo $i; ?>">
						<div class="category"><? echo $json->resto[$i]->category; ?><sub>/ <? echo $json->resto[$i]->subcategory; ?></sub></div>
						<div class="title"><h2><?php echo $json->resto[$i]->title ?></h2></div>
						<div class="text"><p><?php echo $json->resto[$i]->content ?></p></div>

						<form method="post" action="">
							<input type="hidden" name="resto" value="<?php echo htmlspecialchars(json_encode($json->resto[$i])); ?>">
							<input type="hidden" name="info" value="<?php echo htmlspecialchars(json_encode($json->info)); ?>">
							<button id="button" name="resa" class="ui red button">Réserver gratuitement</button>
						</form>
					</div>
				</div>
				
				<div id="second-content" class="middle aligned column"><img src="<?php echo get_template_directory_uri(); ?>/css/img/picture.svg" class="margin auto fluide image"></div>
			</div>
		</div>
		<!-- 01 -->
	<?php } ?>

<?php }elseif (isset($_POST["resto"])) {  ?>
send an email
<?php
	$resto = json_decode(stripslashes(html_entity_decode($_POST["resto"])));
    $info = json_decode(stripslashes(html_entity_decode($_POST["info"])));

    echo"<pre>";
        var_dump($resto);
        var_dump($info);
    echo"</pre>";
?>
<?php }  ?>
<?php get_footer( '' ); ?>

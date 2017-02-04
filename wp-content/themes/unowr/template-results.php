<?php
/* 
Template Name: resultats
*/

get_header(); ?>

</div>

<?php 
	$json = json_decode(stripslashes(html_entity_decode($_POST["json"])));

	echo"<pre>";
		var_dump($json, "\0");
	echo"</pre>";
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
	#first-result.first-content::before{
		content: "01";
	}
	#first-result.first-content::after{
		content: "<?php  ?>€";
	}
	#second-result.first-content::before{
		content: "02";
	}
	#second-result.first-content::after{
		content: "<?php  ?>€";
	}
	#third-result.first-content::before{
		content: "03";
	}
	#third-result.first-content::after{
		content: "<?php  ?>€";
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


	<!-- 01 -->
	<div class="ui two column stackable no padding grid">
		<div class="first-part height row">
			<div id="title" class="middle aligned left floated column">
				<div id="first-result" class="first-content">
					<div class="category"><?  ?><sub>/ Sous type de cuisine</sub></div>
					<div class="title"><h2><?php echo $title_1; ?></h2></div>
					<div class="text"><p>Simple & rapide, tu n'as qu'à répondre à une liste de questions pour trouver le restaurant idéal.<br> En plus, tu peux réserver gratuitement !</p></div>
					<div id="button" class="ui red button">Réserver gratuitement</div>
				</div>
			</div>
			
			<div id="second-content" class="middle aligned column"><img src="<?php echo get_template_directory_uri(); ?>/css/img/picture.svg" class="margin auto fluide image"></div>
		</div>
	</div>
	<!-- 01 -->

	<!-- 02 -->
	<div class="ui two column stackable no padding grid">
		<div class="first-part height row">
			<div id="title" class="middle aligned left floated column">
				<div id="second-result" class="first-content">
					<div class="category">Type de cuisine <sub>/ Sous type de cuisine</sub></div>
					<div class="title"><h2><?php echo $title_2; ?></h2></div>
					<div class="text"><p>Simple & rapide, tu n'as qu'à répondre à une liste de questions pour trouver le restaurant idéal.<br> En plus, tu peux réserver gratuitement !</p></div>
					<div id="button" class="ui red button">Réserver gratuitement</div>
				</div>
			</div>
			
			<div id="second-content" class="middle aligned column"><img src="<?php echo get_template_directory_uri(); ?>/css/img/picture.svg" class="margin auto fluide image"></div>
		</div>
	</div>
	<!-- 02 -->
	
	<!-- 03 -->
	<div class="ui two column stackable no padding grid">
		<div class="first-part height row">
			<div id="title" class="middle aligned left floated column">
				<div id="third-result" class="first-content">
					<div class="category">Type de cuisine <sub>/ Sous type de cuisine</sub></div>
					<div class="title"><h2><?php echo $title_3; ?></h2></div>
					<div class="text"><p>Simple & rapide, tu n'as qu'à répondre à une liste de questions pour trouver le restaurant idéal.<br> En plus, tu peux réserver gratuitement !</p></div>
					<div id="button" class="ui red button">Réserver gratuitement</div>
				</div>
			</div>
			
			<div id="second-content" class="middle aligned column"><img src="<?php echo get_template_directory_uri(); ?>/css/img/picture.svg" class="margin auto fluide image"></div>
		</div>
	</div>
	<!-- 03 -->
<?php get_footer( '' ); ?>

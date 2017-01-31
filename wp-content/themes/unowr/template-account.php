<?php
/*
Template Name: Account
*/

get_header(); ?>
</div>
	<div id="profile_page" class="ui text grid container" style="height: auto !important">

		<div class="column">

			<h1 class="align-center">Mon compte</h1>

			<div class="ui pointing secondary menu">
				<a class="item active" style="width: 50%;" data-tab="first">Mon profil</a>
				<a class="item" style="width: 50%;" data-tab="second">Modifier mes informations</a>
			</div>

			<div class="ui tab active" data-tab="first">	
				<div class="ui middle aligned column">
				
				<div class="ui items">
				<?php $user_info = wp_get_current_user(); ?>
					<div class="item">
						<div class="ui small image">
							<img src="/images/wireframe/image.png">
						</div>

						<div class="content">
							<div class="header">
								<?php echo $current_user->first_name; ?>
								<?php echo $user_info->last_name; ?><br>
							</div>
								<div class="meta">
									<span class="price">Identifiant : <?php echo $user_info->user_login; ?></span>
								</div>
							<div class="description">
								<p><?php echo $user_info->user_email; ?></p>
								<p><?php echo $user_info->telephone; ?></p>
								<p>
				    				<?php echo $user_info->adresse; ?>, 
				    				<?php echo $user_info->code_postal; ?>
				    				<?php echo $user_info->ville; ?>
								</p>
								<?php $redirect = site_url() ?>
								<p><a style="font-size: 0.8rem;" href="<?php echo wp_logout_url( $redirect ); ?>">Se déconnecter</a></p>
							</div>
						</div>
					</div>	
				</div>
					

				</div>
			</div>

			<div class="ui tab" data-tab="second">
				<div class="ui middle aligned column">
					<div class="ui form">
						<?php edit_user_form() ?>
					</div>
				</div> 
			</div>

		</div>
	</div>
</div>

<script>
$('.menu .item')
  .tab()
;
</script>

<?php get_footer( '' ); ?>

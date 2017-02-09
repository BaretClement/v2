<?php
/*
Template Name: search
*/

get_header(); ?>
</div>

<div class="ui grid container" cf-context>
	<div class="column">
		<form id="form" data-form="true">
			<input required type="text" cf-questions="" data-form="input" disabled="disabled"/>
			<select cf-questions="" name="opinion" id="opinion" data-form="select">
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>
			</select>
		</form>
	</div>
</div>

<style>
	.conversational-form--enable-animation .cf-button.animate-in:empty {
	   display: none !important;
	}
</style>

<script>
	var bot_img = "<?php echo get_template_directory_uri(); ?>/css/img/avatar/2.normal.svg";
	var ajax_url = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	var site_url = "<?php echo site_url(); ?>";
</script>

 

<?php get_footer( '' ); ?>

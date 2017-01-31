<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unowr
 */

get_header(); ?>

</div>
<div style="height: 400px; width: 100%; background: url(<?php the_field('post_illustration') ?>); background-size: cover; background-position: center"></div>
	
	<div id="blog" class="ui main container" style="padding-top: 5rem !important; padding-bottom: 7rem !important">
	
	    <div div class="align-center" style="width: 100%; height: auto">
		<?php
			$posttags = get_the_tags();
			if ($posttags) {
		  		foreach($posttags as $tag) {
		    		echo '<div class="ui tiny label">' .$tag->name. '</div>'; 
		  		}
			}
		?>
		</div>

		<div class="column">

	    	<h1 class="ui center aligned huge header" style="text-transform: uppercase;"><?php the_title(); ?></h1>
	
	    	<div class="ui horizontal divider"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div>
		</div>

		<div class="column">

		<?php
		echo '<h2>';
			the_field('introduction');
		echo '</h2>';

		// check if the flexible content field has rows of data
		if( have_rows('ajouter_un_bloc') ):

		     // loop through the rows of data
		    while ( have_rows('ajouter_un_bloc') ) : the_row();
		       
		        if( get_row_layout() == 'paragraphe' ):
		        	the_sub_field('paragraphe');

		        elseif( get_row_layout() == 'image' ): 
					echo '<div class="column"><img class="ui fluid image" src="'; 
		        		the_sub_field('image');
		        	echo '"/></div>';

		        elseif( get_row_layout() == 'image_et_texte' ): 
		        	echo '<div class="ui two column no padding stackable grid">';
						echo '<div class="middle aligned column">';
							echo '<img class="ui fluid image" src="'; 
		        				the_sub_field('image');
		        			echo '"/>';
		        		echo '</div>';

						echo '<div class="middle aligned column">';
		        			echo '<p>';
		        				the_sub_field('texte');
		        			echo '<p>';
		        		echo '</div>';
		        	echo '</div>';

				elseif( get_row_layout() == 'texte_et_image' ): 
		        	echo '<div class="ui mobile reversed two column no padding stackable grid">';
						echo '<div class="middle aligned column" style="padding-top: 0 !important">';
		        			echo '<p>';
		        				the_sub_field('texte');
		        			echo '<p>';
		        		echo '</div>';
						echo '<div class="middle aligned column" style="padding-top: 0 !important">';
							echo '<img class="ui fluid image" src="'; 
		        				the_sub_field('image');
		        			echo '"/>';
		        		echo '</div>';

		        	echo '</div>';

				elseif( get_row_layout() == 'mosaic' ):
					echo '<div class="ui three column stackable no padding grid">';
						echo '<div class="column">';
							echo '<img class="ui fluid image" src="';
								the_sub_field('image_1');
							echo '">';
						echo'</div>';
						echo '<div class="no padding column" style="margin: auto">';
							echo '<img class="ui fluid image" src="';
								the_sub_field('image_1');
							echo '">';
						echo'</div>';
						echo '<div class="middle aligned column">';
							echo '<img class="ui fluid image" src="';
								the_sub_field('image_1');
							echo '">';
						echo'</div>';
					echo '</div>';

				elseif( get_row_layout() == 'citation' ):
					echo '<div class="ui text container">';
					echo '<h3 class="ui header">';
  					echo '<i class="ui quote left icon"></i>';
					echo '<div class="content">';
						the_sub_field('citation');
  					echo '</div>';
					echo '</h3>';
					echo '</div>';

		        endif;

		    endwhile;

		else :

		    // no layouts found

		endif;

		?>
		</div>


		<div class="ui items">
			<div class="item">
				<a class="ui tiny image"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></a>

				<div class="middle aligned content">
					<div class="header"><?php the_author(); ?><br><span style="font-size: 0.7rem; text-transform: uppercase;">LE <?php the_date('j F Y') ?></span></div>
				</div>
			</div>
		</div>

		
		<div class="ui divider"></div>

		<div class="ui two column no padding grid">
				<div class="column small padding left floated ui"><?php echo previous_post_link('%link', '<div class="ui left floated segment" style="font-size: 0.8rem !important"><i class="left arrow icon"></i> Article précédent</div>') ?></div>
				<div class="column small padding right floated ui"><?php echo next_post_link('%link', '<div class="ui right floated segment" style="font-size: 0.8rem !important">Article suivant <i class="right arrow icon"></i></div>') ?></div>

		</div>
	
	</div>

</div>



<?php get_footer(); ?>


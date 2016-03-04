<?php get_header(); ?>

	<div id="page-div" class="row">
			<?php get_sidebar(); ?>
			<section id="post-content" class="eight columns">

				<?php if (! is_page( 'CONTATTO')) : ?>

						<?php if (have_posts()) : ?>
				  		 	 <?php while (have_posts()) : the_post(); ?>
				   	  	<h1> <?php the_title(); ?> </h1>
							 <div class="row"> 
				     	<?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
							 </div>
				   		<?php the_content(); ?>
				   	 	<div style="clear:both"></div>
				    	<?php endwhile; ?>
				    	<?php else : ?>
				    	<h2 class="center">Not Found</h2>
				    	<p class="center">Sorry, but you are looking for something that isn't here.</p>
				    	<?php get_search_form(); ?>
				    	<?php endif; ?>

				   <?php else : ?>


				   <h1>per contattarmi</h1>

					 <?php	echo do_shortcode('[contact-form-7 id="184" title="Modulo di contatto 1"]'); ?>



				   <?php endif; ?>

			</section>
	</div>
	<div class="row">
			
<?php get_footer(); ?>

	</div>

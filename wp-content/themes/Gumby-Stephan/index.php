<?php 
	//Includes the header.php template file from your current theme's directory
	get_header(); ?>

    <section id="posts-listings" class="row">
    	<div class="posts-listings-header"><h1>
		<?php if ( is_search() ) {?> Ricerca per 
				 <?php echo esc_html( get_search_query('', false) );		
			}  

		if  ( is_category() ) {
			  
				single_cat_title('', true );

			} 

		else  {

				single_month_title(' ', true);
			
			} 
				?> 

			</h1>
		</div>
		<div id="category">
		<?php if (have_posts()) : ?>
			  <?php while (have_posts()) : the_post(); ?>
			  <a href="<?php the_permalink(); ?>"><div id="img-category" class="twelve columns">
					    <div class="imgss">
	 						
				    			 <?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
				    	</div>
				    		<div id="title-and-exerpt">
				    			<div>
				    			<h3> <?php the_title(); ?></h3>		
								</div>
								<div class="content">
								<p>	<?php the_date(); ?></p>
								<?php the_excerpt() ?>
							</div>
						</div>
							
						</div>
				</a>


			  <?php endwhile; ?>
			  <?php else : ?>
			  <h2 class="center">Non trovato</h2>
			  <p class="center">Ci dispiace, ma stai cercando qualcosa che non è qui.</p>
			  <?php get_search_form(); ?>
			  <?php endif; ?>
		</div>

    </section>

    
<?php 
	//Includes the footer.php template file from your current theme's directory
	get_footer(); ?>	
    




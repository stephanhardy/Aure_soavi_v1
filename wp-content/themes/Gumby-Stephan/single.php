<?php get_header(); ?>
	<div id="post-content-single-div" class="row">
		
	
		<section id="post-content" class="eight columns">

			<?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
		    <h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
		    <div class="content">
			<p>	<?php the_date(); ?></p>									
		    <article class="post"><i class="icon-feather"></i><?php the_content(); ?></article>
		    </div>
		    <nav class="nav-single">
		      <h3 class="assistive-text">
		        <?php _e( 'Post navigation', 'twentytwelve' ); ?>
		      </h3>
		      <span class="nav-previous">
		      <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?>
		      </span> <span class="nav-next">
		      <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?>
		      </span>
		    </nav>
		    <!-- .nav-single -->
		    
		    <?php comments_template( '', true ); ?>
		    <?php endwhile; ?>
		    <?php else : ?>
		    <h2 class="alert center">Not Found</h2>
		    <p class="alert center">Sorry, but you are looking for something that isn't here.</p>
		    <?php get_search_form(); ?>
		    <?php endif; ?>

		</section>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>	
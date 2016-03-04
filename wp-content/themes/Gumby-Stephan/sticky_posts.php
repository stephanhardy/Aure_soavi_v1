<div id="sticky" class="container">
   <section id="sticky-posts" class="row">
	
		

    <?php
    // get sticky posts from DB
    $sticky = get_option('sticky_posts');
    // check if there are any
    if (!empty($sticky)) {
        // optional: sort the newest IDs first
        rsort($sticky);
        // override the query
        $args = array(
            'post__in' => $sticky
        );
        query_posts($args);
        // the loop
        while (have_posts()) {
             the_post(); ?>
        <div class="three columns">
        		<p>	<?php the_date(); ?></p>
			    	<?php the_post_thumbnail(); ?>
				<h3><?php the_title() ?></h3>
				<div class='content'>
					<?php the_excerpt() ?>

				</div>
		</div>
     <?php 

       } wp_reset_query();
    } ?>

   </section>
</div>

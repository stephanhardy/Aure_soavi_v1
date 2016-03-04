
	<?php
/*
Template Name: Home Page
*/
 get_header(); ?>

 <div class="container">
	<div class="parallax" gumby-parallax="0.5" gumby-supports="webp|../img/Aure_soavi_forest_scene_sans_texte1553x1000px.jpg" gumby-offset="64" id="one">
		<div class="container">	
							<div class="row">
								<div class="margin">
										<article id="homepagewidget" class="row">
                                            <h1>AURE SOAVI</h1>
<h2>Blog d'informazione e di critica musicale</h2>
												   
												    <?php // if ( !function_exists('dynamic_sidebar')
													// || !dynamic_sidebar('homepagewidget') ) : ?>
													<?php // endif; ?>
												
										</article>
								</div>
							</div>
		</div>
	</div>					
</div>

<!--
<section id="teasers" class="row">
 

   	<?php
$args = array(
		'post_type' => 'featured_posts',
		'posts_per_page' => '3',
		'orderby' => 'menu_order',
		'order' => 'ASC'
		);
	$home_articles = new WP_Query( $args );
	if( $home_articles->have_posts() ) {
		while( $home_articles->have_posts() ) {
			$home_articles->the_post();
			?>
			<div class="four columns">
	
			    <?php the_post_thumbnail(); ?>
				<h3><?php the_title() ?></h3>
				<div class='content'>
					<?php the_excerpt() ?>
				</div>
			</div>

			<?php

		}
	}wp_reset_query();
?>
  
</section> 

-->

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
        <a href="<?php the_permalink(); ?>">
        	<article class="four columns">
        		
			    <div class="post-thumbnail"	><?php the_post_thumbnail(); ?></div>
				<h2><?php the_title() ?></h2>
				<p>	<?php the_date(); ?></p>
				<div class='content'><?php the_excerpt() ?></div>

			</article>
		</a>
     <?php 

       } wp_reset_query();
    } ?>

   </section>
</div>









   <?php get_footer(); ?>

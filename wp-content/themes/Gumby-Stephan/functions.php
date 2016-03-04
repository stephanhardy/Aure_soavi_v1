<?php
 //add dynamic menu
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
		)
	);
}

//Support Gumby Dynamic Menus
class Walker_Page_Custom extends Walker_Nav_Menu {
/**
 * @see Walker::start_lvl()
 * @since 2.1.0
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param int $depth Depth of page. Used for padding.
 */

function start_lvl( &$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<div class='dropdown'><ul>\n";
	}


function end_lvl( &$output, $depth = 0, $args = Array())  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul></div><!--flare -->\n";
	}


}	

//Add support for featured images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(940);


//Add Sidebar Widget Area
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
'before_widget' => '<div class="before_widget">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

//Add Main Page Widget Area
register_sidebar(array('name'=>'homepagewidget',
'before_widget' => '<div class="centered thirteen columns">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

//Add Footer Widget Area
register_sidebar(array('name'=>'footer',
'before_widget' => '<section class="three columns">',
'after_widget' => '</section>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));


//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Add post formats (http://codex.wordpress.org/Post_Formats)
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));


// remove version info from head and feeds to reduce hacking attempts
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

//enable PHP in WP widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
if(strpos($html,"<"."?php")!==false){
        ob_start();
         eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
    return $html;
}
?>

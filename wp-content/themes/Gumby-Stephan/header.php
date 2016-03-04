<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]--><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Stephan Hardy">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<!-- Facebook Metadata /-->
<meta property="fb:page_id" content="" />
<meta property="og:image" content="" />
<meta property="og:description" content=""/>
<meta property="og:title" content=""/>

<!-- Google+ Metadata /-->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">

<!-- Gumby Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/gumby.css">

<!-- Main WordPress Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<script src="<?php bloginfo('stylesheet_directory'); ?>/bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>

<!-- Returns the Pingback XML-RPC file URL -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php 
//Fire the 'wp_head' action. Put this template tag immediately before </head> tag
 wp_head();
?> 

<?php 
//include your dynamic stylesheet
 include('style.php'); 
?>
</head>
<body>



	<div class="container logo_wp">
		<section id="header" >

			<!--
			<div class="row logo_wp">
				<div class="two columns logo_wp">
				<img src="<?php the_field('company_logo'); ?>">
				</div>
				<div class="seven columns push_two banner_wp">
				<img src="<?php the_field('company_banner'); ?>">
				</div>
			</div>
-->
			<div class="navbar"gumby-fixed="top" id="nav1" data target="top">
				<h1 class="three columns push_left"><a class="small" href="/">AURE SOAVI</a></h1>
				<!-- Toggle for mobile navigation, targeting the <ul> -->
 				 <a class="toggle" data-trigger=".navbar > ul" href="#"><i class="icon-menu"></i></a>
			     
				<!-- using @see Walker::start_lvl() for modifying the menu output see functions.php -->
 				 <?php wp_nav_menu( array( 'theme_location' => 'primary-menu','walker' => new Walker_Page_Custom,'menu_class' => 'ten columns pull_right','menu_id'=> 'navbar' ,'container'=> '','container_class' => '') ); ?>
			</div>	
        </section>

<!--
        <section id="slider">

        	<?php 
					//Add Conditional Slider to home page
					if(is_page('49-2')){ /*Check if visitor is on your desired page*/
					include('inc/slider.php');
					}
			?>
        </section>

-->  
    </div>
   

	
    
<!doctype html>  
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->  
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->  
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->  
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->  
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->  
<head>  	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
	<meta charset="<?php bloginfo( 'charset' ); ?>" />  
	<meta name="description" content="Keywords">  
	<meta name="author" content="Name">  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
	<!--=== LINK TAGS ===  
	<link href='http://fonts.googleapis.com/css?family=Leckerli+One|Titillium+Web:400,900' rel='stylesheet' type='text/css'>
    -->
	<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />  
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />  
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />  
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	
	<title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>  
	<!--=== WP_HEAD() ===-->  
	<?php wp_head(); ?>  
</head>  
<body <?php body_class(); ?>>  
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="container">
	<div id='header' class="ribbon">
		<h1>The <span class="little">Little</span> Cake Maker</h1>
	</div>
	
	<p>Lovely cakes for all</p>                    
	
	<div class="nuff-stars"></div>
	
	<?php get_sidebar(); ?>
    
</div>
<div id="content" class="container">
<?php

if (!is_admin()) {
	add_action( 'wp_enqueue_scripts', 'load_jquery' );	
}

function load_jquery() 
{
//  	wp_deregister_script('jquery');
//  	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js", false, null);
	wp_enqueue_script('jquery');	
}

define("THEME_DIR", get_template_directory_uri());  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator');  

// function enqueue_styles() {  
// 	/** REGISTER css/screen.css **/  
// 	wp_register_style( 'screen-style', THEME_DIR . '/css_path/screen.css', array(), '1', 'all' );  
// 	wp_enqueue_style( 'screen-style' );  
// }  
// add_action( 'wp_enqueue_scripts', 'enqueue_styles' );  

function enqueue_scripts() 
{  
	/** REGISTER HTML5 Shim **/  
// Probably a good idea but not now.
// 	wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );  
// 	wp_enqueue_script( 'html5-shim' );  
	
	wp_register_script( 'index-js', THEME_DIR . '/js/index.js', array( 'jquery' ), '1', false );  
	wp_enqueue_script( 'index-js' );  
}  
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>
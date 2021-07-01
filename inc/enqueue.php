<?php 


function butterfly_script() {


	// CSS Style
	wp_enqueue_style('butterfly_google_fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&display=swap');
	wp_enqueue_style('butterfly_css', get_theme_file_uri('./style.css'));

	// Owl Carousel Css style
	wp_enqueue_style('butterfly_owl', get_theme_file_uri('/src/owl.carousel.min.css'));


	//Jquery Script 
	
		# code...
	wp_enqueue_script('butterfly_jquery', get_theme_file_uri('/src/js/jquery-3.5.1.min.js'));
	
	
	wp_enqueue_script('butterfly_owl', get_theme_file_uri('/src/js/owl.carousel.min.js'), null, '1.0', true);


	wp_enqueue_script('butterfly_js', get_theme_file_uri('./main.js'), null, '1.0', true);
	// Sending Data To Javascript
	wp_localize_script('butterfly_js', 'butterflyUri', array(
		'root_uri' => get_site_url(),
		'theme_uri' => get_theme_file_uri()
	));
};


add_action('wp_enqueue_scripts', 'butterfly_script');
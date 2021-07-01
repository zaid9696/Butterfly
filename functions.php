<?php 

// All Js and CSS scripts
require get_stylesheet_directory() . '/inc/enqueue.php';

// Adding a custom hero scetion
require get_stylesheet_directory() . '/inc/storefront_homepage.php';

// Removing unwanted Action;
require get_stylesheet_directory() . '/inc/storefront_remove_actions.php';

// Editing product item 
require get_stylesheet_directory() . '/inc/storefront_product_item.php';

// Adding Services Section to homepage
require get_stylesheet_directory() . '/inc/storefront_services_homepage.php';

// Editing Footer 
require get_stylesheet_directory() . '/inc/storefront_footer.php';

// Shortcode for men page
require get_stylesheet_directory() . '/inc/storefront_men_category.php';

// Shortcode for women page
require get_stylesheet_directory() . '/inc/storefront_women_category.php';

// Shortcode for women page
require get_stylesheet_directory() . '/inc/storefront_single_page.php';


function webp_upload_mimes( $existing_mimes ) {
	// add webp to the list of mime types
	$existing_mimes['webp'] = 'image/webp';

	// return the array back to the function with our added mime type
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

// Enabling PHP code in Custom HTML widget 
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
// To enable shortcodes in the Text and Custom HTML widget 
add_filter('widget_text','do_shortcode',10);


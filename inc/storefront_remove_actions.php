<?php 

function storefront_remove_actions() {

	remove_action( 'homepage', 'storefront_product_categories', 20);

	remove_action( 'homepage', 'storefront_recent_products', 30);

	remove_action( 'homepage', 'storefront_popular_products', 50);


}


add_action('homepage', 'storefront_remove_actions');


/**
 * Disable sidebar on product pages in WooCoomerce.
 *
 */
 
function njengah_remove_sidebar( $is_active_sidebar, $index ) {              
 
    if( $index !== "sidebar-1" ) {
 
        return $is_active_sidebar;
 
    }
 
    if( ! is_product() ) {
 
        return $is_active_sidebar;
 
    }
 
    return false;
 
}
 
add_filter( 'is_active_sidebar', 'njengah_remove_sidebar', 10, 2 );
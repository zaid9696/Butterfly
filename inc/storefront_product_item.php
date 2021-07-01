<?php 


function storefront_product_item() {

	 global $product;

	$terms = get_the_terms( get_the_ID(), 'product_cat' );

foreach ( $terms as $term ){
    if ( $term->parent == 0 ) {
        $parentCat = $term->name;
    }
}
	echo '<span class="short_description '. $parentCat .'">'. $product->short_description  .'</span>';
}

add_action('woocommerce_shop_loop_item_title', 'storefront_product_item', 11 );
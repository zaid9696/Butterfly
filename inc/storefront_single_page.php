<?php 

function customizing_single_product_summary_hooks(){
	remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
    add_action('woocommerce_single_product_summary','woocommerce_template_single_price', 21);
};

add_action('woocommerce_single_product_summary', 'customizing_single_product_summary_hooks', 2  );
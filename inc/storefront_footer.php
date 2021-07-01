<?php 

function storefront_footer_copyright() { ?>

	<div class="footer__copyright">
		By <a href="https://zaid-dev.com" target="_blank">Zaid</a>
	</div>

<?php	
}

function storefront_footer() {

 	remove_action('storefront_footer', 'storefront_credit', 20);
	add_action('storefront_after_footer', 'storefront_footer_copyright', 20);

};

add_action('init', 'storefront_footer');


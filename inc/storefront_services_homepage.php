<?php 
	
	global $post;
	$text = get_field('service_text_1');

function storefront_services_homepage() { ?>


		<div class="services">
		
			<div class="services__content">
				<img src="<?php echo get_field('service_icon_1') ?>" alt="service icon">
				<p><?php echo get_field('service_text_1') ?></p>
			</div>
			<div class="services__content">
				<img src="<?php echo get_field('service_icon_2') ?>" alt="service icon">
				<p><?php echo get_field('service_text_2') ?></p>
			</div>
			<div class="services__content">
				<img src="<?php echo get_field('service_icon_3') ?>" alt="service icon">
				<p><?php echo get_field('service_text_3') ?></p>
			</div>
			<div class="services__content">
				<img src="<?php echo get_field('service_icon_4') ?>" alt="service icon">
				<p><?php echo get_field('service_text_4') ?></p>
			</div>
			
		</div>

		

<?php
	
};

add_action( 'homepage', 'storefront_services_homepage', 75);
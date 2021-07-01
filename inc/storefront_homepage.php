<?php 

function butterfly_storefront_homepage() {  ?>

		<?php 
				$category_women = get_term_meta(17 , 'thumbnail_id', true);
				$category_women_thumbnail = wp_get_attachment_url($category_women);
				$category_women_name = get_term(17, 'product_cat', ARRAY_A);
				$category_women_link = get_site_url() . '/index.php/women-products';

				$category_men = get_term_meta(18 , 'thumbnail_id', true);
				$category_men_thumbnail = wp_get_attachment_url($category_men);
				$category_men_name = get_term(18, 'product_cat', ARRAY_A);
				$category_men_link = get_site_url() . '/index.php/men-products';

			 ?>

		</main>
			</div> <!-- #primary -->
				</div>	<!-- .col-full -->

		<div class="hero">

			<div class="hero__category hero__category-women" style="background-image: url(<?php echo $category_women_thumbnail ?>);">


				<div class="hero__category-content">
				<h2 class="hero__category-title"><?php echo $category_women_name['name'] ?></h2>

				<a class="hero__category-link" href='<?php echo $category_women_link ?>'>Shop now</a>
					
				</div>

				
			</div>
			<div class="hero__category hero__category-men" style="background-image: url(<?php echo $category_men_thumbnail ?>);">
				<div class="hero__category-content">

					<h2 class="hero__category-title"><?php echo $category_men_name['name'] ?></h2>

					<a class="hero__category-link" href='<?php echo $category_men_link ?>'>Shop now</a>
				</div>	
			</div>
		</div>

	<div class="col-full">
			<div class="content-area">
				<div class="site-main">

 <?php 

};


add_action('homepage', 'butterfly_storefront_homepage', 15);
<?php 


function storefront_men_category() {

	$cats = get_categories(array(

		'parent' => 18,
		'hide_empty' => 0,
		'taxonomy' => 'product_cat'

	) ); ?>

	<div class="category-intro category-intro-men " style="background-image: url(<?php echo get_field('men_category_cover'); ?>);">
			<h1><?php echo get_field('men_category_text'); ?></h1>
	</div>

	<?php
	echo "<div class='category-slider'>";
	echo "<h2>Browse By Category</h2>";
	echo "<div class='owl-carousel owl-theme'>";
	foreach ($cats as $cat) {
		$category_men = get_term_meta($cat->term_id , 'thumbnail_id', true);
		$category_men_thumbnail = wp_get_attachment_url($category_men);
		$category_men_link = get_term_link($cat->term_id, 'product_cat');
		
   		echo '<div class="item owlCarouselz">'; ?>

   		<a href="<?php echo $category_men_link  ?>">
   			<div class="owlCarouselz__slide owlCarouselz__slide-men" style="background-image: url(<?php echo $category_men_thumbnail ?>);">
   				<h3><?php echo $cat->name ?></h3>
   			</div>
   		</a>
   			
   		<?php
   		echo '</div>';
	} 


  echo '</div>';
  echo '</div>';
	
}

add_shortcode( 'menproducts', 'storefront_men_category' );

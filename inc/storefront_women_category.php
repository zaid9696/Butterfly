<?php 


function storefront_women_category() {

	$cats = get_categories(array(

		'parent' => 17,
		'hide_empty' => 0,
		'taxonomy' => 'product_cat'

	) ); ?>

	<div class="category-intro category-intro-women" style="background-image: url(<?php echo get_field('women_category_cover'); ?>);">
			<h1><?php echo get_field('women_category_text'); ?></h1>
	</div>

	<?php
	echo "<div class='category-slider'>";
	echo "<h2>Browse By Category</h2>";
	echo "<div class='owl-carousel owl-theme'>";
	foreach ($cats as $cat) {
		$category_women = get_term_meta($cat->term_id , 'thumbnail_id', true);
		$category_women_thumbnail = wp_get_attachment_url($category_women);
		$category_women_link = get_term_link($cat->term_id, 'product_cat');
		
   		echo '<div class="item owlCarouselz">'; ?>

   		<a href="<?php echo $category_women_link;  ?>">
   			<div class="owlCarouselz__slide owlCarouselz__slide-women" style="background-image: url(<?php echo $category_women_thumbnail ?>);">
   				<h3><?php echo $cat->name ?></h3>
   			</div>
   		</a>
   			
   		<?php
   		echo '</div>';
	} 


  echo '</div>';
  echo '</div>';
	
}

add_shortcode( 'womenproducts', 'storefront_women_category' );

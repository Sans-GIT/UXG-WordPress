<?php
/**
 	* Template Name: Blog Listing Page
 	*
 	* @package Uxg
*/
get_header();
?>
	<section id="uxg-content">
		<?php include('template-parts/bloglistingbanner.php') ?>
		<?php
			// $categories = get_categories();
			$index = 0;
			// if( $categories ) {
				// foreach($categories as $category) {
		?>
		<div id="category<?php echo $index ;?>" class="uxgblogscat">
			<div class="uxgblogs uxgblogs--listing">
				<div class="uxgblogs__inner">
					<?php 
						// echo get_recent_posts($category->term_id, 0, 6); 
						echo get_all_posts(0, 0, 6); 
					?>
				</div>
			</div>
			<?php include('template-parts/search.php') ?>
			<div class="uxgblogs uxgblogs--listing">
				<div class="uxgblogs__inner">
					<?php 
						// echo get_recent_posts($category->term_id, 6, 12); 
						echo get_all_posts(0, 6, 12); 
					?>
					<!-- <button class="btn btn--trans">View More</button> -->
				</div>
			</div>	
		</div>
		<?php
					// $index++;
				// }
			// }
		?>
		<?php
			$card_component_required = get_field('2_card_component_required');
            if( $card_component_required ) {
		?>
		<?php include('template-parts/engagement.php') ?>
		<?php 
			}
		?>
		<?php include('template-parts/contactus.php') ?>
		<?php include('template-parts/contactuspop.php') ?>
	</section>
<?php get_footer(); ?>
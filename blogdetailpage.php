<?php
/**
 	* Template Name: Blog Detail Page
 	* Template Post Type: post
 	* @package Uxg
*/
get_header();
?>
	<section id="uxg-content">
		<?php include('template-parts/blogcontent.php') ?>
		<?php
			$card_component_required = get_field('2_card_component_required');
            if( $card_component_required ) {
		?>
		<?php include('template-parts/latestblogs.php') ?>
		<?php include('template-parts/engagement.php') ?>
		<?php 
			}
		?>
		<?php include('template-parts/contactus.php') ?>
		<?php include('template-parts/contactuspop.php') ?>
	</section>
<?php get_footer(); ?>
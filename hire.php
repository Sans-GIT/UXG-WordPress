<?php
/**
 	* Template Name: Hire
 	*
 	* @package Uxg
*/
get_header();
?>
	<section id="uxg-content">
		<?php include('template-parts/banner.php') ?>
		<?php
			$card_component_required = get_field('3card_component_required');
            if( $card_component_required ) {
		?>
		<?php include('template-parts/benefit.php') ?>
		<?php 
			}
		?> 
		<?php
			$service_component_required = get_field('service_component_required');
            if( $service_component_required ) {
		?>
		<?php include('template-parts/services.php') ?>
		<?php 
			}
		?> 
		<?php
			$why_us_component_required = get_field('why_us_component_required');
            if( $why_us_component_required ) {
		?>
		<?php include('template-parts/business.php') ?>
		<?php 
			}
		?> 
		<?php
			$technology_expertise_component_required = get_field('technology_expertise_component_required');
            if( $technology_expertise_component_required ) {
		?>
		<?php include('template-parts/technologyexpertise.php') ?>
		<?php 
			}
		?> 
		<?php
			$odc_component_required = get_field('odc_component_required');
            if( $odc_component_required ) {
		?>
		<?php include('template-parts/odc.php') ?>
		<?php 
			}
		?> 
		<?php
			$industry_expert_component_required = get_field('industry_expert_component_required');
            if( $industry_expert_component_required ) {
		?>
		<?php include('template-parts/industryexpert.php') ?>
		<?php 
			}
		?>
		<?php
			$approach_component_required = get_field('approach_component_required');
            if( $approach_component_required ) {
		?>
		<?php include('template-parts/approach.php') ?>
		<?php 
			}
		?>
		<?php include('template-parts/search.php') ?>
		<?php include('template-parts/latestblogs.php') ?>
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
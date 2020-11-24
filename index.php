<?php
/**
 	* The main template file.
 	*
 	* This is the most generic template file in a WordPress theme
 	* and one of the two required files for a theme (the other being style.css).
 	* It is used to display a page when nothing more specific matches a query.
 	* E.g., it puts together the home page when no home.php file exists.
 	* Learn more: http://codex.wordpress.org/Template_Hierarchy
 	*
 	* @package Uxg
*/
get_header(); ?>
	<section id="uxg-content">
		<?php include('template-parts/homebannercarosel.php') ?>
		<?php include('template-parts/odc.php') ?>
		<?php include('template-parts/homecost.php') ?>
		<?php include('template-parts/homekeytech.php') ?>
		<?php include('template-parts/business.php') ?>
		<?php include('template-parts/homework.php') ?>
		<?php include('template-parts/homeplan.php') ?>
		<?php include('template-parts/homehire.php') ?>
		<?php include('template-parts/search.php') ?>
		<?php include('template-parts/hometestimonial.php') ?>
		<?php include('template-parts/latestblogs.php') ?>
		<?php include('template-parts/homeguests.php') ?>
		<?php include('template-parts/contactus.php') ?>
		<?php include('template-parts/contactuspop.php') ?>
	</section>
<?php get_footer(); ?>
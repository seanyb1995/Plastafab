<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<!--about page banner-->
		<section class="home-grid">
			<div class="background">
			</div>
			<!--home banner title -->
			<div class="title">
				<?php post_content(5); ?>
				<button class="fill">View our products</button>
			</div>
			<div class="box-upper">
			</div>
			<div class="box-lower">
			</div>
		</section>
		<!--our story seciton-->
		<section class="about-grid">
			<div class="box-left">
				<?php post_content(11);?>
			</div>
			<div class="box-right">
			</div>
		</section>
		<!--employee section-->
		<section class="employee-grid">
			<div class="employee-heading">
				<?php post_content(318); ?>
			</div>
			<div class="employee-1">
				<div class="employee-portrait">
				</div>
				<?php post_content(321); ?>
			</div>
			<div class="employee-2">
				<div class="employee-portrait">
				</div>
				<?php post_content(323); ?>
			</div>
			<div class="employee-3">
				<div class="employee-portrait">
				</div>
				<?php post_content(326); ?>
			</div>
		</section>
		<!--location and opening hours section-->
		<section class="location-hours-grid">
			<div class="location">
				<?php post_content(331); ?>
			</div>
			<div class="hours">
				<?php post_content(334); ?>
				<?php post_table_hours(334); ?>
				<p>08 9258 3377</p>
			</div>
		</section>
		<!--contact us-->
		<section class="contact-grid">
		  <div class="contact">
			  <?php post_content(111); ?>	
			  <a href="https://plastafab-v3-seanyb1995.c9users.io/contact/"><button class="fill">Contact us</button></a>
		  </div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

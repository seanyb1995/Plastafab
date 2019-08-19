<?php
/**
 * Template Name: Die Cutting
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="die-cutting-grid">
			<div class="die-cutting-heading">
				<?php post_content(384); ?>
			</div>
			<div class="box-left">
				<?php post_content(393); ?>	
			</div>
			<div class="box-right">
		</section>
		<!--contact us-->
		<section class="contact-grid">
		  <div class="contact">
			  <?php post_content(111); ?>	
			  <button class="fill">Contact us</button>
		  </div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

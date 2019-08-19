<?php
/**
 * Template Name: Full Colour Printing 
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="full-colour-printing-grid">
			<div class="full-colour-printing-heading">
				<?php post_content(375); ?>
			</div>
			<div class="box-left">
				<?php post_content(378); ?>	
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

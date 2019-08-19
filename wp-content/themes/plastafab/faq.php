<?php
/**
 * Template Name: Faq
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!--faq page-->
		<section class="faq-grid">
			<div class="faq-heading">
			  <?php post_content(13); ?>	
			</div>
			<div class="faq-questions">
			  <?php post_content(354); ?>	
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

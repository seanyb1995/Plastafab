<?php
/**
 * Template Name: Specifications
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!--specification banner-->
			<section class="home-grid">
				<div class="background">
				</div>
				<!--specification banner title -->
				<div class="title">
					<?php post_content(5); ?>
					<button class="fill">View our products</button>
				</div>
				<div class="box-upper">
				</div>
				<div class="box-lower">
					
				</div>
			</section>
			<!--specificaiton heading-->
			<section class="specifications-grid">
				<div class="specifications-heading">
					<?php post_content(181); ?>
				</div>
				<div class="box-left">
					<?php post_content(183); ?>
				</div>
				<div class="box-right">
				</div>
				<!--artwork information-->
				<div class="artwork-information">
					<?php post_content(189); ?>
				</div>
				<div class="specification-information">
					<?php
					post_content(196);
					post_table_specifications(196);
					echo '<p> All sizes are finished trimmed sizes </p>';
					post_table_mechanisms(196);
					// post_table_hole(196);
					?>
				</div>
				<div class="sales-information-heading">
					<?php post_content(205); ?>
				</div>
				<div class="sales-information-left">
				<?php post_content(208); ?>	
				</div>
				<div class="sales-information-right">
				<?php post_content(214); ?>	
				</div>
			</section>
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

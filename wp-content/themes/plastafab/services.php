<?php
/**
 * Template Name: Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!--services banner-->
			<section class="home-grid">
				<div class="background">
				</div>
				<!--home banner title -->
				<div class="title">
					<?php post_content(5); ?>
					<button class="fill">View our services</button>
				</div>
				<div class="box-upper">
				</div>
				<div class="box-lower">
				</div>
			</section>
			<section name="scroll" class="services-grid">
				<!--services heading-->
				<div class="services-heading">
					<?php post_content(58); ?>
				</div>
				<!--manufacturing service-->
				<div class="services-encapsulating-left">
				</div>
				<div class="services-encapsulating-right">
				<?php post_content(292); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/encapsulating/"><button class="fill">Read more</button></a>
				</div>
				<div class="services-printing-left">
				</div>
				<!--full colour printing service-->
				<div class="services-printing-right">
				<?php post_content(295); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/full-colour-printing/"><button class="fill">Read more</button></a>
				</div>
				<!-- alteration service-->
				<div class="services-alteration-left">
				</div>
				<div class="services-alteration-right">
				<?php post_content(297); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/die-cutting/"><button class="fill">Read more</button></a>
				</div>
				<div class="services-packaging-left">
				</div>
				<!--packaging service-->
				<div class="services-packaging-right">
				<?php post_content(299); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/packaging/"><button class="fill">Read more</button></a>
				</div>
				<!--screen printing service -->
				<div class="services-screen-left">
				</div>
				<div class="services-screen-right">
				<?php post_content(301); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/screen-printing/"><button class="fill">Read more</button></a>
				</div>
				<!--stamping and embossing service-->
				<div class="services-stamp-left">
				</div>
				<div class="services-stamp-right">
				<?php post_content(303); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/stamping-and-embossing/"><button class="fill">Read more</button></a>
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

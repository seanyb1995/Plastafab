<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<!--home page banner-->
		<section class="home-grid">
			<div class="background">
			</div>
			<!--home banner title -->
			<div class="title">
				<?php post_content(7); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/products/"><button class="fill">View our products</button></a>
			</div>
			<div class="box-upper">
			</div>
			<div class="box-lower">
			</div>
		</section>
		<!--what we do-->
		<section class="wwd-grid">
			<div class="wwd-heading">
				<?php post_content(58); ?>
			</div>
			<!--specialise in stationery, packaging and promotional products-->
			<div class="service-spp">
				<?php post_content(62); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/services/"><button class="fill">Read more</button></a>
			</div>
			<!--die cutting, screen printing and more-->
			<div class="service-cpm">
				<?php post_content(68); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/services/"><button class="fill">Read more</button></a>
			</div>
			<!--stamping and embossing-->
			<div class="service-se">
				<?php post_content(70); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/services/"><button class="fill">Read more</button></a>
			</div>
		</section>
		<!--about us-->
		<section class="about-grid">
			<div class="about-heading">
				<?php post_content(72); ?>
			</div>
			<div class="box-left">
				<?php post_content(74); ?>
				<a href="https://plastafab-v3-seanyb1995.c9users.io/about/"><button class="fill">Read more</button></a>
			</div>
			<div class="box-right">
				
			</div>
		</section>
		<!--testiominals-->
		<section class="testimonial-grid">
			<div class="testimonial-heading">
				<?php post_content(77); ?>	
			</div>
			<!--kapture photography testimonial-->
			<div class="testimonial-1">
				<div class="testimonial-quote">
					<?php post_content(79); ?>
				</div>
			</div>
			<!--scott printing testimonial-->
			<div class="testimonial-2">
				<div class="testimonial-quote">
					<?php post_content(93); ?>
				</div>
			</div>
			<!--office national canning vale testimonial-->
			<div class="testimonial-3">
				<div class="testimonial-quote">
					<?php post_content(98); ?>
				</div>
			</div>
		</section>
		<section class="product-grid">
			<!--folder product showcase-->
			<div class="folders">
				<div class="product-title">
					<?php post_content(102); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 102;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
			</div>
			<!--slip case product showcase-->
			<div class="slip-cases">
				<div class="product-title">
					<?php post_content(113); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 113;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
			</div>
			<!--divider product showcase-->
			<div class="dividers">
				<div class="product-title">
					<?php post_content(117); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 117;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
			</div>
			<!--case product showcase-->
			<div class="cases">
				<div class="product-title">
					<?php post_content(119); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 119;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
			</div>
			<!--ring binder product showcase-->
			<div class="ring-binders">
				<div class="product-title">
					<?php post_content(121); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 121;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
			</div>
			<!--wallet product showcase-->
			<div class="wallets">
				<div class="product-title">
					<?php post_content(123); ?>	
				</div>
				<div class="product-portrait">
					<?php
						$post = 123;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
				</div>
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

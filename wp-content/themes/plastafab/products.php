<?php
/**
 * Template Name: Products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="products-grid">
				<!--products banner-->
				<div class="left-box"></div>
				<div class="right-box">
					<div class="text">
						<?php post_content(7); ?>
						<button class="slide">Search Products</button>
					</div>
				</div>
				<!--vinyl products-->
				<div name="scroll" class="vinyl-text">
					<?php post_content(150); ?>
					<a href="https://plastafab-v3-seanyb1995.c9users.io/vinyl/"><button class="fill">Read more</button></a>
				</div>
				<div class="vinyl-image">
					<a href="https://plastafab-v3-seanyb1995.c9users.io/vinyl/">
					<?php
					$post = 150;
					if(has_post_thumbnail($post)){
						the_post_thumbnail();
					}
					?>
					</a>
				</div>
				<!--polypropylene products-->
				<div class="polypropylene-text">
					<?php post_content(156); ?>
					<a href="https://plastafab-v3-seanyb1995.c9users.io/polypropylene/"><button class="fill">Read more</button></a>
				</div>
				<div class="polypropylene-image">
					<a href="https://plastafab-v3-seanyb1995.c9users.io/polypropylene/">
					<?php
					$post = 156;
					if(has_post_thumbnail($post)){
						the_post_thumbnail();
					}
					?>	
					</a>
				</div>
				<!--bound & casemade products-->
				<div class="bound-casemade-text">
					<?php post_content(158); ?>
					<a href="https://plastafab-v3-seanyb1995.c9users.io/bound-and-casemade/"><button class="fill">Read more</button></a>
				</div>
				<div class="bound-casemade-image">
					<a href="https://plastafab-v3-seanyb1995.c9users.io/bound-and-casemade/">
					<?php
					$post = 158;
					if(has_post_thumbnail($post)){
						the_post_thumbnail();
					}
					?>
					</a>
				</div>
			</section>
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

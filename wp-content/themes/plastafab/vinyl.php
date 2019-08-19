<?php
/**
 * Template Name: Vinyl
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plastafab
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<!--vinyl banner-->
		<section class="products-grid">
		<!--vinyl banner-->
		<div class="left-box"></div>
		<div class="right-box">
			<div class="text">
				<?php post_content(161); ?>
				<button class="slide">View products</button>
			</div>
		</div>
		</section>
		  <!--product list-->
		  <section name="scroll" class="vinyl-list-grid">
			<div class="vinyl-heading">
				<?php post_content(168); ?>	
			</div>	
			<div class="product-list">
			<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
				<?php
					if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 
						echo '<select name="category"><option value="">All</option>';
						foreach ( $terms as $term ) :
							echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
						endforeach;
						echo '</select>';
					endif;
				?>
				<button class="fill">Apply filter</button>
				<input type="hidden" name="vinyl" value="11">
				<input type="hidden" name="action" value="myfilter">
			</form>
			<div id="response"></div>
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

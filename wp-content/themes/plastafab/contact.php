<?php
/**
 * Template Name: Contact
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
			<section class="contact-page-grid">
				<div class="contact-left">
					<?php post_content(15); ?>	
				</div>
				<div class="contact-right">
					<?php ktpl_contactform_box(); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

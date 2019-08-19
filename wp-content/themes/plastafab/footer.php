<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plastafab
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<h3 id="name">Plastafab</h3>
		<div class="block-back">
		</div>
		<p id="rights">All rights reserved &#9400 2018 Plastafab</p>
		<div class="block-front">
			<?php post_content(142); ?>
		<hr>
			<?php post_content(144); ?>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
		</div>
		<div class="address">
			<?php post_content(146); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

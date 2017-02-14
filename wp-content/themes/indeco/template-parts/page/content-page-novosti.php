<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


	<div class="col-md-4 col-sm-6">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="product-item">
				<?php the_post_thumbnail('poster')?>
<!--				<img src="--><?php //echo get_theme_file_uri()?><!--/assets/img/product/product1.jpg" alt="">-->
				<h2 class="h2"><?php the_title();?></h2>

				<?php the_content('Подробнее', true);?>
			</div>
		</article><!-- #post-## -->
	</div>


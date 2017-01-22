<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

if( in_category( 'novosti', $post->ID )) {
	$style_class="news-content";
} ;

if( get_post_type() == 'product'){
?>
	<main class="main <?php echo $style_class?> ">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>

					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-3 hidden-sm hidden-xs">
					<?php get_sidebar('left'); ?>
				</div>
				<div class="col-md-9 pd0">

					<?php $acf = get_posts(array('post_type' => 'acf'));?>
					<?php
					$meta_values = "";
					$cust = array();
					foreach	($acf as $f){
//						var_dump($f);
						// $meta_values = get_post_meta( $f->ID );
						// var_dump($meta_values);
// соберем все метаполя в объект $meta
						// $meta = new stdClass;
//						foreach( get_post_meta( $f->ID ) as $k => $v )
//							var_dump($v[0]);

// Теперь, допустим у записи есть метаполе 'book'
// Получаем его так:
//						var_dump($meta);
//						foreach($meta_values as $value){
//							var_dump($value);
//							$cust = _wp_json_convert_string($value[0]);
//							var_dump($cust);
//						}
					}


					?>
				<?php


				/* Start the Loop */
				while ( have_posts() ) : the_post();

					if(get_post_type() == 'product') $post_format = 'product';
					else $post_format =  get_post_type();

					get_template_part( 'template-parts/post/content', $post_format );


					// If comments are open or we have at least one comment, load up the comment template.
//							if ( comments_open() || get_comments_number() ) :
//								comments_template();
//							endif;
				?>
					<?php

					if( in_category( 'novosti', $post->ID )) {
						?>
						<div class="col-sm-offset-4 col-sm-8">
							<?php
							//
							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( '<< Предыдущая новость', 'twentyseventeen' ) . '</span><br><span class="post-title">%title</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Следущая новость >>', 'twentyseventeen' ) . '</span> <br><span class="post-title">%title</span>',
								'screen_reader_text' => ' '
							) );
							?>
						</div>
						<?php
					}
					?>

				<?php

				endwhile; // End of the loop.
				?>

				</div>
			</div>

		</div>
	</main>
<?php
	} else{
		?>

	<main class="main <?php echo $style_class?> ">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>

					</div>
				</div>

			</div>
			<div class="row">

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					if(get_post_type() == 'product') $post_format = 'product';
					else $post_format =  get_post_type();

					get_template_part( 'template-parts/post/content', $post_format );


					// If comments are open or we have at least one comment, load up the comment template.
//							if ( comments_open() || get_comments_number() ) :
//								comments_template();
//							endif;
					?>
					<?php

					if( in_category( 'novosti', $post->ID )) {
						?>
						<div class="col-sm-offset-4 col-sm-8">
							<?php
							//
							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( '<< Предыдущая новость', 'twentyseventeen' ) . '</span><br><span class="post-title">%title</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Следущая новость >>', 'twentyseventeen' ) . '</span> <br><span class="post-title">%title</span>',
								'screen_reader_text' => ' '
							) );
							?>
						</div>
						<?php
					}
					?>

					<?php

				endwhile; // End of the loop.
				?>


			</div>

		</div>
	</main>


	<?php
}
get_footer();

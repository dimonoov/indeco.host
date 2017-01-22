<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="main ">
	<section class="news" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) : // если имеются записи в блоге.
						query_posts('cat=40');   // указываем ID рубрик, которые необходимо вывести.

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/page/content', 'page-novosti' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					endif;
					/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
					wp_reset_query();

				?>
			</div>
			<div class="row">

			</div>
		</div>
	</section>

</main>



<?php get_footer();

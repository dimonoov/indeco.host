<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="ajax-article clearfix">
	<div class="col-sm-4">
		<div class="article_poster">
<!--			<img src="--><?php //echo get_template_directory_uri()?><!--/assets/img/news/inpost.png" alt="">-->
			<?php the_post_thumbnail('full')?>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="text-content">
			<div class="date">
				<?php the_date()?>
			</div>
			<h2 class="h2"><?php the_title()?></h2>
			<div class="article-view">
				<div class="column">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</div>
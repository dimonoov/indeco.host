<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!--<aside id="secondary" class="widget-area" role="complementary">-->
<!--	--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--</aside><!-- #secondary -->


<aside class="left-sidebar">

	<script type="text/javascript" src="<?php echo get_theme_file_uri()?>/assets/js/jquery.accordion.js" ></script>
	<script type="text/javascript" src="<?php echo get_theme_file_uri()?>/assets/js/jquery.cookie.js" ></script>
	<script>
		jQuery(document).ready(function($){
			$('.menu').dcAccordion();
		});
	</script>
<!--	<div class="side-block">-->
<!--		<div class="block-title">Категории товаров</div>-->
<!--		<div class="block-content">-->
<!--			<ul class="menu" id="accordion" >-->
<!--				<li>-->
<!--					<a href="#">Гидромолоты</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Гидроножницы</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Грейферные захваты</a>-->
<!--				</li>-->
<!--				<li class="has-submenu">-->
<!--					<a href="#">На вид техники</a>-->
<!--					<ul class="submenu">-->
<!--						<li>-->
<!--							<a href="#"> экскаватор </a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> погрузчик</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> манипулятор</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> трактор</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li class="has-submenu">-->
<!--					<a href="#">На марку техники</a>-->
<!--					<ul class="submenu">-->
<!--						<li>-->
<!--							<a href="#"> экскаватор </a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> погрузчик</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> манипулятор</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> трактор</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li class="has-submenu">-->
<!--					<a href="#">По назначению</a>-->
<!--					<ul class="submenu">-->
<!--						<li>-->
<!--							<a href="#"> экскаватор </a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> погрузчик</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> манипулятор</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#"> трактор</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Ремонт/обслуживание</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Запчасти</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Б/У</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="#">Вибротрамбовки</a>-->
<!--				</li>-->
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->

	<div class="side-block">
		<div class="block-title">Категории товаров</div>
		<?php

		$args = array(
			'taxonomy'      => array( 'product_cat'), // название таксономии с WP 4.5
			'orderby'       => 'id',
			'order'         => 'ASC',
			'hide_empty'    => false,
			'object_ids'    => null, //
			'include'       => array(),
			'exclude'       => array(),
			'exclude_tree'  => array(),
			'number'        => '',
			'fields'        => 'all',
			'count'         => false,
			'slug'          => '',
			'parent'         => '',
			'hierarchical'  => true,
			'child_of'      => 39,
			'get'           => '', // ставим all чтобы получить все термины
			'name__like'    => '',
			'pad_counts'    => false,
			'offset'        => '',
			'search'        => '',
			'cache_domain'  => 'core',
			'name'          => '', // str/arr поле name для получения термина по нему. C 4.2.
			'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
			'update_term_meta_cache' => true, // подгружать метаданные в кэш
			'meta_query'    => '',
		);
		$product_cat = get_terms( $args );
		$assign_cat = get_terms(
			array(
				'taxonomy' => array( 'assign_cat'),
//				'parent' => '0',
//				'hide_empty' => false
			)
		);
//var_dump($product_cat);
//		var_dump($assign_cat);
		?>
		<div class="block-content">
			<ul class="menu" id="accordion" >
		<?php
		foreach( $product_cat as $product ){
			?>
				<li class="has-submenu">
					<a href="#"><?php echo $product->name;?></a> <!--Гидромолоты-->
					<?php if($product->count !== 0) :?>
					<ul class="submenu">
						<?php foreach ($assign_cat as $assign): ?>

							<?php
							//is_post_in_term_tax( 'assign_cat', "product_cat", $assign->slug, $product->slug);

							if($assign->parent == 0
//								&& !empty(is_post_in_children_term($assign->term_id, $assign->taxonomy))
								&& !empty(is_post_in_term_tax( 'assign_cat', "product_cat", $assign->slug, $product->slug))
							) : ?>
								<li class="has-submenu">
									<a href="#"> <?php echo $assign->name?> </a> <!-- На марку техники-->

									<ul class="sub-submenu">

										<?php foreach ($assign_cat as $child): ?>
											<?php
											if($child->parent == $assign->term_id
												&& !empty(is_post_in_term_tax( 'assign_cat', "product_cat", $child->slug, $product->slug))
											) :


												$term_link = get_term_link($product->term_id, $product->taxonomy);
//												$term_get = get_term_link($child->term_id, $child->taxonomy);
												echo "<li><a href='". $term_link .''.$child->slug."'>". $child->name ."</a></li>";
											endif;
											?>
										<?php endforeach; ?>
									</ul>

								</li>
							<?php endif;?>
						<?php endforeach;?>
					</ul>
					<?php endif;?>

				</li>
			<?php
		}
		?>
			</ul>
		</div>
	</div>
</aside>



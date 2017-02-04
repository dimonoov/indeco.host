<?php
/**
 * Template name: Страница каталог
 */

get_header(); ?>
	<style>
		.main .product-cat ul li span {
			font-size: 12px;
			color: #ccc;
		}

	</style>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>

					</div>
				</div>
			</div>
			<div class="row">
				<?php
					$args = array(
						'taxonomy'      => array( 'product_cat'), // название таксономии с WP 4.5
						'orderby'       => 'include',
						'order'         => 'ASC',
						'hide_empty'    => false,
						'object_ids'    => null, //
						'include'       => array('3','5','4','6'),
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
							'hide_empty'    => false,
						)
					);
				?>
				<?php foreach( $product_cat as $product ):?>
				<?php
					$grid_size = get_field('grid-size', 'product_cat' . '_' .$product->term_id);
					$style_product = get_field('style-product', 'product_cat' . '_' .$product->term_id);

					$grid = $grid_size == 'full' ? 'col-sm-12' :
							($grid_size == 'half' ? 'col-md-6' :
							($grid_size == 'quater' ? 'col-md-3 col-sm-6' : 'col-sm-12'));
					$style = $style_product == 'molot-content' ? 'molot' :
							($style_product == 'grefer' ? 'grefer eh' :
							($style_product == 'clips' ? 'clips eh' :
							($style_product == 'trumbs' ? 'trumbs eh' :'molot')));
						?>

				<div class="<?php echo $grid; ?>">
					<div class="<?php echo $style; ?> product-cat">
						<div class="column col-left">
							<div class="product_foto">
<!--								<img src="--><?php //echo get_theme_file_uri();?><!--/assets/img/molot.png" alt="">-->
                                <?php
                                $image = get_field('image_cat', 'product_cat' . '_' .$product->term_id);
                                if( !empty($image) ): ?>

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <a href="<?php echo get_term_link($product->term_id);?>"><h2 class="h2"><?php echo $product->name;?></h2></a>
							</div>
						</div>
						<div class="column col-right">
							<div class="text-content">
								<ul>
									<?php foreach ($assign_cat as $assign): ?>
									<?php
									if($assign->parent == 0
			//								&& !empty(is_post_in_children_term($assign->term_id, $assign->taxonomy))
										//&& !empty(is_post_in_term_tax( 'assign_cat', "product_cat", $assign->slug, $product->slug))
									):  ?>
										<li class="title-category"><?php echo $assign->name?></li>
										<?php $i = 1; foreach ($assign_cat as $child): ?>
											<?php
												$parent_term = get_terms(array(
													'taxonomy' => array( 'assign_cat'),
													'parent' => $child->parent,
													'hide_empty'    => false,
												));
												$class_end = ""; if(count($parent_term) == $i) $class_end = 'class="end-category"';
                                                $is_post_in_term_tax = is_post_in_term_tax( 'assign_cat', "product_cat", $child->slug, $product->slug);
												if($child->parent == $assign->term_id
//                                                    && !empty( $is_post_in_term_tax)

												) :

													echo "<li ".$class_end." ><a href='".get_home_url().'/'. $product->slug .'/'.$child->slug."'>". $child->name ."</a><span> (".count($is_post_in_term_tax).") </span></li>";
													$i++;
												endif;
											?>
										<?php  if(count($parent_term) == $i-1) $i = 1; endforeach;?>
									<?php endif;?>
									<?php endforeach;?>
								</ul>

							</div>
						</div>
					</div>

				</div>

				<?php endforeach;?>


			</div>


			<div class="row">

                <?php if ( have_posts() ) :
                    while (have_posts()) : the_post(); ?>
                    <?php $url_seo_image = get_the_post_thumbnail_url()?>
                    <div class="wrap-content five" style='background-image: url(<?php echo $url_seo_image;?>);'>
                        <div class="col-sm-8 ">
                            <div class="text-contet">
                                                             <?php the_content();?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</main>

     <section class="quick-solution  dark">
         <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="sf-sx">
                            <div class="sf-textual">
                                <div class="sf-label">Поиск быстрого решения</div>
                                <div class="sf-title">Узнайте какое оборудование больще всего подходит к вашем целям и задачам</div>
                                <!-- <img class="sf-image" src="<?php echo get_theme_file_uri()?>/assets//indeco-incorso/images/Image/info-grafica-solfinder.jpg" alt="" /> --><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="select-panel sf-dx">
                            <form id="solution" name="formsolfinder" method="post" action="#">
                                <div class="general-form-container">
                                    <div>
                                        <div><span id="step1" class="active">1</span></div>
                                        <?php
                                        $args = array(
                                            'taxonomy'      => array( 'sector_cat'), // название таксономии с WP 4.5
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
                                            'parent'         => 0,
                                            'hierarchical'  => true,
                                            'child_of'      => "",
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
                                        $industria = get_terms( $args );
                                        //                                var_dump($industria);
                                        ?>
                                        <div>
                                            <script src="<?php echo get_theme_file_uri( '/assets/js/select_change.js' );?>"></script>
                                            <select id="industria" name="industria" required="required" >
                                                <option class="hideme" value="v1">Cфера деятельности *</option>
                                                <?php foreach ($industria as $industry) :?>
                                                    <option value="<?php echo $industry->slug;?>"><?php echo $industry->name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div><span id="step2">2</span></div>
                                        <div>
                                            <select id="application" class="disabled" name="campo_applicazione" disabled="true" required="required" >
                                                <option class="hideme" value="v1">Область применения *</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div><span id="step3">3</span></div>
                                        <div>
                                            <select id="attivita" class="disabled" name="attivita" required="required" disabled="true" ">
                                            <option class="hideme" value="v1">Тип работ *</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--
                                    <div>
                                        <div><span id="step4">4</span></div>
                                        <div>
                                            <input id="compatibilita" class="disabled" style="width: 48%;" type="text" name="compatibilita" value="" placeholder="Excavator Weight (Ton)" disabled />
                                            <span style="display: inline-block; width: 52%; padding: 0px 15px; font-size: 12px;"><i class="fa fa-question-circle" aria-hidden="true" style="float: left; margin: 3px 6px 20px 0; font-size: 34px;"></i>Find out what are the best products for the characteristics of your existing machine.</span>
                                        </div>
                                    </div>
                                    -->
                                    <div>
                                        <div></div>
                                        <div>
                                            <a id="submit-button" class="call-to-action backwhite-variant disabled" style="" href="#solutionfinderindustry" onclick="">Показать результат</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
     </section>


	<section class="ajax-solution" >
		<div id="solutionfinderindustry" class="full solution-finder-industry">
			<div class="container">
				<div class="row">
					<h2 class="sfi-title text-center">Найденные товары</h2>
					<p class="sfi-subtitle text-center">Проверьте список лучших решений, которые соответствуют ваш выбор.</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<ul class="nav nav-tabs"></ul>
					</div>
					<div id="myTabContent" class="tab-content"></div>
				</div>
			</div>
		</div>
	</section>



<?php get_footer();

<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<section class="features">
	<div class="container">

		<div class="row">
			<h2 class="h2 text-center">Мы предлогаем</h2>
			<div class="feat-wrap clearfix">


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
					'parent'         => '39',
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
				$style_product = get_field('style-product', 'product_cat' . '_' .$product->term_id);
				$style = $style_product == 'molot' ? 'molot' :
					($style_product == 'grefer' ? 'grefer' :
						($style_product == 'clips' ? 'clips' :
							($style_product == 'trumbs' ? 'trumbs' :'molot-content')));
				?>

				<?php foreach($product_cat as $product) :?>
					<?php
					$style_product = get_field('style-product', 'product_cat' . '_' .$product->term_id);
					$style = $style_product == 'molot' ? 'molot' :
						($style_product == 'grefer' ? 'grefer' :
							($style_product == 'clips' ? 'clips' :
								($style_product == 'trumbs' ? 'trumbs' :'molot')));
					?>
					<div class="col-md-3 col-sm-6 col-xs-6 w100">
						<div class="item <?php echo $style?>">
							<a href="<?php echo get_term_link($product->term_id, $product->taxonomy);?>">  <h2 class="h2"><?php echo $product->name?></h2></a>
							<?php
							$image = get_field('image_cat', 'product_cat' . '_' .$product->term_id);
							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
					</div>

				<?php  endforeach;?>


			</div>
		</div>
	</div>
</section>

<section class="quick-solution white">
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


<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="head"><h2 class="h2">Новости</h2> <a href="#" class="show-all button">Посмотреть все</a> </div>

			</div>
		</div>
		<div class="row">

			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic officiis magni magnam ipsam dicta temporibus eaque reprehenderit, voluptatibus ullam, at accusantium assumenda enim dolor necessitatibus delectus. Explicabo, expedita voluptatibus. <a href="#" class="details_link">Подробнее</a></p>

				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic . <a href="#" class="details_link">Подробнее</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<img src="<?php echo get_theme_file_uri()?>/assets/img/product/product1.jpg" alt="">
					<h2 class="h2">От стали к солнечной энергии</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis hic officiis magni magnam ipsam dicta temporibus eaque reprehenderit, voluptatibus ullam, at accusantium assumenda enim dolor necessitatibus delectus. Explicabo, expedita voluptatibus. <a href="#" class="details_link">Подробнее</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="map">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7iJz0TICDZNHjaaGq9lNx6ue1xCNX0gU&v=3.exp"></script>
	<div class="block-gmap">
		<div id="map-canvas"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="map-info">
						<div class="inner-text clearfix">
							<p>Indeco в мире</p>
							<h3 class="h3">Империя в которой не заходит солнце</h3>
							<a href="#" class="button map-btn">Найти дилера</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo get_theme_file_uri()?>/assets/js/map.js" charset="utf-8"></script>

</section>

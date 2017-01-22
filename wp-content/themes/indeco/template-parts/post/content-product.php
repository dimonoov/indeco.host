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

	<div class="content clearfix">
		<div class="col-sm-5">
			<div class="product-foto">

				<div class="slider-for">
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="product"/>
					</div>
				</div>
				<div class="slider-nav">
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
					<div>
						<img src="<?php echo get_theme_file_uri();?>/assets/img/small1.jpg" alt="small" />
					</div>
				</div>



				<script type="text/javascript">
					jQuery('.slider-for').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						fade: true,
						asNavFor: '.slider-nav'
					});
					jQuery('.slider-nav').slick({
						slidesToShow: 4,
						slidesToScroll: 1,
						asNavFor: '.slider-for',
						dots: false,
						centerMode: false,
						focusOnSelect: true
					});
				</script>
			</div>
		</div>

		<div class="col-sm-7">
			<div class="product-params">
				<div class="block-title"><?php the_title();?></div>
				<div class="block-content">

					<ul>
						<?php if( get_field('clips_weight_ekskavatora') ): ?>
							<li><span class="label"></span><span class="value"><?php echo get_field('clips_weight_ekskavatora'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_weight') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_weight'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_zahvat') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_zahvat'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_height') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_height'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_width') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_width'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_width_zahvata') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_width_zahvata'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_maslo') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_maslo'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_max_bar') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_max_bar'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_muzvk') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_muzvk'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_muznn') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_muznn'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_dlina') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_dlina'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_mdrm') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_mdrm'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_vza') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_vz'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_vo') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_vo'); ?></span></li>
						<?php endif; ?>
						<?php if( get_field('clips_spg') ): ?>
							<li><span class="label"></span><span class="value"><?php the_field('clips_spg'); ?></span></li>
						<?php endif; ?>



						<?php $field_name = "clips_skpmkm"; if( get_field($field_name) ): $field = get_field_object($field_name); ?>
							<li>
								<span class="label"><?php echo $field['label']?></span>
								<span class="value"><?php echo $field['value']; ?></span>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="total-price-product">
				<div class="total-price">
					<s>400 000 <i class="fa fa-rub"></i></s>
					<span class="price">398 000 <i class="fa fa-rub"></i></span>
				</div>
				<div class="product-card">

					<form class="action_cart" metod="post">
						<input type="number" step="1" value="1" min="1" max="1000" id="qty_1349090">
						<input class="nm" name="product_id" value="<?php the_ID()?>" type="hidden">
						<input class="details btn-s" data-action="addToCart" value="Купить" type="submit" placeholder="">

					</form>

				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#descr" data-toggle="tab" aria-expanded="true">Описание</a></li>
				<li class=""><a href="#related" data-toggle="tab" aria-expanded="false">Сопутствующие товары</a></li>
				<li class=""><a href="#files" data-toggle="tab" aria-expanded="false">Файлы</a></li>
			</ul>
		</div>
<!-- 
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="descr">
				<div class="col-sm-12">
					<div class="inner-desrc">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="related">
				<div class="col-md-4 col-sm-6">
					<div class="product-item">
						<div class="block-title">title</div>
						<div class="block-content">
							<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="">
							<ul class="main-params">
								<li><span class="nm">Эксплуатационная масса:</span><span class="value">380 кг.</span></li>
								<li><span class="nm">Максимальное открытие:</span><span class="value">1500 мм.</span></li>
								<li><span class="nm">Грузоподъёмность:</span><span class="value">170 л.</span></li>
								<li><span class="nm">Ширина щёк:</span><span class="value">600 мм.</span></li>
							</ul>
							<div class="price-card">
								<span>411 100 <i class="fa fa-rub"></i></span>
								<s>450 00 <i class="fa fa-rub"></i></s>
							</div>
							<div class="btn-wrap">
								<a href="#" class="details">Подробнее</a>
								<a href="#" class="btn-buy">Купить</a>
							</div>
							<div class="loading text-center">
								<div class="progress-wrap">
									<div class="progress" style="display: none;">
										<div class="progress-bar progress-bar-info myprogress" style="width: 100%;"></div>
									</div>
								</div>
								<div class="good" style="display: none;">
									<img src="<?php echo get_theme_file_uri();?>/assets/http://indeco.loc/wp-content/themes/grifbriz/img/good.png" alt="good" height="25">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="product-item">
						<div class="block-title">title</div>
						<div class="block-content">
							<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="">
							<ul class="main-params">
								<li><span class="nm">Эксплуатационная масса:</span><span class="value">380 кг.</span></li>
								<li><span class="nm">Максимальное открытие:</span><span class="value">1500 мм.</span></li>
								<li><span class="nm">Грузоподъёмность:</span><span class="value">170 л.</span></li>
								<li><span class="nm">Ширина щёк:</span><span class="value">600 мм.</span></li>
							</ul>
							<div class="price-card">
								<span>411 100 <i class="fa fa-rub"></i></span>
								<s>450 00 <i class="fa fa-rub"></i></s>
							</div>
							<div class="btn-wrap">
								<a href="#" class="details">Подробнее</a>
								<a href="#" class="btn-buy">Купить</a>
							</div>
							<div class="loading text-center">
								<div class="progress-wrap">
									<div class="progress" style="display: none;">
										<div class="progress-bar progress-bar-info myprogress" style="width: 100%;"></div>
									</div>
								</div>
								<div class="good" style="display: none;">
									<img src="<?php echo get_theme_file_uri();?>/assets/http://indeco.loc/wp-content/themes/grifbriz/img/good.png" alt="good" height="25">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="product-item">
						<div class="block-title">title</div>
						<div class="block-content">
							<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="">
							<ul class="main-params">
								<li><span class="nm">Эксплуатационная масса:</span><span class="value">380 кг.</span></li>
								<li><span class="nm">Максимальное открытие:</span><span class="value">1500 мм.</span></li>
								<li><span class="nm">Грузоподъёмность:</span><span class="value">170 л.</span></li>
								<li><span class="nm">Ширина щёк:</span><span class="value">600 мм.</span></li>
							</ul>
							<div class="price-card">
								<span>411 100 <i class="fa fa-rub"></i></span>
								<s>450 00 <i class="fa fa-rub"></i></s>
							</div>
							<div class="btn-wrap">
								<a href="#" class="details">Подробнее</a>
								<a href="#" class="btn-buy">Купить</a>
							</div>
							<div class="loading text-center">
								<div class="progress-wrap">
									<div class="progress" style="display: none;">
										<div class="progress-bar progress-bar-info myprogress" style="width: 100%;"></div>
									</div>
								</div>
								<div class="good" style="display: none;">
									<img src="<?php echo get_theme_file_uri();?>/assets/http://indeco.loc/wp-content/themes/grifbriz/img/good.png" alt="good" height="25">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="files">
				<div class="col-sm-12">
					<div class="inner-desrc">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
					</div>
				</div>
			</div>

		</div> -->



	</div>

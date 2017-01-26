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
				<?php if(get_field('action') == 1):?>
					<div class="hits aktsiya">Акция</div>
				<?php endif;?>
				<?php if(!has_post_thumbnail()):?>
					<div>
						<img src='<?php echo get_template_directory_uri()?>/assets/img/No-image-found.jpg' alt=''>
					</div>
				<?php endif;?>
				<?php if( class_exists('Dynamic_Featured_Image') ) {
					global $dynamic_featured_image;
					$featured_images = $dynamic_featured_image->get_featured_images(get_the_ID() ); ?>
					<div class="slider-for">
							<?php if(has_post_thumbnail()):?>
								<div>
									<?php the_post_thumbnail();?>
								</div>
							<?php endif;?>

							<?php if($featured_images):?>
							<?php foreach( $featured_images as $image ) :?>
								<div>
									<img src="<?php echo $image['full']?>" alt="product"/>
								</div>
							<?php endforeach;?>
							<?php endif;?>
						</div>
					<div class="slider-nav">
						<?php if(has_post_thumbnail()):?>
							<div>
								<?php the_post_thumbnail()?>
							</div>

						<?php endif;?>
						<?php if($featured_images):?>
						<?php foreach( $featured_images as $image ) :?>
							<div>
								<img src="<?php echo $image['thumb']?>" alt="product"/>
							</div>
						<?php endforeach;?>
						<?php endif;?>
					</div>
<!--					--><?php //if($featured_images):?>
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
<!--					--><?php //endif;?>
				<?php } ?>
			</div>
		</div>

		<div class="col-sm-7">
			<div class="product-params">
				<div class="block-title"><?php the_title();?></div>
				<div class="block-content">
					<ul>
<!--						// clips-->
						<?php $field = get_field_object('clips_weight_ekskavatora'); if(!empty($field['value'])):?>
							<li><span class="label"><?php  echo 'oo'.$field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_weight'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_zahvat'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_height'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_width');  if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_width_zahvata'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_maslo'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_max_bar');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_muzvk'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_muznn'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_dlina');  if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_mdrm'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_vza'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_vo');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_spg'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>


<!--						//grefer-->
						<?php $field = get_field_object('grefer_weight'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('grefer_bar');  if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('grefer_max_maslo');  if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php   $field = get_field_object('grefer_bar_route'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('grefer_debit_maslo'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('grefer_max_power');  if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('grefer_max_razmah'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('grefer_width_zahvat'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('grefer_compatible'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>

<!--						// molot-->
						<?php  $field = get_field_object('molot_weight_eks'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_weight_work'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_diam_pici'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_maslo'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_bar_g'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_bar_e'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_bar_reverse'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_energy'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('molot_nu'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
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

	</div>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in" id="descr">
			<div class="col-sm-12">
				<div class="inner-desrc">

					<?php the_content();?>

				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="related">
		<?php
		$related = get_field('related', get_the_ID());
		?>
		<?php foreach ($related as $rel => $item):?>
			<div class="col-md-4 col-sm-6">
				<div class="product-item">
					<div class="block-title"><?php echo $item->post_title?></div>
					<?php if(get_field('action') == 1):?>
						<div class="hits aktsiya">Акция</div>
					<?php endif;?>
					<?php if(get_field('zakaz') == 1):?>
						<div class="hits zakaz">Заказ</div>
					<?php endif;?>
					<div class="block-content">
						<img src="<?php echo get_theme_file_uri();?>/assets/img/product-foto.jpg" alt="">
						<ul class="main-params">
							<li><span class="nm">Эксплуатационная масса:</span><span class="value">380 кг.</span></li>
							<li><span class="nm">Максимальное открытие:</span><span class="value">1500 мм.</span></li>
							<li><span class="nm">Грузоподъёмность:</span><span class="value">170 л.</span></li>
							<li><span class="nm">Ширина щёк:</span><span class="value">600 мм.</span></li>
						</ul>
						<div class="price-card">
							<span><?php the_field('price')?> <i class="fa fa-rub"></i></span>
							<s><?php the_field('old_price')?>  <i class="fa fa-rub"></i></s>
						</div>
						<div class="btn-wrap">
							<a href="<?php the_permalink();?>" class="details">Подробнее</a>
							<form class="action_cart" metod="post">
								<input class="nm" name="product_id" value="<?php the_ID();?>" type="hidden">
								<input class="btn-buy btn-s" data-action="addToCart" value="Купить" type="submit" placeholder="">
							</form>
						</div>

					</div>
				</div>
			</div>
		<?php endforeach;	?>


	</div>
		<div class="tab-pane fade" id="files">
			<div class="col-sm-12">
				<div class="inner-desrc">
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa 'NULL'a single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
				</div>
			</div>
		</div>

	</div>
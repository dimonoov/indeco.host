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
				<?php if(get_field('zakaz') == 1):?>
					<div class="hits zakaz">Заказ</div>
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
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
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

						<?php $field = get_field_object('clips_vz');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_spg'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_maslo_podacha');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_reglam_bar_rotate');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_soed_pat_gidr');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php $field = get_field_object('clips_velocity');  if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_skpmkm'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<!--			clips_new-->
						<?php  $field = get_field_object('clips_weight_string'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_weight_ruka'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_weight_without'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_debit_maslo'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_power_point'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_weight_string'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_width_chelu'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_razmah_chelust'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_dlina_knifes'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_ipe'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_hea'); if(!empty($field['value'])): ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('clips_sovmes_molot'); if(!empty($field['value'])): ?>
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
<!--						// vibro-->
						<?php  $field = get_field_object('vibro_weight_eks'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_weight_plot'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_height_plot'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_plastina'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_rotate'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_centerob'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_preasure'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_maslo'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_bar_pres'); if(!empty($field['value'])) : ?>
							<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
						<?php endif; ?>
						<?php  $field = get_field_object('vibro_cost'); if(!empty($field['value'])) : ?>
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
                        <?php $uri =  explode('/', $_SERVER["REQUEST_URI"]);?>
                        <input type="hidden" value="<?php echo $uri[2]?>" name="assign_cat_term">
                        <input type="hidden" value="<?php echo $uri[1]?>" name="product_cat_term">
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
                    <div class="pb-machines variant">Вид использования<br>
                        <ul>
                            <?php
                            $assign_cat = get_the_terms(get_the_ID(), 'assign_cat');
                            foreach($assign_cat as $assign){
                                $assign_image = get_field('image', 'assign_cat' . '_' .$assign->term_id);
                                ?>
                                <li> - <?php  echo $assign_image; echo $assign->name;  ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
					<?php the_content();?>

				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="related">
		<?php
		$related = get_field('related', get_the_ID());
		$uri =  explode('/', $_SERVER["REQUEST_URI"]);
		//$before_link = ($uri[1] !== "") ? $uri[1].'/' : "";
		//$before_link .= ($uri[2] !== "" && $before_link !=="") ? $uri[2].'/' : "";
		?>
		<?php foreach ($related as $rel => $item):?>
			<div class="col-md-4 col-sm-6">
				<div class="product-item eh1">
					<div class="block-title"><?php echo $item->post_title?></div>
					<?php if(get_field('action', $item->ID) == 1):?>
						<div class="hits aktsiya">Акция</div>
					<?php endif;?>
					<?php if(get_field('zakaz',  $item->ID) == 1):?>
						<div class="hits zakaz">Заказ</div>
					<?php endif;?>
					<div class="block-content">
						<?php if(has_post_thumbnail($item->ID)) : echo get_the_post_thumbnail($item->ID); else :?>

                            <a href="<?php the_post_thumbnail()?>"></a>
							<img src="<?php echo get_theme_file_uri();?>/assets/img/No-image-found.jpg" alt="">
						<?php endif;?>
						<ul class="main-params">
							<!--						// clips-->
							<?php $field = get_field_object('clips_weight_ekskavatora', $item->ID); if(!empty($field['value'])):?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php $field = get_field_object('clips_weight', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_zahvat', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_height', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php $field = get_field_object('clips_width', $item->ID);  if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>

<!--							clipsnew-->
							<?php  $field = get_field_object('clips_weight_string'); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_weight_ruka'); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_weight_without'); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_debit_maslo'); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('clips_power_point'); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>

							<!--						//grefer-->
							<?php $field = get_field_object('grefer_weight', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php $field = get_field_object('grefer_bar', $item->ID);  if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php $field = get_field_object('grefer_max_maslo', $item->ID);  if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php   $field = get_field_object('grefer_bar_route', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('grefer_debit_maslo', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('grefer_weight_up', $item->ID); if(!empty($field['value'])): ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>


							<!--						// molot-->
							<?php  $field = get_field_object('molot_weight_eks', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('molot_weight_work', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('molot_diam_pici', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('molot_maslo', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('molot_bar_g', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>


<!--							//vibro-->
							<?php  $field = get_field_object('vibro_weight_eks', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('vibro_weight_plot', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('vibro_height_plot', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('vibro_plastina', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('vibro_rotate', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
							<?php  $field = get_field_object('vibro_centerob', $item->ID); if(!empty($field['value'])) : ?>
								<li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
							<?php endif; ?>
						</ul>
						<div class="price-card">
							<span><?php the_field('price', $item->ID)?> <i class="fa fa-rub"></i></span>
							<s><?php the_field('old_price', $item->ID)?>  <i class="fa fa-rub"></i></s>
						</div>
						<div class="btn-wrap">

							<a href="<?php echo $item->post_name;?>" class="details">Подробнее</a>
							<form class="action_cart" metod="post">
                                <input type="hidden" value="<?php echo $uri[2]?>" name="assign_cat_term">
                                <input type="hidden" value="<?php echo $uri[1]?>" name="product_cat_term">
								<input class="nm" name="product_id" value="<?php echo $item->ID;?>" type="hidden">
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
					<div class="desc-product">
						<?php the_field('product_files');?>
						<p></p>
					</div>
<!--					<p>Food truck fixie locavore, accusamus mcsweeney's marfa 'NULL'a single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>-->
				</div>
			</div>
		</div>

	</div>
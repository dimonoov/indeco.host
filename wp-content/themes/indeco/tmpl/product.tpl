
<?php $count = 0;  ?>
<?php foreach($json as $term => $j):?>
    <?php foreach($j as $slug =>$term_slug):?>
    <?php $term_link = get_term_link( $slug, $taxonomy = 'product_cat' );?>
    <?php $active=""; if($count==0)  $active="active";?>
        <div class="tab-pane fade <?php echo $active?>" id="<?php echo $slug;?>">
        <div class="col-sm-12">
            <div class="head"><h2 class="h2"><?php echo $term;?></h2> <a href="<?php echo $term_link ?>" class="show-all button">Посмотреть все</a> </div>
        </div>
        <div class="col-sm-12">
            <div class="responsive">
                <?php foreach ($term_slug as $key => $mas_posts):?>
                <div class="slide">
                    <div class="product-block">
                        <div class="pb-thumb">
                            <a href = "#"><?php echo $mas_posts['img']?></a>
                        </div>
                        <div class="pb-description ">
                            <div class="pb-name"><span><?php echo $term;?> <span>M</span></span><a class="product_link" href="<?php echo get_the_permalink($mas_posts['id_post']) ?>"><?php echo $mas_posts['title']?></a></div>

                            <ul class="main-params pb-specs">
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

                            <div class="pb-machines variant">Вид использования<br>
                                <ul>
                                    <?php
                                    $assign_cat = get_the_terms($mas_posts['id_post'], 'assign_cat');

                                    foreach($assign_cat as $assign){
                                       	$assign_image = get_field('image', 'assign_cat' . '_' .$assign->term_id);
                                    ?>
                                    <li><?php  echo $assign_image;
                                    echo $assign->name;  ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>

                            </div>
                       </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php  endforeach;?>
<?php $count++; endforeach;?>
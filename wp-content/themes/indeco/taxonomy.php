<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
$is_post_in_term_tax = array();

//                    echo "product";

?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
                </div>
            </div>
<!--            положение не менять!!!-->
            <?php
            $current_term = get_queried_object();
            $type = $_GET['type'];
            if(isset($_GET['perpage'])) $posts_per_page = (int)$_GET['perpage']; else $posts_per_page = 9;
            if(isset($_GET['sort'])) $sort = $_GET['sort']; else $sort = 'price';
            if(isset($_GET['direct'])) $direct = $_GET['direct']; else $direct = 'DESC';

            $product_type =  false !== term_exists( $type, 'assign_cat' )  ?  $type : $product_type =   0;
            $uri =  explode('/', $_SERVER["REQUEST_URI"]);

            $args = array();
            $term_cat = get_term_by('slug', $uri[2], 'assign_cat');
            $cat = get_term_by('slug', $uri[1], 'product_cat');

            if($uri[2] !== "")
            {
                $is_post_in_term_tax = is_post_in_term_tax( 'assign_cat', "product_cat", $uri[2], $uri[1]);

                $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'product',
                    'post_status'=>'publish',
                    'tax_query' => array(

                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'assign_cat',
                            'field'    => 'slug',
                            'terms'    => $uri[2]
                        ),
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $uri[1]
                        )
                    ),
//						   'meta_query' => array(
//							   'relation' => 'OR',
//							   array(
//								   'key' => 'color',
//								   'value' => 'blue'
//							   ),
//							   array(
//								   'key' => 'price',
//								   'value' => 20
//							   )
//						   )
                    'meta_key' => $sort,
                    'orderby' => 'meta_value_num',
                    'order' => $direct
                );
            }
            elseif($uri[1] !== "")
            {
                $is_post_in_term_tax = is_post_in_term_tax( 'assign_cat', "product_cat", $uri[2], $uri[1], $assign_cat);
                $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'product',
                    'post_status'=>'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $uri[1]
                        )
                    ),
                    'meta_key' => $sort,
                    'orderby' => 'meta_value_num',
                    'order' => $direct
                );

            }

            query_posts( $args );
//       	meta key
//    		$mas_meta = array();
//            if( have_posts() ) {
//        		while( have_posts() ) {
//        			the_post();
//        			$the_ID_post  = $post->ID;
//        			$mas_meta[$the_ID_post][] = get_metadata('post', $the_ID_post, '', 1 );
//        		}
//            }
//            $filter_mas_meta = array();
//            foreach($mas_meta as $key => $meta_key ){
//                foreach($meta_key[0] as $k => $meta_values){
//                    $piece = substr($k, 0, 1);
//                    if($piece !== "_") {
//                        $field = get_field_object($k);
//                        $filter_mas_meta[$k] = $field['label'];;
//                    }
//	            }
//            }
           ?>
        
            <div class="col-md-6 col-sm-12">
                <div class="filtr-panel">
                    <?php
                    $action_form_url =  home_url().$_SERVER["REQUEST_URI"];
                    $action_form_url =  deleteGET($action_form_url, "perpage");
                    $action_form_url =  deleteGET($action_form_url, "sort");
                    ?>
                    <form class="filter-panel clearfix" action="<?php echo $action_form_url ?>" id="param_filter">
                        <div class="sort clearfix">
                            <label>Сортировать по:</label>
                            <select id="sort" name="sort"  class="custom color sort_by">

                            	                    <?php
                            	                    	 
	                            	                // wp_reset_query();
                            	// $description = get_metadata('term', $term->term_id, 'txseo_seo_description', 1 )
								// $title = get_metadata('term', $term->term_id, 'txseo_seo_title', 1 );
								
								// с версии WP 4.4 можно использовать встроенные функции 
								// $description = get_term_meta( $term->term_id, 'txseo_seo_description', 1 );
								// $title = get_term_meta( $term->term_id, 'txseo_seo_title', 1 );
                            	?>
                            	<?php // $sort_option = get_metadata( 'term', $cat->term_id, '' ); var_dump($sort_option);?>
                            	<?php  $counter = 0; foreach($filter_mas_meta as $key => $filter){
//                            	    if($key !== 'dfiFeatured' ){
//                            	        if( $key !== "related" ){
//                                            if($key !== "artikul"){
//                                                if($key !== 'product_files') {
//                                                    if ($key !== 'zakaz') {
//                                                        if ($key !== 'action') {
//
//                                                        if ($counter == 0) {
//                                                            $selected = "selected";
//                                                        } else {
//                                                            $selected = "";
//                                                        } ?>
<!---->
<!--                                                        <option --><?php //echo $selected; ?>
<!--                                                            value="--><?php //echo $key ?><!--">--><?php //echo $filter ?><!--</option>-->
<!--                                                        --><?php
//                                                        $counter++;
//                                                        }
//                                                    }
//                                                }
//                                            }
//                                        }
//
//                                    }

                                }?>
                                <option value="price" selected >Цене</option>
                                <option value="massa">Массе</option>
<!--                                <option value="capacity">Грузоподъёмности</option>-->
                            </select>
                        </div>
                        <div class="per-pages clearfix">
                            <label>Показать по: </label>
                            <select id="perpage" name="perpage"  class="custom color per_page">
                                <?php if(count($is_post_in_term_tax) > 9) {?>
                                    <option  value="9" >9</option>
                                <?php } else { ?>
                                    <option  value="-1" >Все</option>
                                <?php }?>
                                <?php  for(  $i = 9; $i <= count($is_post_in_term_tax); $i++ ):?>
                                    <?php if(($i%6) == 0) {?>
                                        <?php if($i == 6) $selected = 'selected="selected"';  else $selected = "";?>
                                        <option  value="<?php echo $i?>" ><?php echo $i?></option>
                                    <?php } else { ?>
                                    <?php } ?>
                                    <?php if($i == count($is_post_in_term_tax)) :?>
                                        <option value="-1" >Все</option>
                                    <?php endif; ?>
                                <?php endfor;?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php
                $value_assign_title = "";
                $value_assign = get_field('product_type', 'assign_cat' . '_'. $term_cat->term_id);
                foreach ($value_assign as $assign){
                    if($assign == $uri[1] ){
                        $value_assign_title = get_field($assign.'_seo_title', 'assign_cat' . '_'. $term_cat->term_id);
                    }
                }

                $value_cat = get_field('seo_title_cat', 'product_cat' . '_'. $cat->term_id);

                if($value_assign_title)
                {
                    echo '<div class="seo_title"><h1 class="h1">'.$value_assign_title.'</h1></div>';

                }else if($value_cat)
                {
                    echo '<div class="seo_title"><h1 class="h1">'.$value_cat.'</h1></div>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <?php get_sidebar('left');?>

            </div>
            <div class="col-md-9 pd0">
                <div id="content-main" class="content clearfix">
                    <?php
                    // always good to see exactly what you are working with
                    // Цикл WordPress
                    if( have_posts() ){
                        $count_post = 0; while( have_posts() ){
                            the_post();
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 tovar">
                                <div class="product-item">
                                    <div class="block-title"><?php the_title()?></div>
                                    <?php if(get_field('action') == 1):?>
                                        <div class="hits aktsiya">Акция</div>
                                    <?php endif;?>
                                    <?php if(get_field('zakaz') == 1):?>
                                        <div class="hits zakaz">Заказ</div>
                                    <?php endif;?>
                                    <div class="block-content">
                                        <?php if(has_post_thumbnail()) { ?>
                                            <a href="<?php the_permalink();?>"><?php  the_post_thumbnail();?></a>
                                        <?php } else { ?>
                                            <a href="<?php the_permalink();?>"><img src="<?php echo get_theme_file_uri();?>/assets/img/No-image-found.jpg" alt=""></a>
                                        <?php } ?>
                                        <ul class="main-params">
                                            <!--						// clips-->
                                            <?php $field = get_field_object('clips_weight_ekskavatora'); if(!empty($field['value'])):?>
                                                <li><span class="label"><?php  echo $field['label'] ?></span><span class="value"><?php  echo $field['value'] ?></span></li>
                                            <?php endif; ?>
                                            <?php $field = get_field_object('clips_weight'); if(!empty($field['value'])): ?>
                                                <li><span class="label"><?php  echo $field['label'] ?></span>
                                                    <span class="value"><?php  echo $field['value'] ?></span>
                                                </li>
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
<!--                                            clipsnew-->
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
                                        </ul>
                                        <div class="price-card">
                                            <span><?php echo get_field('price')?> <i class="fa fa-rub"></i></span>
                                            <s><?php echo get_field('old_price')?> <i class="fa fa-rub"></i></s>
                                        </div>
                                        <div class="btn-wrap">
                                            <a  href="<?php the_permalink();?>" class="details">Подробнее</a>
                                            <form class="action_cart" method="post">
                                                <input type="hidden" value="<?php echo $uri[2]?>" name="assign_cat_term">
                                                <input type="hidden" value="<?php echo $uri[1]?>" name="product_cat_term">
                                                <input class="nm" name="product_id" value="<?php the_ID();?>" type="hidden">
                                                <input class="btn-buy btn-s" data-action="addToCart" value="Купить" type="submit" placeholder="">
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php $count_post++;
                        }
                        wp_reset_query();
                    } else {
                       ?>
                        <h3>Не найдено товаров по данному запросу</h3>
                        <?php
                    }

                    ?>

                </div>

                <?php  if( $count_post > 6 && $posts_per_page !== -1 &&  count($is_post_in_term_tax) > 9):?>
                <div id="more_block" class="more text-center">

                    <a href="#" id="link_more" data-count="<?php echo count($is_post_in_term_tax) ?>" data-uri="<?php echo $_SERVER['REQUEST_URI']?>" data-offset='<?php echo $posts_per_page;?>' data-product='<?php echo  $cat->term_id;?>' data-assign='<?php echo $term_cat->term_id;?>' class="link-more">Показать ещё</a>
                </div>
                <?php endif;?>
                <?php wp_reset_query();?>
            </div>
        </div>
        <div class="row">
            <?php
                $seo_term = array();
                if($uri[1] !== "") $seo_term = get_term_by('slug',$uri[1], 'product_cat',ARRAY_A );
                $image_term_seo = get_field('image_cat_seo', 'product_cat' . '_'. $seo_term['term_id']);
                if($uri[2] !== "") $seo_term = get_term_by('slug',$uri[2], 'assign_cat',ARRAY_A );

            ?>

            <?php if($seo_term ):?>
                <div class="wrap-content bg-pic" style='background-image: url(<?php echo $image_term_seo;?>);'>
                    <div class="col-sm-9 ">
                        <div class="text-content">
<!--                            <h2 class="h2">--><?php //echo $seo_term['name'];?><!--</h2>-->
                            <?php
                            $value_assign_content = "";

                            foreach ($value_assign as $assign){
                                if($assign == $uri[1] ){
                                    $value_assign_content = get_field($assign.'_seo_content', 'assign_cat' . '_'. $term_cat->term_id);

                                }
                            }

                            if($value_assign_content)
                            {
                                echo '<div class="seo_title"><h1 class="h1">'.$value_assign_content.'</h1></div>';
                            }
                            else
                            {
                                echo term_description($seo_term['term_id']);
                            }
                              ?>


                        </div>
                    </div>
                </div>

            <?php endif;?>

        </div>
    </div>
</main>
<?php get_footer();?>


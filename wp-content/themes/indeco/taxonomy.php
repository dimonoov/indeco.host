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
?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
                </div>
            </div>
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
                                <option value="price" >Цене</option>
                                <option value="massa">Массе</option>
                                <option value="capacity">Грузоподъёмности</option>
                            </select>
                        </div>
                        <div class="per-pages clearfix">
                            <label>Показать по: </label>
                            <select id="perpage" name="perpage"  class="custom color per_page">
                                <option value="9" >9</option>
                                <option value="18">18</option>
                                <option value="27">27</option>
                                <option value="all">Все</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-sm-12">
              <form class="filter-panel" onclick="beforeSubmit();"  method="get" action="">
                <div class="sort">
                  <p>Сортировать по:</p>

                  <button onclick="beforeSubmit();" class="param" type="submit" value="price"  name="sort" placeholder="Все">цене</button>
                  <button onclick="beforeSubmit();" class="param" type="submit" value="massa"  name="sort" placeholder="Все">массе</button>
                  <button onclick="beforeSubmit();" class="param" type="submit" value="weight" name="sort" placeholder="Все">грузоподъёмности</button>
                </div>
                <div class="per-pages">
                  <p class="">Товаров на странице: </p>
                  <button onclick="beforeSubmit();" class="param" type="submit" name="amount" value="9">9</button>
                  <button onclick="beforeSubmit();" class="param" type="submit" name="amount" value="18">18</button>
                  <button onclick="beforeSubmit();" class="param" type="submit" name="amount" value="22">22</button>
                  <button onclick="beforeSubmit();" class="param" type="submit" name="amount" value="all" placeholder="Все">Все</button>
                </div>
              </form>

            </div> -->
        </div>
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <?php get_sidebar('left');?>

            </div>
            <div class="col-md-9 pd0">
                <div id="content-main" class="content clearfix">
                    <?php
                    //                    echo "product";
                    $current_term = get_queried_object();
                    $type = $_GET['type'];
                    if(isset($_GET['perpage'])) $posts_per_page = (int)$_GET['perpage']; else $posts_per_page = 9;
                    if(isset($_GET['sort'])) $sort = $_GET['sort']; else $sort = 'price';
                    if(isset($_GET['direct'])) $direct = $_GET['direct']; else $direct = 'DESC';

                    $product_type =  false !== term_exists( $type, 'assign_cat' )  ?  $type : $product_type =   0;

                    $uri =  explode('/', $_SERVER["REQUEST_URI"]);

                    $args = array();

                    if($uri[2] !== "")
                    {
                        $args = array(
                            'posts_per_page' => $posts_per_page,
                            'post_type' => 'product',
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
                            'direct' => $direct
                        );

                    }
                    elseif($uri[1] !== "")
                    {
                        $args = array(
                            'posts_per_page' => $posts_per_page,
                            'post_type' => 'product',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'slug',
                                    'terms'    => $uri[1]
                                )
                            )
                        );
                    }


                    query_posts( $args );
                    // Цикл WordPress
                    if( have_posts() ){
                        $count_post = 0; while( have_posts() ){
                            the_post();
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product-item">
                                    <div class="block-title"><?php the_title()?></div>
                                    <?php if(get_field('action') == 1):?>
                                        <div class="hits aktsiya">Акция</div>
                                    <?php endif;?>
                                    <?php if(get_field('zakaz') == 1):?>
                                        <div class="hits zakaz">Заказ</div>
                                    <?php endif;?>
                                    <div class="block-content">
                                        <?php if(has_post_thumbnail()) : the_post_thumbnail(); else :?>
                                            <img src="<?php echo get_theme_file_uri();?>/assets/img/No-image-found.jpg" alt="">
                                        <?php endif;?>
                                        <ul class="main-params">
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
                                            <a href="<?php the_permalink();?>" class="details">Подробнее</a>
                                            <form class="action_cart" metod="post">
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
                <?php if( $count_post > 6):?>
                <div class="more text-center">
                    <?php $term_cat = get_term_by('slug', $uri[2], 'assign_cat');?>
                    <?php $cat = get_term_by('slug', $uri[1], 'product_cat');?>
                    <a href="#" data-uri="<?php echo $_SERVER['REQUEST_URI']?>" data-offset="<?php echo $posts_per_page;?>" data-product='<?php echo  $cat->term_id;?>' data-assign='<?php echo $term_cat->term_id;?>' class="link-more">Показать ещё</a>
                </div>
                <?php endif;?>
                <?php wp_reset_query();?>
            </div>
        </div>
        <div class="row ">


            <?php
                $seo_term = array();
                if($uri[1] !== "") $seo_term = get_term_by('slug',$uri[1], 'assign_cat',ARRAY_A );
                if($uri[2] !== "") $seo_term = get_term_by('slug',$uri[2], 'assign_cat',ARRAY_A );
                $image_term_seo = get_field('image', 'assign_cat' . '_'. $seo_term['term_id']);
            ?>
            <?php if($image_term_seo !== false):?>
                <div class="wrap-content bg-pic" style='background-image: url(<?php echo $image_term_seo['url'];?>);'>
                    <div class="col-sm-9 ">
                        <div class="text-content">
                            <?php echo term_description($seo_term['term_id']);?>
                        </div>
                    </div>
                </div>
             <?php else : ?>
                <?php if ( have_posts() ) : query_posts('p=' . '402');
                    while (have_posts()) : the_post(); ?>
                        <?php $url_seo_image = get_the_post_thumbnail_url()?>
                        <div class="wrap-content bg-pic" style='background-image: url(<?php echo $url_seo_image;?>);'>
                            <div class="col-sm-9 ">
                                <div class="text-content">
                                    <h2 class="h2"><?php the_title();?></h2>
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

            <?php endif;?>

        </div>
    </div>
</main>
<?php get_footer();?>


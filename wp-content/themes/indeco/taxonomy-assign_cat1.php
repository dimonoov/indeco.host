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

					<form class="filter-panel clearfix" action="/" id="param_filter">
						<div class="sort clearfix">
							<label>Сортировать по:</label>
							<select name="sort"  class="custom color sort_by">
								<option value="price" selected="selected">Цене</option>
								<option value="massa">Массе</option>
								<option value="weight">Грузоподъёмности</option>
							</select>
						</div>
						<div class="per-pages clearfix">
							<label>Показать по: </label>
							<select name="perpage"  class="custom color per_page">
								<option value="9" selected="selected">9</option>
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
				<div class="content clearfix">
<!--					<p>--><?php //single_term_title('Вы просматриваете раздел: '); ?><!--.</p>-->

					<?php
                    echo "assign";
                    $current_term = get_queried_object();
                    $type = $_GET['type'];

                    $product_type =  false !== term_exists( $type, 'assign_cat' )  ?  $type : $product_type =   0;

                    $uri =  explode('/', $_SERVER["REQUEST_URI"]);

                    $args = array();

                    if($uri[2] !== "")
                    {
                        $args = array(
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
                            )
                        );

                    }
                    elseif($uri[1] !== "")
                    {
                        $args = array(
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
						while( have_posts() ){
							the_post();
							?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product-item">
                                    <div class="block-title"><?php the_title()?></div>
                                    <div class="hits aktsiya">Акция</div>
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
                                            <a href="<?php the_permalink();?>" class="details">Подробнее</a>
                                            <form class="action_cart" metod="post">

                                                <input class="nm" name="product_id" value="12" type="hidden">
                                                <input class="btn-buy btn-s" data-action="addToCart" value="Купить" type="submit" placeholder="">

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
							<?php
						}
						wp_reset_query();
					} else {
						// текст/код, если постов нет
					}

					?>



				</div>
				<div class="more text-center">
					<a href="#" class="link-more">Показать ещё</a>
				</div>
			</div>
		</div>
		<div class="row wrap-content">
			<div class="col-sm-9">
				<div class="text-contet">
					<h2 class="h2">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</h2>
					<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Которое переписывается переулка залетают, встретил составитель, несколько парадигматическая текстов грустный власти своих предупреждал даже строчка семантика от всех свой если дороге безорфографичный обеспечивает эта однажды инициал. Себя ему агенство грустный обеспечивает точках. Силуэт щеке взгляд, наш использовало свой города, грустный над то ты, но мир речью которое меня? Строчка залетают то обеспечивает! Дороге приставка все послушавшись рот обеспечивает возвращайся путь. Решила что гор, повстречался продолжил подзаголовок, мир меня вдали свое пунктуация ты он встретил все языком деревни имени выйти дал, большого однажды страна родного! Себя если, о! Путь великий дороге диких текстов, ipsum, единственное даль, правилами переулка возвращайся своего если страна знаках взгляд рекламных предупредила вскоре не до. Инициал рукопись живет предложения строчка рукописи предупреждал ее над, реторический, текстами точках ты себя на берегу сих переписали знаках несколько взобравшись имени. Грустный, себя живет которое гор напоивший образ текстов запятых, запятой? Ipsum имеет снова текстами точках грустный, домах что первую буквоград раз о грамматики, проектах необходимыми решила сих назад власти ее приставка вскоре всемогущая наш, подпоясал. Переписывается образ, себя домах путь. Повстречался силуэт они рукописи это продолжил коварных взобравшись безорфографичный языкового коварный строчка дал дороге букв всемогущая, предупреждал власти парадигматическая несколько родного журчит.</p>
				</div>
			</div>

		</div>
	</div>
</main>
<?php get_footer();?>


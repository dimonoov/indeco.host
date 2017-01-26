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
							($style_product == 'grefer' ? 'grefer' :
							($style_product == 'clips' ? 'clips' :
							($style_product == 'trumbs' ? 'trumbs' :'molot')));
						?>

				<div class="<?php echo $grid; ?>">
					<div class="<?php echo $style; ?> product-cat">
						<div class="column col-left">
							<div class="product_foto">
								<img src="<?php echo get_theme_file_uri();?>/assets/img/molot.png" alt="">
								<h2 class="h2"><?php echo $product->name;?></h2>
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
												if($child->parent == $assign->term_id
													//&& !empty(is_post_in_term_tax( 'assign_cat', "product_cat", $child->slug, $product->slug))
												) :

													echo "<li ".$class_end." ><a href='".get_home_url().'/'. $product->slug .'/'.$child->slug."'>". $child->name ."</a><span> (".$child->count.") </span></li>";
													$i++;
												endif;
											?>
										<?php  if(count($parent_term) == $i-1) $i = 1; endforeach;?>
									<?php endif;?>
									<?php endforeach;?>
								</ul>
<!--								<ul>-->
<!--									<li class="title-category">По назначению работы</li>-->
<!--									<li><a href="#">Для свая</a></li>-->
<!--									<li><a href="#">Для работы под водой</a></li>-->
<!--									<li><a href="#">Для скальных пород</a></li>-->
<!--									<li class="end-category"><a href="#">Для мерзлых грунтов</a></li>-->
<!--									<li class="title-category">На марку техники</li>-->
<!--									<li><a href="#">На JCB</a></li>-->
<!--									<li><a href="#">На МТЗ</a></li>-->
<!--									<li><a href="#">На Хитачи</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li><a href="#">На БОБКЕТ</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li><a href="#">На МТЗ</a></li>-->
<!--									<li><a href="#">На Хитачи</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li class="end-category"><a href="#">На Хюддай</a></li>-->
<!--									<li class="title-category">На вид техники</li>-->
<!--									<li><a href="#">Гусенечная техника</a></li>-->
<!--									<li><a href="#">На экскаватор</a></li>-->
<!--									<li><a href="#">На мини экскаватор</a></li>-->
<!--									<li><a href="#">На экскаватор погрузчик</a></li>-->
<!--									<li class="end-category"><a href="#">На мини погрузчик</a></li>-->
<!--									<li class="title-category">Ремонт и обслуживание</li>-->
<!--									<li><a href="#">Запчасти</a></li>-->
<!--									<li><a href="#">Пики</a></li>-->
<!--									<li><a href="#">Гидролиния</a></li>-->
<!--									<li><a href="#">Плита</a></li>-->
<!--									<li class="end-category"><a href="#">Бутобой</a></li>-->
<!--								</ul>-->
							</div>
						</div>
					</div>

				</div>

				<?php endforeach;?>

<!--				<div class="col-sm-12">-->
<!--					<div class="molot-content product-cat">-->
<!--						<div class="column col-left">-->
<!--							<div class="product_foto">-->
<!--								<img src="--><?php //echo get_theme_file_uri();?><!--/assets/img/molot.png" alt="">-->
<!--								<h2 class="h2">Гидромолоты</h2>-->
<!--							</div>-->
<!---->
<!--						</div>-->
<!--						<div class="column col-right">-->
<!--							<div class="text-content">-->
<!---->
<!--								<ul>-->
<!--									<li class="title-category">По назначению работы</li>-->
<!--									<li><a href="#">Для свая</a></li>-->
<!--									<li><a href="#">Для работы под водой</a></li>-->
<!--									<li><a href="#">Для скальных пород</a></li>-->
<!--									<li class="end-category"><a href="#">Для мерзлых грунтов</a></li>-->
<!--									<li class="title-category">На марку техники</li>-->
<!--									<li><a href="#">На JCB</a></li>-->
<!--									<li><a href="#">На МТЗ</a></li>-->
<!--									<li><a href="#">На Хитачи</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li><a href="#">На БОБКЕТ</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li><a href="#">На МТЗ</a></li>-->
<!--									<li><a href="#">На Хитачи</a></li>-->
<!--									<li><a href="#">На Вольво</a></li>-->
<!--									<li class="end-category"><a href="#">На Хюддай</a></li>-->
<!--									<li class="title-category">На вид техники</li>-->
<!--									<li><a href="#">Гусенечная техника</a></li>-->
<!--									<li><a href="#">На экскаватор</a></li>-->
<!--									<li><a href="#">На мини экскаватор</a></li>-->
<!--									<li><a href="#">На экскаватор погрузчик</a></li>-->
<!--									<li class="end-category"><a href="#">На мини погрузчик</a></li>-->
<!--									<li class="title-category">Ремонт и обслуживание</li>-->
<!--									<li><a href="#">Запчасти</a></li>-->
<!--									<li><a href="#">Пики</a></li>-->
<!--									<li><a href="#">Гидролиния</a></li>-->
<!--									<li><a href="#">Плита</a></li>-->
<!--									<li class="end-category"><a href="#">Бутобой</a></li>-->
<!--								</ul>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--				</div>-->
<!--				<div class="col-md-6">-->
<!--					<div class="grefer product-cat">-->
<!--						<div class="column col-left">-->
<!--							<div class="product_foto">-->
<!--								<img src="--><?php //echo get_theme_file_uri();?><!--/assets/img/gretfer.png" alt="">-->
<!--								<h2 class="h2">Грейферные захваты</h2>-->
<!--							</div>-->
<!---->
<!--						</div>-->
<!--						<div class="column col-right">-->
<!--							<div class="text-content">-->
<!--								<ul>-->
<!--									<li class="title-category">На марку техники</li>-->
<!--									<li><a href="#">На экскаватор</a></li>-->
<!--									<li><a href="#">На погрузчик</a></li>-->
<!--									<li><a href="#">На манипулятор</a></li>-->
<!--									<li><a href="#">На трактор</a></li>-->
<!--									<li><a href="#">На ЮМЗ</a></li>-->
<!--									<li class="end-category"><a href="#">На МТЗ</a></li>-->
<!--									<li class="title-category">По назвачению работы</li>-->
<!--									<li><a href="#">Для леса общее</a></li>-->
<!--									<li><a href="#">Для леса бу</a></li>-->
<!--									<li><a href="#">Для бревен</a></li>-->
<!--									<li><a href="#">Для металла общее</a></li>-->
<!--									<li><a href="#">Для листового металла</a></li>-->
<!--									<li><a href="#">магнитный вакуумный</a></li>-->
<!--									<li><a href="#">Для сыгучих</a></li>-->
<!--									<li><a href="#">Для сена</a></li>-->
<!--									<li class="end-category"><a href="#">Для чистки колодца</a></li>-->
<!--									<li class="title-category">Ремонт и обслуживание</li>-->
<!--									<li><a href="#">Запчасти</a></li>-->
<!--									<li class="end-category"><a href="#">БУ</a></li>-->
<!--								</ul>-->
<!--							</div>-->
<!---->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--				</div>-->
<!--				<div class="col-md-3 col-sm-6">-->
<!--					<div class="clips product-cat">-->
<!--						<div class="product_foto">-->
<!--							<img src="--><?php //echo get_theme_file_uri();?><!--/assets/img/clips.png" alt="">-->
<!--							<h2 class="h2">Гидроножницы</h2>-->
<!--						</div>-->
<!--						<div class="text-content">-->
<!--							<ul>-->
<!--								<li class="title-category">На вид техники</li>-->
<!--								<li><a href="#">На экскаватор</a></li>-->
<!--								<li class="end-category"><a href="#">Для мерзлых грунтов</a></li>-->
<!--								<li class="title-category">По назначению</li>-->
<!--								<li><a href="#">Для бетона</a></li>-->
<!--								<li><a href="#">Для металла</a></li>-->
<!--								<li><a href="#">Для железобетона</a></li>-->
<!--								<li class="end-category"><a href="#">Для арматуры</a></li>-->
<!--								<li class="title-category">Ремонт/обслуживание</li>-->
<!--								<li><a href="#">Запчасти</a></li>-->
<!--								<li class="end-category"><a href="#">Б/У</a></li>-->
<!--							</ul>-->
<!--						</div>-->
<!---->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-md-3 col-sm-6">-->
<!--					<div class="trumbs product-cat">-->
<!--						<div class="product_foto">-->
<!--							<img src="--><?php //echo get_theme_file_uri();?><!--/assets/img/clips.png" alt="">-->
<!--							<h2 class="h2">Вибротрамбовки</h2>-->
<!--						</div>-->
<!--						<div class="text-content">-->
<!--							<ul>-->
<!--								<li class="title-category">На вид/марку техники</li>-->
<!--								<li><a href="#">На экскаватор</a></li>-->
<!--								<li class="end-category"><a href="#">На МТЗ</a></li>-->
<!--								<li class="title-category">По назначению</li>-->
<!--								<li><a href="#">Для грунта</a></li>-->
<!--								<li><a href="#">Для асфальта</a></li>-->
<!--								<li><a href="#">Для щебня</a></li>-->
<!--								<li><a href="#">Для глитки</a></li>-->
<!--								<li class="end-category"><a href="#">Для геска</a></li>-->
<!---->
<!--							</ul>-->
<!--						</div>-->
<!---->
<!--					</div>-->
<!--				</div>-->

			</div>


			<div class="row wrap-content five">
				<div class="col-sm-8 ">
					<div class="text-contet">
						<h2 class="h2">5 признаков надёжного оборудования.</h2>
						<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Которое переписывается переулка залетают, встретил составитель, несколько парадигматическая текстов грустный власти своих предупреждал даже строчка семантика от всех свой если дороге безорфографичный обеспечивает эта однажды инициал. Себя ему агенство грустный обеспечивает точках. Силуэт щеке взгляд, наш использовало свой города, грустный над то ты, но мир речью которое меня? Строчка залетают то обеспечивает! Дороге приставка все послушавшись рот обеспечивает возвращайся путь. Решила что гор, повстречался продолжил подзаголовок, мир меня вдали свое пунктуация ты он встретил все языком деревни имени выйти дал, большого однажды страна родного! Себя если, о! Путь великий дороге диких текстов, ipsum, единственное даль, правилами переулка возвращайся своего если страна знаках взгляд рекламных предупредила вскоре не до. Инициал рукопись живет предложения строчка рукописи предупреждал ее над, реторический, текстами точках ты себя на берегу сих переписали знаках несколько взобравшись имени. Грустный, себя живет которое гор напоивший образ текстов запятых, запятой? Ipsum имеет снова текстами точках грустный, домах что первую буквоград раз о грамматики, проектах необходимыми решила сих назад власти ее приставка вскоре всемогущая наш, подпоясал. Переписывается образ, себя домах путь. Повстречался силуэт они рукописи это продолжил коварных взобравшись безорфографичный языкового коварный строчка дал дороге букв всемогущая, предупреждал власти парадигматическая несколько родного журчит.</p>
					</div>
				</div>


			</div>


		</div>
	</main>
	<section class="quick-solution dark">
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
										'parent'         => 41,
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
											<!---->
											<!--                                        <option value="">Industry *</option>-->
											<!--										<option value="A">Mining and Quarry</option>-->
											<!--										<option value="B">Demolition &amp; renovation</option>-->
											<!--										<option value="C">Earth Moving and Construction</option>-->
											<!--										<option value="D">Infrastructures</option>-->
											<!--										<option value="E">Metallurgical Industry</option>-->
											<!--										<option value="F">Agriculture and forestry</option>-->
											<!--										<option value="G">Recycling</option>-->
											<!--										<option value="H">Material Handling</option>-->
										</select>
									</div>
								</div>
								<div>
									<div><span id="step2">2</span></div>
									<div>
										<select id="application" class="disabled" name="campo_applicazione" disabled="true" required="required" >
											<option class="hideme" value="v1">Область применения *</option>
											<?php
											$campo_args = array(
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
												'parent'         => 42,
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
											$campo = get_terms( $campo_args );

											?>

											<?php foreach ($campo as $camp) :?>
												<option value="<?php echo $camp->slug?>"><?php echo $camp->name;?></option>

											<?php endforeach;?>

											<!--<option value="">Application Areas *</option>-->
											<!---->
											<!--										<option value="AA" data-industry="A">Preliminary works</option>-->
											<!--										<option value="AB" data-industry="A">Secondary demolition</option>-->
											<!--										<option value="AC" data-industry="A">Primary rock breaking</option>-->
											<!---->
											<!--										<option value="BA" data-industry="B">Light Demolition</option>-->
											<!--										<option value="BB" data-industry="B">Demolition of non-reinforced concrete structures</option>-->
											<!--										<option value="BC" data-industry="B">Composite steel &amp; concrete structure demolition</option>-->
											<!--										<option value="BD" data-industry="B">Demolition of metallic buildings and structures</option>-->
											<!--										<option value="BE" data-industry="B">Sorting and Loading</option>-->
											<!--										<option value="BF" data-industry="B">Pavement demolition</option>-->
											<!---->
											<!--										<option value="CA" data-industry="C">Earth moving works</option>-->
											<!--										<option value="CB" data-industry="C">Foundation works</option>-->
											<!--										<option value="CC" data-industry="C">Building construction</option>-->
											<!---->
											<!--										<option value="DA" data-industry="D">Tunnelling</option>-->
											<!--										<option value="DB" data-industry="D">Underwater application</option>-->
											<!--										<option value="DC" data-industry="D">Trenching</option>-->
											<!--										<option value="DD" data-industry="D">Road construction</option>-->
											<!---->
											<!--										<option value="EA" data-industry="E">Slag recycling</option>-->
											<!--										<option value="EB" data-industry="E">Cleaning &amp; debricking</option>-->
											<!---->
											<!--										<option value="FA" data-industry="F">Gardening &amp; Landscaping</option>-->
											<!--										<option value="FB" data-industry="F">Forestry</option>-->
											<!---->
											<!--										<option value="GA" data-industry="G">Processing</option>-->
											<!--										<option value="GB" data-industry="G">Handling and sorting</option>-->
											<!--										<option value="GC" data-industry="G">Downsizing and sorting</option>-->
											<!---->
											<!--										<option value="HA" data-industry="H">Material Handling</option>-->
										</select>
									</div>
								</div>
								<div>
									<div><span id="step3">3</span></div>
									<div>
										<select id="attivita" class="disabled" name="attivita" required="required" disabled="true" ">
										<option class="hideme" value="v1">Тип работ *</option>
										<?php
										$attivita_args = array(
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
											'parent'         => 43,
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
										$attivita = get_terms( $attivita_args );

										?>

										<?php foreach ( $attivita as  $attiv) :?>
											<option value="<?php echo $attiv->slug;?>"><?php echo  $attiv->name;?></option>

										<?php endforeach;?>

										<!--										<option value="">Activity *</option>-->
										<!--										<option value="AAA" data-industry="A" data-application="A">Overburden removal</option>-->
										<!--										<option value="AAB" data-industry="A" data-application="A">Bench, road &amp; ramp leveling</option>-->
										<!--										<option value="AAC" data-industry="A" data-application="A">Roof, face &amp; rib scaling</option>-->
										<!---->
										<!--										<option value="ABA" data-industry="A" data-application="B">Boulder reduction in rock pile</option>-->
										<!--										<option value="ABB" data-industry="A" data-application="B">Removing blockages at crushing systems</option>-->
										<!---->
										<!--										<option value="ACA" data-industry="A" data-application="C">Selective rock breaking</option>-->
										<!--										<option value="ACB" data-industry="A" data-application="C">Blastfree mining</option>-->
										<!---->
										<!--										<option value="BAA" data-industry="B" data-application="A">Demolition of masonry structures</option>-->
										<!--										<option value="BAB" data-industry="B" data-application="A">Brickwork</option>-->
										<!--										<option value="BAC" data-industry="B" data-application="A">Natural stone</option>-->
										<!--										<option value="BAD" data-industry="B" data-application="A">Renovation of interiors</option>-->
										<!--										<option value="BAE" data-industry="B" data-application="A">Autoclaved aerated concrete</option>-->
										<!---->
										<!--										<option value="BBA" data-industry="B" data-application="B">Primary demolition of lightweight and standard concrete</option>-->
										<!--										<option value="BBB" data-industry="B" data-application="B">Primary demolition of heavyweight concrete</option>-->
										<!--										<option value="BBC" data-industry="B" data-application="B">Wall Elements</option>-->
										<!--										<option value="BBD" data-industry="B" data-application="B">Secondary demolition</option>-->
										<!---->
										<!--										<option value="BCA" data-industry="B" data-application="C">Primary Demolition of Lightweight and Standard reinforced concrete</option>-->
										<!--										<option value="BCB" data-industry="B" data-application="C">Primary demolition of heavyweight steel - reinforced concrete</option>-->
										<!--										<option value="BCC" data-industry="B" data-application="C">Secondary Demolition floors, slabs and beams</option>-->
										<!--										<option value="BCD" data-industry="B" data-application="C">Separating rebars from pillars and struts</option>-->
										<!--										<option value="BCE" data-industry="B" data-application="C">Fiber-reinforced concrete</option>-->
										<!--										<option value="BCF" data-industry="B" data-application="C">Cutting rebars and steel reinforcements</option>-->
										<!---->
										<!--										<option value="BDA" data-industry="B" data-application="D">Demolition of refineries</option>-->
										<!--										<option value="BDB" data-industry="B" data-application="D">Cutting of Metal and steel structures</option>-->
										<!--										<option value="BDC" data-industry="B" data-application="D">Cutting steel girders/beams</option>-->
										<!--										<option value="BDD" data-industry="B" data-application="D">Cutting reinforcements</option>-->
										<!---->
										<!--										<option value="BEA" data-industry="B" data-application="E">Sorting</option>-->
										<!--										<option value="BEB" data-industry="B" data-application="E">Loading</option>-->
										<!--										<option value="BEC" data-industry="B" data-application="E">Waste handling</option>-->
										<!--										<option value="BED" data-industry="B" data-application="E">Site clean-up</option>-->
										<!---->
										<!--										<option value="BFA" data-industry="B" data-application="F">Asphalt</option>-->
										<!--										<option value="BFB" data-industry="B" data-application="F">Concrete</option>-->
										<!--										<option value="BFC" data-industry="B" data-application="F">Composite surfaces</option>-->
										<!---->
										<!--										<option value="CAA" data-industry="C" data-application="A">Trenching</option>-->
										<!--										<option value="CAB" data-industry="C" data-application="A">Ground excavation</option>-->
										<!--										<option value="CAC" data-industry="C" data-application="A">Floor leveling</option>-->
										<!--										<option value="CAD" data-industry="C" data-application="A">Soil compaction</option>-->
										<!--										<option value="CAE" data-industry="C" data-application="A">Trench compaction</option>-->
										<!--										<option value="CAF" data-industry="C" data-application="A">Loading soil or bulk material</option>-->
										<!---->
										<!--										<option value="CBA" data-industry="C" data-application="B">Building foundation excavation</option>-->
										<!--										<option value="CBB" data-industry="C" data-application="B">Ground leveling</option>-->
										<!---->
										<!--										<option value="CCA" data-industry="C" data-application="C">Foundation pile driving</option>-->
										<!--										<option value="CCB" data-industry="C" data-application="C">Compaction around pillars</option>-->
										<!---->
										<!--										<option value="DAA" data-industry="D" data-application="A">Tunnel excavation</option>-->
										<!--										<option value="DAB" data-industry="D" data-application="A">Roof, face &amp; rib scaling</option>-->
										<!---->
										<!--										<option value="DBA" data-industry="D" data-application="B">Dredging</option>-->
										<!--										<option value="DBB" data-industry="D" data-application="B">Dock deepening &amp; extension</option>-->
										<!--										<option value="DBC" data-industry="D" data-application="B">Canal deepening &amp; extension</option>-->
										<!--										<option value="DBD" data-industry="D" data-application="B">Loading soil or bulk material</option>-->
										<!--										<option value="DBE" data-industry="D" data-application="B">Handling rock or breakwaters</option>-->
										<!---->
										<!--										<option value="DCA" data-industry="D" data-application="C">Oil &amp; gas, water &amp; sewage (deep trenching)</option>-->
										<!--										<option value="DCB" data-industry="D" data-application="C">Trenching</option>-->
										<!--										<option value="DCC" data-industry="D" data-application="C">Trench soil compaction</option>-->
										<!---->
										<!--										<option value="DDA" data-industry="D" data-application="D">Pile driving and guard rail driving</option>-->
										<!--										<option value="DDB" data-industry="D" data-application="D">Asphalt repair</option>-->
										<!--										<option value="DDC" data-industry="D" data-application="D">Maintenance work (driveways, sidewalks and parking lots)</option>-->
										<!--										<option value="DDD" data-industry="D" data-application="D">Block paving</option>-->
										<!---->
										<!--										<option value="EAA" data-industry="E" data-application="A">Boulder reduction in slag heaps</option>-->
										<!--										<option value="EAB" data-industry="E" data-application="A">Removing blockages at crushing systems</option>-->
										<!---->
										<!--										<option value="EBA" data-industry="E" data-application="B">Ladles</option>-->
										<!--										<option value="EBB" data-industry="E" data-application="B">Converter mouths</option>-->
										<!--										<option value="EBC" data-industry="E" data-application="B">Kilns</option>-->
										<!---->
										<!--										<option value="FAA" data-industry="F" data-application="A">Fencing</option>-->
										<!--										<option value="FAB" data-industry="F" data-application="A">Ground excavation</option>-->
										<!--										<option value="FAC" data-industry="F" data-application="A">Rock breaking</option>-->
										<!--										<option value="FAD" data-industry="F" data-application="A">Pit planting</option>-->
										<!--										<option value="FAE" data-industry="F" data-application="A">Log splitting</option>-->
										<!---->
										<!--										<option value="FBA" data-industry="F" data-application="B">Timber log handling</option>-->
										<!---->
										<!--										<option value="GAA" data-industry="G" data-application="A">Scrap material processing</option>-->
										<!--										<option value="GAB" data-industry="G" data-application="A">Cutting tyres</option>-->
										<!--										<option value="GAC" data-industry="G" data-application="A">Processing rail cars</option>-->
										<!--										<option value="GAD" data-industry="G" data-application="A">Processing cars, trucks and general automotive</option>-->
										<!--										<option value="GAE" data-industry="G" data-application="A">Cutting tanks</option>-->
										<!---->
										<!--										<option value="GBA" data-industry="G" data-application="B">Scrap material handling</option>-->
										<!--										<option value="GBB" data-industry="G" data-application="B">Scrap material sorting</option>-->
										<!--										<option value="GBC" data-industry="G" data-application="B">Urban waste</option>-->
										<!--										<option value="GBD" data-industry="G" data-application="B">Industrial waste</option>-->
										<!--										<option value="GBE" data-industry="G" data-application="B">Wood and tyres</option>-->
										<!---->
										<!--										<option value="GCA" data-industry="G" data-application="C">Material downsizing and sorting in recycling quarries</option>-->
										<!---->
										<!--										<option value="HAA" data-industry="H" data-application="A">Loading soil or bulk material</option>-->
										<!--										<option value="HAB" data-industry="H" data-application="A">Handling rock or breakwaters</option>-->
										<!--										<option value="HAC" data-industry="H" data-application="A">Material transport, storage, positioning</option>-->
										<!--										<option value="HAD" data-industry="H" data-application="A">Timber log handling</option>-->
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

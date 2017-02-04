<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

</div><!--head-box-->
<div class="foot-box">
	<footer  class="footer">
		<div class="container">
			<div class="row foot-menu">
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<div class="navbar-header">
						<?php the_custom_logo(); ?>
<!--						<a class="navbar-brand" href="#"><img src="--><?php //echo get_template_directory_uri()?><!--/assets/img/logo.png" alt=""></a>-->
					</div>
				</div>
<!--				--><?php //get_template_part( 'template-parts/footer/footer', 'widgets' );?>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
<!--				<nav class="social-navigation" role="navigation" aria-label="--><?php //_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?><!--">-->
<!--					--><?php
//					wp_nav_menu( array(
//						'theme_location' => 'social',
//						'menu_class'     => 'social-links-menu',
//						'depth'          => 2,
//						'link_before'    => '<span class="screen-reader-text">',
//						'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
//					) );
//					?>
<!--				</nav><!-- .social-navigation -->
				<?php endif;?>
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<p>О компании</p>
					<ul class="foot-item">
						<li><a href="/katalog-produkcii/">Каталог продукции</a></li>
						<li><a href="/price">Скачать прайс</a></li>
						<li><a href="/novosti">Новости</a></li>

					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<p>Покупателям</p>
					<ul class="foot-item">
						<li><a href="/kak-kupit">Как купить</a></li>
						<li><a href="/obsluzhivanie">Обслуживание</a></li>
						<li><a href="/kontakty">Контакты</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<p>Дополнения</p>
					<ul class="foot-item">
						<li><a href="/video">Видео</a></li>
						<li><a href="/foto">Фото</a></li>
						<li><a href="/rasprodazha">Распродажа</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<p>Способы оплаты</p>
					<ul class="foot-item payment">
						<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/VISA.png" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/mastercard.png" alt=""></a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 w100">
					<p>Присоединяйтесь</p>
					<ul class="foot-item  soc-button">
						<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/vk.png" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/facebook.png" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/tw.png" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php get_template_part( 'template-parts/footer/site', 'info' );?>

				</div>
			</div>
		</div>
	</footer>



	<div class="hidden">
		<div id="map_window">
			<!-- <iframe class="yandexmap" src="php/ymap.php"></iframe> -->
			<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=vJSEBOiMLDDiIaZUjrWj-sxUmP2mF6Zn&amb;width=100%&amb;height=400&amb;lang=ru_UA&amb;sourceType=constructor&amb;scroll=true"></script> -->
			<div class="close_map"></div>
		</div>
		<div id="success" class="window">
			<div class="close"></div>
			Спасибо за обращение.<br>Ваша заявка принята.
		</div>
		<div id="zakaz">
			<form class="form-modal">
				<h2 class="h2">Ваш заказ</h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="img-ajax"></div>
					</div>
					<div class="col-sm-6">
						<div class="wrap clearfix">
							<ul class="params"></ul>
							<div class="total"><span>Общая стоимость: </span><span class="price"></span></div>
							<div class="field-item" >
								<input type="text" required="" value="" placeholder="Ваше имя" name="name">
							</div>
							<div class="field-item">
								<input type="text" required="" value="" name="phone"  placeholder="Ваш телефон"  class="error">
							</div>
							<div class="field-item">
								<input type="submit" value="Заказать" class="btn-default" >
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


</div>


<?php wp_footer(); ?>

</body>
</html>

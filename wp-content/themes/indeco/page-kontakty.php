<?php

get_header();


?>
	<main class="main">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>

					</div>
				</div>

			</div>
			<div class="row">



			</div>

		</div>

		<section class="map">
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7iJz0TICDZNHjaaGq9lNx6ue1xCNX0gU&v=3.exp"></script>
			<div class="block-gmap">
				<div id="map-canvas"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
<!--							<div class="map-info">-->
<!--								<div class="inner-text clearfix">-->
<!--									-->
<!--								</div>-->
<!--							</div>-->
						</div>
					</div>
				</div>
			</div>
			<script src="<?php echo get_theme_file_uri()?>/assets/js/map.js" charset="utf-8"></script>

		</section>

		<div class="kontakt">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="deliveri">
							<div class="block-title">Контактная информация</div>
							<div class="block-content">

								<div class="content-item">
									<h4 class="h4">Адрес</h4>
									<p>Россия, г. Санкт-Петербург, Лиговский проспект, 113 лит."В",
										офис № 31.</p>

									<h4 class="h4">Часы работы офиса</h4>
									<p>Пн-Пт с 11:00 до 18:00	Сб-Вс: Выходной</p>

									<h4 class="h4">Почтовый адрес</h4>
									<p>123007, г. Москва, а/я 87, ООО «Регистратор доменных имён REG.RU»</p>

									<h4 class="h4">Контактные телефоны:</h4>
									<p><a href="tel:+76953354547">+7 695 335 45 47</a></p>
									<p><a href="tel:+70985584565">+7 098 558 45 65</a></p>

								</div>

							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="deliveri">
							<div class="block-title">БЫСТРАЯ СВЯЗЬ</div>
							<div class="block-content">

								<div class="content-item">
									<div class="item">
										<span class="required">*</span> ИМЯ
									</div>
									<div class="item">

										<input  id="name" name="name" type="text">

									</div>

								</div>
								<div class="content-item">
									<div class="item">
										<span class="required">*</span> E-MAIL
									</div>
									<div class="item">

										<input  id="email" name="email" type="text">

									</div>

								</div>
								<div class="content-item">
									<div class="item">
										<span class="required">*</span> Телефон
									</div>
									<div class="item">

										<input  id="phone" name="phone" type="text">

									</div>

								</div>
								<div class="content-item">
									<div class="item">
										Текст сообщения
									</div>
									<div class="item">
										<div class="item textarea-block">
											<textarea name="kom" rows="3" placeholder=""></textarea>
										</div>
									</div>

								</div>
								<div class="content-item">
									<button type="submit" class="btn-buy" value="">Отправить</button>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>



<?php

get_footer();

?>

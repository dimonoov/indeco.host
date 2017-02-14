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
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // Цикл начинается. Если есть записи в цикле, то выводим их ?>

                                    <?php the_content();?>

                                    <?php endwhile; else: // Если записей нет, то выводим сообщение об этом ?>
                                        <p><?php echo 'Извините, записей нет'; ?></p>
                                    <?php endif; // Цикл заканчивается ?>
								</div>

							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<form class="ajaxform deliveri" method="post">
							<div class="block-title">БЫСТРАЯ СВЯЗЬ</div>
							<div class="block-content">

								<div class="content-item">
									<div class="item">
										<span class="required">*</span> ИМЯ
									</div>
									<div class="item">

										<input  id="name" name="name" required type="text">

									</div>

								</div>
								<div class="content-item">
									<div class="item">
										<span class="required">*</span> E-MAIL
									</div>
									<div class="item">

										<input  id="email" name="email" required type="text">

									</div>

								</div>
								<div class="content-item">
									<div class="item">
										<span class="required">*</span> Телефон
									</div>
									<div class="item">

										<input  id="phone" name="phone" required type="text">

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
						</form>
					</div>
				</div>
			</div>
		</div>

	</main>



<?php

get_footer();

?>

<?php
/**
 * Template name: Страница каталог
 */

get_header(); ?>
	<?php var_dump($_POST);?>
	<main class="main">
		<div class="">
			<form class="form-1" id="basket-zakaz" action="<?php echo home_url()?>/checkout/" method="POST">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="breadcrumbs">
								<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>

							</div>
						</div>
					</div>
					<div class="row tbl_wrap">
						<div class="col-md-10 col-md-offset-1">

							<div class="wrap_table">
								<div class="basket_wrap">

									<div id="cart">

                                        <?php echo cart_view();?>
									</div>
								</div>

							</div>

						</div>


					</div>
				</div>
                <?php if(!empty($_SESSION['cart'])) :?>
				<div class="container">
					<div class="row client-info">
						<div class="col-md-5 col-md-offset-1">
							<div class="deliveri">
								<div class="block-title">Покупатель</div>
								<div class="block-content">
<!--									<div class="content-item">-->
<!--										<div class="item ">-->
<!--											Зарегистрироваться-->
<!--										</div>-->
<!--										<div class="item tright">-->
<!--											<label for="yes">Да</label>-->
<!--											<input type="radio" name="reg" value="yes" checked id="yes">-->
<!--											<label for="no">Нет</label>-->
<!--											<input type="radio" name="reg" value="no" id="no">-->
<!--										</div>-->
<!---->
<!--									</div>-->
									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Группа покупаля
										</div>
										<div class="item">
											<select name="customer" id="customer">
												<option value="1">group1</option>
												<option value="2">group2</option>
												<option value="3">group3</option>
											</select>
										</div>

									</div>

									<div class="content-item">
										<div class="item">
											<span class="required">*</span> E-mail
										</div>
										<div class="item">
											<input type="email" name="email">
										</div>
									</div>
									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Имя
										</div>
										<div class="item">
											<input type="text" name="first_name">
										</div>
									</div>
									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Фамилия
										</div>
										<div class="item">
											<input type="text" name="second_name">
										</div>
									</div>
									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Телефон
										</div>
										<div class="item">
											<input type="tel" name="tel">
										</div>
									</div>
								</div>
							</div>
							<div class="deliveri">
								<div class="block-title">Покупатель</div>
								<div class="block-content">

									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Регион
										</div>
										<div class="item">
											<select name="region" id="region">
												<option value="1">group1</option>
												<option value="2">group2</option>
												<option value="3">group3</option>
											</select>
										</div>

									</div>

									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Город
										</div>
										<div class="item">
											<input type="text" name="city">
										</div>
									</div>
									<div class="content-item">
										<div class="item">
											<span class="required">*</span> Адрес
										</div>
										<div class="item">
											<input type="text" name="address">
										</div>
									</div>
									<div class="content-item">
										<div class="item">
											Реквизиты
										</div>
										<div class="item file-upload details">
											<label>
												<input type="file" onchange="getName(this.value);"  name="rekvizites"  >
												<span id="text">Загрузить файл</span>
											</label>
										</div>
										<div id="flash-text" class="flash-text"></div>
										<script>
											function getName (str){
												console.log(str);
												if (str.lastIndexOf('\\')){
													var i = str.lastIndexOf('\\')+1;
												}
												else{
													var i = str.lastIndexOf('/')+1;
												}
												var filename = str.slice(i);
												var uploaded = document.getElementById("text");
												uploaded.innerHTML = 'Файл загружен';
												var flashtext = document.getElementById("flash-text");
												flashtext.innerHTML =  '<p class="del"><a title="удалить" onclick="delName()" class="MultiFile-remove" href="#MultiFile1">x</a> '+filename+' </p>';
											}
											function delName(str){
												var uploaded = document.getElementById("text");
												uploaded.innerHTML = "Загрузить файл";
												uploaded.value = "";
												var flashtext = document.getElementById("flash-text");
												flashtext.innerHTML =  '';
											}

										</script>
									</div>
									<div class="content-item">
										<div class="item">
											Доп. файл
										</div>
										<div class="item file-upload details">
											<label>
												<input type="file"  onchange="getName1(this.value);"   name="file"  >
												<span id="text1">Загрузить файл</span>
											</label>
										</div>
										<div id="flash-text1" class="flash-text"></div>
										<script>
											function getName1 (str){
												console.log(str);
												if (str.lastIndexOf('\\')){
													var i = str.lastIndexOf('\\')+1;
												}
												else{
													var i = str.lastIndexOf('/')+1;
												}
												var filename = str.slice(i);
												var uploaded = document.getElementById("text1");
												uploaded.innerHTML = 'Файл загружен';
												var flashtext = document.getElementById("flash-text1");
												flashtext.innerHTML =  '<p class="del"><a title="удалить" onclick="delName1()" class="MultiFile-remove" href="#MultiFile1">x</a> '+filename+' </p>';
											}
											function delName1(str){
												var uploaded = document.getElementById("text1");
												uploaded.innerHTML = "Загрузить файл";
												uploaded.value = "";
												var flashtext = document.getElementById("flash-text1");
												flashtext.innerHTML =  '';
											}

										</script>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-5">
							<div class="deliveri delive">
								<div class="block-title">Способ доставки</div>
								<div class="block-content">
									<div class="content-item">
										<div class="item">
											<select name="customer" id="delivery">
												<option value="1">Транспортная компания</option>
												<option value="2">group2</option>
												<option value="3">group3</option>
											</select>
										</div>
										<p>Стоимость и способ доставки зависит от условий предоставляемой транспортной компанией</p>
									</div>
								</div>
							</div>
							<div class="deliveri payment">
								<div class="block-title">Способ оплаты</div>
								<div class="block-content">
									<div class="content-item">
										<div class="item">
											<select name="payment" id="payment">
												<option value="1">МаsterCard</option>
												<option value="2">Visa</option>
												<option value="3">group3</option>
											</select>
										</div>
										<p>Стоимость и способ доставки зависит от условий предоставляемой транспортной компанией</p>
									</div>
								</div>
							</div>
							<div class="deliveri">
								<div class="block-title">Комментарии</div>
								<div class="block-content">
									<div class="content-item">
										<div class="item textarea-block">
											<textarea name="name" rows="3" ></textarea>
										</div>

									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-6 col-md-offset-1 col-xs-6 w100">
							<div class="btn-wrap text-left">
								<button type="reset"  class="details" value="">Очистить корзину</button>
							</div>
						</div>
						<div class="col-md-5 col-sm-6 col-xs-6 w100">
							<div class="btn-wrap text-right">
								<button type="submit"  class="btn-buy" value="">Оформить заказ</button>
							</div>
						</div>
					</div>
				</div>
                <?php endif;?>
			</form>
		</div>
	</main>


<?php get_footer();

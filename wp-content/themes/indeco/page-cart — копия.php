<?php
/**
 * Template name: Страница каталог
 */

get_header(); ?>

	<main class="main">
		<div class="">
			<form class="form-1" action="/" method="POST">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Главная</a></li>
									<li><a href="#">Каталог продукции</a></li>
									<li><a href="#">ГРейферные захваты</a></li>
									<li>IMG</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row tbl_wrap">
						<div class="col-md-10 col-md-offset-1">

							<div class="wrap_table">
								<div class="basket_wrap">

									<?php if(!empty($_SESSION['cart'])) : ?>
										<h5>Корзина?></h5>
									<table class="table2">
										<thead>
										<tr>
											<td class="product_foto">
												Фото
											</td>
											<td class="wid-5">Наименование</td>
											<td class="wid-6">Артикул</td>
											<!-- <td class="wid-7">Колличество</td> -->
											<td class="wid-8">Цена</td>
											<td class="wid-9">Сумма</td>
											<td class="wid-10">&nbsp;</td>
										</tr>
										</thead>
										<tbody>

											<?php foreach ($_SESSION['cart'] as $id => $cart_item) : ?>


												<tr class="color-1">
													<td class="product_foto">
														<img src="<?php echo $cart_item['img']; ?>" alt="<?php echo $cart_item['name']; ?>">
													</td>
													<td class="wid-5"><a href="<?php echo $cart_item['guid']; ?>"><img src="<?php echo $cart_item['img']; ?>" alt="<?php echo $cart_item['name']?>"></a></td>
													<td class="wid-6">ATF-9001</td>
													<!-- <td class="wid-7"></td> -->
													<td class="wid-8"><input name="qty_1481525533" step="1" value="<?php echo $cart_item['gty']; ?>" min="1" max="1000" class="jcf-real-element" type="number"><strong><?php echo $cart_item['price']; ?> <i class="fa fa-rub"></i></strong> </td>
													<td class="wid-9"><strong><?php echo $cart_item['price']*$cart_item['gty']; ?> <i class="fa fa-rub"></i></strong></td>
													<td class="wid-10"><a href="<?php echo $cart_item['guid']?>" class="btn-del product_remove">del</a></td>
												</tr>
<!--												<li>-->
<!--													<a href="--><?php //echo Url::to(['cart/remove', 'id' => $cart_item['id'] ]); ?><!--" class="product_remove">x</a>-->
<!--												</li>-->
											<?php endforeach; ?>


										<div class="total_in_cart"><span>Всего исключая доставку:</span><span class="price">$<?php echo  $_SESSION['cart']['qty']; ?></span> </div>

										<a href="<?php ?>" class="btn btn-primary k_oplate">Перейти к оплате</a>
									<?php else : ?>
										<h5>Корзина пуста</h5>
									<?php endif; ?>

									<table class="table2">
										<thead>
										<tr>
											<td class="product_foto">
												Фото
											</td>
											<td class="wid-5">Наименование</td>
											<td class="wid-6">Артикул</td>
											<!-- <td class="wid-7">Колличество</td> -->
											<td class="wid-8">Цена</td>
											<td class="wid-9">Сумма</td>
											<td class="wid-10">&nbsp;</td>
										</tr>
										</thead>
										<tbody>





										<tr>
											<td class="product_foto">
												<img src="<?php echo get_theme_file_uri();?>/assets/img/small-product.jpg" alt="">
											</td>
											<td class="wid-5">Aisin</td>
											<td class="wid-6">ATF-9001</td>
											<!-- <td class="wid-7"></td> -->
											<td class="wid-8"><input name="qty_1481525533" step="1" value="3" min="1" max="1000" class="jcf-real-element" type="number"><strong>706 <i class="fa fa-rub"></i></strong> </td>
											<td class="wid-9"><strong>706 <i class="fa fa-rub"></i></strong></td>
											<td class="wid-10"><a href="http://avtgr.ru/basket/?act=remove&amp;id=1481525534" class="btn-del">del</a></td>
										</tr>
										<tr class="color-1">
											<td class="product_foto">
												<img src="<?php echo get_theme_file_uri();?>/assets/img/small-product.jpg" alt="">
											</td>
											<td class="wid-5">Aisin</td>
											<td class="wid-6">ATF-9001</td>
											<!-- <td class="wid-7"></td> -->
											<td class="wid-8"><input name="qty_1481525533" step="1" value="3" min="1" max="1000" class="jcf-real-element" type="number"><strong>706 <i class="fa fa-rub"></i></strong> </td>
											<td class="wid-9"><strong>706 <i class="fa fa-rub"></i></strong></td>
											<td class="wid-10"><a href="http://avtgr.ru/basket/?act=remove&amp;id=1481525539" class="btn-del">del</a></td>
										</tr>
										</tbody>
									</table>
									<div class="form-1-price">
										<div class="total-price-product text-right">
											<div class="total-price">
												ИТОГО
												<span class="price">398 000 <i class="fa fa-rub"></i></span>
											</div>


										</div>

									</div>

								</div>

							</div>

						</div>


					</div>
				</div>
				<div class="container">
					<div class="row client-info">
						<div class="col-md-5 col-md-offset-1">
							<div class="deliveri">
								<div class="block-title">Покупатель</div>
								<div class="block-content">
									<div class="content-item">
										<div class="item ">
											Зарегистрироваться
										</div>
										<div class="item tright">
											<label for="yes">Да</label>
											<input type="radio" name="reg" value="yes" checked id="yes">
											<label for="no">Нет</label>
											<input type="radio" name="reg" value="no" id="no">
										</div>

									</div>
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
											<select name="customer" id="payment">
												<option value="1">Транспортная компания</option>
												<option value="2">group2</option>
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
								<button type="submit"  class="details" value="">Очистить корзину</button>
							</div>
						</div>
						<div class="col-md-5 col-sm-6 col-xs-6 w100">
							<div class="btn-wrap text-right">
								<button type="submit"  class="btn-buy" value="">Оформить заказ</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>


<?php get_footer();

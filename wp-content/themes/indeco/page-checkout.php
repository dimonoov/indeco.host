<?php
/**
 * Template name: Страница каталог
 */


function send_mail($info_client, $new_post){

	$rezult['info_client'] = $info_client;
	$rezult['new_post'] = $new_post;


	$text .= "Имя клиента: ". $info_client['name'] . "\n".'<br>';
	$text .= "Телефон клиента: ". $info_client['phone'] . "\n".'<br>';
	$text .= "Email клиента: ". $info_client['email'] . "\n".'<br>';

	$headers[] = 'From: indeco <schtaketnik@example.net>';
	$headers[] = 'content-type: text/html';
	$headers[] = 'Cc: indeco <admin@email.ru>';
	$headers[] = 'Cc: admin@email.ru'; // тут можно использовать только простой email адрес

	$multiple_to_recipients = array(
		'recipient1@example.com',
		'recipient2@foo.example.com'
	);
	$subject = "Заказ товара INDECO";


	$zakaz_html = "<table>";

	$zakaz_html .= "<tr>";
	$zakaz_html .= "<td>Название товара</td>";
	$zakaz_html .= "<td>Колличество</td>";
	$zakaz_html .= "<td>Цена</td>";
	$zakaz_html .= "<td>Стоимость</td>";
	$zakaz_html .= "</tr>";

	foreach ($new_post as  $value) {
		$zakaz_html .= "<tr>";

		$zakaz_html .= "<td>".$value['name']."</td>";
		$zakaz_html .= "<td>".$value['qty']."</td>";
		$zakaz_html .= "<td>".$value['price']."</td>";
		$zakaz_html .= "<td>".$value['price']*$value['qty']."</td>";
		$zakaz_html .= "</tr>";
	}



	$zakaz_html .="</table>";
	$zakaz_html .="<p>Общая стоимтость заказа ".$_SESSION['sum']."</p>";

	wp_mail( $multiple_to_recipients, $subject, $text.$zakaz_html, $headers );


}

function add_order(){
	session_start();
//	foreach ($_POST['products_id'] as $id => $qty) {
//		$new_post[$id]['product']['title'] =  $qty;
//	}
//
//


	$info_client['customer'] = $_POST['customer'];
	$info_client['email'] = $_POST['email'];
	$info_client['first_name'] = $_POST['first_name'];
	$info_client['second_name'] = $_POST['second_name'];
	$info_client['phone'] = $_POST['phone'];

	$info_client['region'] = $_POST['region'];
	$info_client['address'] = $_POST['address'];
	$info_client['city'] = $_POST['city'];
	$info_client['rekvizites'] = $_FILES['rekvizites'];
	$info_client['file'] = $_FILES['file'];


	$info_client['transport'] = $_POST['transport'];
	$info_client['payment'] = $_POST['payment'];
	$info_client['kom'] = $_POST['city'];
// var_dump($info_client);



	// Вставляем запись в базу данных
	$new_post = array(
		'post_title' => esc_html($_REQUEST['first_name'].' '.$_REQUEST['second_name']),
		'post_content' => esc_html($_REQUEST['phone']),
		'post_status' => 'publish',
		'post_date' => date('Y-m-d H:i:s'),
		'post_author' => '1',
		'post_type'      => 'zakaz', // Тип записи.
		'tax_input'      =>  array( 'zakaz_cat' => array( 'texnika' ) ),  // поддержка для произвольных таксономий.
//		'meta_input'     => array( 'meta_key'=>'meta_value' )  // добавит указанные мета поля. По умолчанию: ''. с версии 4.4.
	);


 	$out = array();
 	$post_id = wp_insert_post($new_post);
// save a basic text value

	$info_client['customer'] = $_POST['customer'];
	$info_client['email'] = $_POST['email'];
	$info_client['first_name'] = $_POST['first_name'];
	$info_client['second_name'] = $_POST['second_name'];
	$info_client['phone'] = $_POST['phone'];

	$info_client['region'] = $_POST['region'];
	$info_client['address'] = $_POST['address'];
	$info_client['city'] = $_POST['city'];
	$info_client['rekvizites'] = $_FILES['rekvizites'];
	$info_client['file'] = $_FILES['file'];


	$info_client['transport'] = $_POST['transport'];
	$info_client['payment'] = $_POST['payment'];
	$info_client['kom'] = $_POST['city'];


	update_field( 'sum', $_SESSION['cart']['sum'], $post_id );
	update_field( 'client_name',$info_client['first_name'], $post_id );
	update_field( 'client_second_name', $info_client['second_name'], $post_id );
	update_field( 'tell', $info_client['phone'], $post_id );
	update_field( 'email', $info_client['email'], $post_id );
	update_field( 'client_group', $info_client['customer'], $post_id );
	//var_dump(get_field('products', 126));
	$cart_products_post = array();
	foreach($_SESSION['cart'] as $key => $value){
		if((int)$key){
//			if(post_exists($value['name']))
			$cart_products_post[] = get_post($key);
		}
	}
	// var_dump($cart_products_post);
	update_field( 'products', $cart_products_post, $post_id );
//	update_field( 'reg', $_SESSION['sum'], $post_id );
	update_field( 'region', $info_client['region'], $post_id );
	update_field( 'city', $info_client['city'], $post_id );
	update_field( 'address', $info_client['address'], $post_id );
	update_field( 'requisites', $info_client['rekvizites'], $post_id );
	update_field( 'file', $info_client['file'], $post_id );
	update_field( 'payment', $info_client['payment'], $post_id );
	update_field( 'delivery', $info_client['delivery'], $post_id );
	update_field( 'komment', $info_client['komment'], $post_id );

// echo $post_id.'IDPOST';

	if($post_id){

         $out['result']='ok';
         
         unset($_SESSION['cart']);
         
         ?>
         <script>
         	 $("#top-cart").find(".fa-shopping-cart span").fadeOut();
            $("#top-cart").find("a ").html("Корзина пуста");
           // showCart(res["html"]);
			$(".client-info").remove();
			$(".btns").remove();
         </script>
         
         <?php
         
         
     }else{
         $out['result']='error';
     }

// var_dump($out);
// 

	//  echo json_encode($out);

}

add_order();
//add_action('wp_ajax_add_order', 'add_order');
//add_action('wp_ajax_nopriv_add_order', 'add_order');
send_mail($info_client, $_SESSION['cart']);

?>

<?php get_header(); ?>
	
	
	<main class="main">
		<div class="container">
			<div class="row client-info">
				<?php var_dump($_POST);?>
				<h2 class="text-center">Ваш заказ принят</h2>

				<div class="col-md-5 col-md-offset-1">

					<div class="deliveri">
						<div class="block-title">Информация о заказе</div>
						<div class="block-content">

							<div class="content-item">
								<div class="item">
									Номер заказа:
								</div>
								<div class="item">
									<?php echo $post_id;?>
								</div>
							</div>
							<div class="content-item">
								<div class="item">
									Дата:
								</div>
								<div class="item">
									<?php echo get_the_date($post_id);?>
								</div>
							</div>
							<div class="content-item">
								<div class="item">
									Всего:
								</div>
								<div class="item">
									<?php echo $_SESSION['cart']['sum']?>
								</div>
							</div>
							<div class="content-item">
								<div class="item">
									Способ оплаты
								</div>
								<div class="item">
									<?php echo $_POST['customer'];?>
								</div>
							</div>
							<div class="content-item">
								<div class="item">
									Доставка:
								</div>
								<div class="item">
									<?php echo $_POST['payment'];?>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-5">
					<div class="deliveri delive">
						<div class="block-title">Вы заказали</div>
						<div class="block-content">
							<div class="content-item">
								<div class="item">
									<div id="checkout">
										<table>

											<?php foreach ($_SESSION['cart'] as $id => $item):?>
												<tr>

													<td>
														<?php echo get_the_post_thumbnail($id, array(50,50))?>
													<td>
													<td>
														<?php echo get_the_title($id)?> * <?php echo $item['qty']. ' шт.';?>
													<td>
													<td>
														<?php $price = get_field('price', $id); echo $item['price']*$item['qty']. ' руб.'; ?>
													<td>
												</tr>
											<?php endforeach;?>
											<tr>
												<td colspan="2">Итого:</td>
												<td><?php echo $_SESSION['cart']['sum'];?></td>
											</tr>
										</table>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">


				</div>
			</div>
		</div>
	</main>


<?php get_footer();

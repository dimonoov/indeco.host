<?php

// хук для регистрации
add_action('init', 'create_taxonomy');
function create_taxonomy(){
	// заголовки
	// весь список: http://wp-kama.ru/function/get_taxonomy_labels
	$labels = array(
		'menu_name'         => 'Категории',
		'name'              => 'Категории товаров',
		'singular_name'     => 'Категория товаров',
		'search_items'      => 'Поиск категории товаров',
		'all_items'         => 'Все категории товаров',
		'parent_item'       => 'Родительская категория товаров',
		'parent_item_colon' => 'Родительская категория товаров:',
		'edit_item'         => 'Редактировать категорию товаров',
		'update_item'       => 'Обновить категорию товаров',
		'add_new_item'      => 'Добавить новую категорию товаров',
		'new_item_name'     => 'Новая категория товаров'
	);
	// параметры
	$args = array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => $labels,
		'description'           => 'Категории товаров', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,

		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => true, // по умолчанию значение show_ui
	);
	register_taxonomy('product_cat', array('product'), $args );


	// заголовки
	// весь список: http://wp-kama.ru/function/get_taxonomy_labels
	$labs = array(
		'menu_name'         => 'Спецификации',
		'name'              => 'Спецификации товаров',
		'singular_name'     => 'Спецификация товаров',
		'search_items'      => 'Поиск спецификации товаров',
		'all_items'         => 'Все спецификации товаров',
		'parent_item'       => 'Родительская спецификации товаров',
		'parent_item_colon' => 'Родительская спецификация товаров:',
		'edit_item'         => 'Редактировать спецификацию товаров',
		'update_item'       => 'Обновить спецификацию товаров',
		'add_new_item'      => 'Добавить новую спецификацию товаров',
		'new_item_name'     => 'Новая спецификация товаров'
	);
	// параметры
	$ags = array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => $labs,
		'description'           => 'Спецификации товаров', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
//        'rewrite' => array( 'slug' => '/', 'with_front' => false,'hierarchical' => true ),

        //'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	);
	register_taxonomy('assign_cat', array('product'), $ags );

    // заголовки
    // весь список: http://wp-kama.ru/function/get_taxonomy_labels
    $lbs = array(
        'menu_name'         => 'Отрасль',
        'name'              => 'Отрасль для товаров',
        'singular_name'     => 'Отрасль для товаров',
        'search_items'      => 'Поиск отрасли для товаров',
        'all_items'         => 'Все отрасли товаров',
        'parent_item'       => 'Родительская отрасль для товаров',
        'parent_item_colon' => 'Родительская отрасль для товаров:',
        'edit_item'         => 'Редактировать отрасль для товаров',
        'update_item'       => 'Обновить отрасль для товаров',
        'add_new_item'      => 'Добавить новую отрасль для товаров',
        'new_item_name'     => 'Новая отрасль для товаров'
    );
    // параметры
    $argums = array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => $lbs,
        'description'           => 'Отрасль для товаров', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => null, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => true, // равен аргументу show_ui
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        'hierarchical'          => true,
        'update_count_callback' => '',
        'rewrite'               => true,
//        'rewrite' => array( 'slug' => '/', 'with_front' => false,'hierarchical' => true ),

        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    );
    register_taxonomy('sector_cat', array('product'), $argums );


    // заголовки
    // весь список: http://wp-kama.ru/function/get_taxonomy_labels
    $lbs_z = array(
        'menu_name'         => 'Категории заказов',
        'name'              => 'Категории для заказов',
        'singular_name'     => 'Категории для заказов',
        'search_items'      => 'Поиск категории для заказов',
        'all_items'         => 'Все категории для заказов',
        'parent_item'       => 'Родительская категория для заказов',
        'parent_item_colon' => 'Родительская категория для заказов',
        'edit_item'         => 'Редактировать категорию для заказовв',
        'update_item'       => 'Обновить категорияю для заказов',
        'add_new_item'      => 'Добавить новую категорию для заказов',
        'new_item_name'     => 'Новая категория для заказов'
    );
    // параметры
    $argums_z = array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => $lbs_z,
        'description'           => 'Категория для заказов', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => null, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => true, // равен аргументу show_ui
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        'hierarchical'          => true,
        'update_count_callback' => '',
        'rewrite'               => true,
//        'rewrite' => array( 'slug' => '/', 'with_front' => false,'hierarchical' => true ),

        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    );
    register_taxonomy('zakaz_cat', array('zakaz'), $argums_z );



}

add_action('init', 'register_post_types');
function register_post_types() {
	register_post_type( 'product', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Товары', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить товар', // для добавления новой записи
			'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование товара', // для редактирования типа записи
			'new_item'           => 'Новый товар', // текст новой записи
			'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
			'search_items'       => 'Искать товар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары', // название меню
		),
		'description'         => 'Здесь вы можете добавлять новые товары',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		// добавить в REST API. C WP 4.7
		'rest_base'           => true,
		// $post_type. C WP 4.7
		'menu_position'       => 56,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'product_cat' ),
		'has_archive'         => false,
		'rewrite'             => array( 'slug' => 'product' ),
		'query_var'           => true,
	) );


	register_post_type( 'zakaz', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Заказы', // основное название для типа записи
			'singular_name'      => 'Заказ', // название для одной записи этого типа
			'add_new'            => 'Добавить заказ', // для добавления новой записи
			'add_new_item'       => 'Добавление заказа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование заказа', // для редактирования типа записи
			'new_item'           => 'Новый заказ', // текст новой записи
			'view_item'          => 'Смотреть заказ', // для просмотра записи этого типа.
			'search_items'       => 'Искать заказ', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Заказы', // название меню
		),
		'description'         => 'Здесь вы можете добавлять заказы',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		// добавить в REST API. C WP 4.7
		'rest_base'           => true,
		// $post_type. C WP 4.7
		'menu_position'       => 55,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'zakaz_cat' ),
		'has_archive'         => false,
		'rewrite'             => array( 'slug' => 'zakaz' ),
		'query_var'           => true,
	) );

}

add_image_size( 'product', '230', '220', true);


// Подключаем локализацию в самом конце подключаемых к выводу скриптов, чтобы скрипт
// 'twentyfifteen-script', к которому мы подключаемся, точно был добавлен в очередь на вывод.
// Заметка: код можно вставить в любое место functions.php темы
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

    // Первый параметр 'twentyfifteen-script' означает, что код будет прикреплен к скрипту с ID 'twentyfifteen-script'
    // 'twentyfifteen-script' должен быть добавлен в очередь на вывод, иначе WP не поймет куда вставлять код локализации
    // Заметка: обычно этот код нужно добавлять в functions.php в том месте где подключаются скрипты, после указанного скрипта
    wp_localize_script('jquery', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );

}
// добавление в корзину

/*Array
(
    [1] => Array
    (
        [qty] => QTY
        [name] => NAME
        [price] => PRICE
        [img] => IMG
    )
    [10] => Array
    (
        [qty] => QTY
        [name] => NAME
        [price] => PRICE
        [img] => IMG
    )
)
    [qty] => QTY,
    [sum] => SUM
);*/


function add_to_cart() {

    $product_id = (int)$_POST['product_id'];
    $qty = (int)$_POST['qty'];
    $product = get_post($product_id);
    if(empty($product)) return false;
    session_start() ;
    if(isset($_SESSION['cart'][$product->ID])){
        $_SESSION['cart'][$product->ID]['qty'] += $qty;
    }else{
        $_SESSION['cart'][$product->ID] = [

            'qty' => $qty,
            'name' => $product->post_title,
            'price' => '100', //$product->price
            'img' => get_the_post_thumbnail_url( $product->ID, 'thumbnail' ),
            'guid' => $product->guid
        ];
    }
    $_SESSION['cart']['qty'] = isset($_SESSION['cart']['qty']) ? $_SESSION['cart']['qty'] + $qty : $qty;
    $_SESSION['cart']['sum'] = isset($_SESSION['cart']['sum']) ? $_SESSION['cart']['sum'] + $qty * 100 : $qty * 100;
//    var_dump($_SESSION);
    echo json_encode($_SESSION['cart']);
    exit();
}

function remove_from_cart() {

    $product_id = (int)$_POST['product_id'];

    session_start() ;

    recalc($product_id);
    $html = cart_view();
    $rez['html'] = $html;
    $rez['json']['qty'] = $_SESSION['cart']['qty'];
    $rez['json']['sum'] = $_SESSION['cart']['sum'];
    echo json_encode($rez,  JSON_HEX_TAG);
    exit();
}

//function change_qty() {
//    $qty = isset($_POST['qty'])  ? $_POST['qty'] :   1 ;
//    $qty = (int)$qty;
//    $id = (int)$_POST['product_id'];
//    $action = $_POST['act'];
//    session_start() ;
//
//    if(!isset($_SESSION['cart'][$id])) return false;
//
//    if($action == 'minus'){
//        $_SESSION['cart'][$id]['qty'] -= $qty;
//        $_SESSION['cart']['sum'] -=  $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['qty'];
//    }elseif ($action == 'plus'){
//        $_SESSION['cart'][$id]['qty'] += $qty;
//        $_SESSION['cart']['sum'] +=  $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['qty'];
//    }else{
//        echo json_encode('error');
//        exit();
//    }
//
//    if($_SESSION['cart']['sum'] == 0) unset($_SESSION['cart']);
//
//
//    $rez['json']['product']['qty'] = $_SESSION['cart'][$id]['qty'];
//    $rez['json']['product']['sum'] = $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['qty'];
//
//    $rez['json']['cart']['qty'] =  $_SESSION['cart']['qty'];
//    $rez['json']['cart']['sum'] =  $_SESSION['cart']['sum'];
//
//    echo json_encode($rez,  JSON_HEX_TAG);
//    exit();
//}



function change_qty() {
    $qty = isset($_POST['qty'])  ? $_POST['qty'] :   1 ;
    $qty = (int)$qty;
    $id = (int)$_POST['product_id'];
    $action = isset($_POST['act']) ? $_POST['act'] : 'qty';
    session_start() ;

    if(!isset($_SESSION['cart'][$id])) return false;

    if($action == 'minus'){
        $_SESSION['cart'][$id]['qty'] -= $qty;
        $_SESSION['cart']['qty'] -= $qty;
        $_SESSION['cart']['sum'] -=  $_SESSION['cart'][$id]['price']*$qty;
    }elseif ($action == 'plus'){
        $_SESSION['cart'][$id]['qty'] += $qty;
        $_SESSION['cart']['qty'] += $qty;
        $_SESSION['cart']['sum'] +=  $_SESSION['cart'][$id]['price']*$qty;
    }elseif ($action == 'qty'){
        $_SESSION['cart'][$id]['qty'] = $qty;
        $_SESSION['cart']['qty'] = 0;
        $_SESSION['cart']['sum'] = 0;
        foreach ($_SESSION['cart'] as $id => $product){
            $_SESSION['cart']['qty'] += $product['qty'];
            $_SESSION['cart']['sum'] +=  $product['qty'] * $product['price'];
        }

    }else{
        echo json_encode('error');
        exit();
    }

    if($_SESSION['cart']['sum'] == 0) unset($_SESSION['cart']);


    $rez['json']['product']['qty'] = $_SESSION['cart'][$id]['qty'];
    $rez['json']['product']['sum'] = $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['qty'];

    $rez['json']['cart']['qty'] =  $_SESSION['cart']['qty'];
    $rez['json']['cart']['sum'] =  $_SESSION['cart']['sum'];

    echo json_encode($rez,  JSON_HEX_TAG);
    exit();
}
add_action('wp_ajax_change_qty', 'change_qty'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_change_qty', 'change_qty'); // wp_ajax_nopriv_{значение параметра action}


function cart_view() {

    $content = "";

    if(!empty($_SESSION['cart'])) :
        $content .= '<table class="table2">';
        $content .= '    <thead>';
        $content .= '       <tr>';
        $content .= '         <td class="product_foto">Фото</td>';
        $content .= '        <td class="wid-5">Наименование</td>';
        $content .= '        <td class="wid-6">Артикул</td>';
        $content .= '        <td class="wid-8">Цена</td>';
        $content .= '        <td class="wid-9">Сумма</td>';
        $content .= '      <td class="wid-10">&nbsp;</td>';
        $content .= '   </tr>';
        $content .= '    </thead>';
        $content .='   <tbody>';
             foreach ($_SESSION['cart'] as $id => $cart_item) :
              if(is_int($id)) :
                  $content .='     <tr data-id="'.$id.'" id="product-'.$id.'" class="color-1">';
                  $content .='      <td class="product_foto">';
                  $content .='        <img src="'.$cart_item['img'].'" alt="'.$cart_item['name'].'">';
                  $content .='    </td>';
                  $content .='    <td class="wid-5"><a href="'.$cart_item['guid'].'">'.$cart_item['name'].'</a>';
                  $content .= '         <input type="hidden" name="products_id['.$id.']" value="'.$cart_item['qty'].'"><input type="hidden" name="products_qty[]" value="'.$cart_item['qty'].'"></td>';

                  $content .='    <td class="wid-6">ATF-9001</td>';
                  $content .='     <td class="wid-8"><input name="qty_1481525533" step="1" value="'.$cart_item['qty'].'" min="1" max="1000" class="jcf-real-element" type="number"><strong>'.$cart_item['price'].'<i class="fa fa-rub"></i></strong> </td>';
                  $content .='     <td class="wid-9"><strong><span>'.$cart_item['price']*$cart_item['qty'].'</span><i class="fa fa-rub"></i></strong></td>';
                  $content .='     <td class="wid-10"><a href="'.$cart_item['guid'].'"  data-id="'.$id.'" class="btn-del product_remove">del</a></td>';
                  $content .=' </tr>';
                endif;
            endforeach;
            $content .= '</tbody>';
            $content .= ' </table>';

        $content .= ' <div class="form-1-price">';
        $content .= '     <div class="total-price-product text-right">';
        $content .= '         <div class="total-price">ИТОГО  <span class="price"><span>'. $_SESSION['cart']['sum'].'</span> <i class="fa fa-rub"></i></span>';
        $content .='        </div>';
        $content .= '    </div>';
        $content .= ' </div>';
    else :
        $content .= '<style>   .empty{
                    text-align: center;
                    font-size: 24px;
                    text-transform: uppercase;
                    padding: 40px;
                    margin-bottom:20px;
                    background-color: #fff;
                }
            </style>';
        $content .= '<div class="empty">Корзина пуста</div>';

    endif;

    return $content;
}

function recalc($id){


    if(!isset($_SESSION['cart'][$id])) return false;

    $qtyMinus = $_SESSION['cart'][$id]['qty'];
    $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
    $_SESSION['cart']['qty'] -= $qtyMinus;

    $_SESSION['cart']['sum'] -= $sumMinus;
    if($_SESSION['cart']['sum'] == 0) unset($_SESSION['cart']);
    unset($_SESSION['cart'][$id]);
}

function clear_cart(){

    session_start() ;

    unset($_SESSION['cart']);
    unset($_SESSION['cart']['qty']);
    unset($_SESSION['cart']['sum']);

    echo cart_view();
    exit();

}

add_action('wp_ajax_remove_from_cart', 'remove_from_cart'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_remove_from_cart', 'remove_from_cart'); // wp_ajax_nopriv_{значение параметра action}

add_action('wp_ajax_add_to_cart', 'add_to_cart'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart'); // wp_ajax_nopriv_{значение параметра action}


function get_price(){
    session_start();
    $price = get_post_meta($_POST['product_id'], 'price');
    //$_SESSION['products'][$_POST['product_id']]['count'] = $_SESSION['products'][$product_id]['count'] - 1;
    foreach ($_SESSION['products'] as $key=>$value) {
        $_SESSION['cart_coast']+=$_SESSION['products'][$key]['price']* $_SESSION['products'][$key]['count'];
    }

    $rezult[2] = $txt;
    $rezult[0] = $_SESSION['cart_coast'];
    $rezult[1] = $price[0];
    echo json_encode($rezult);

    exit();
}


add_action('wp_ajax_get_price', 'get_price'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_get_price', 'get_price'); // wp_ajax_nopriv_{значение параметра action}



add_action('wp_ajax_update_cart', 'add_to_cart'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_update_cart', 'add_to_cart'); // wp_ajax_nopriv_{значение параметра action}



//function is_post_in_children_term($id, $taxonomy){
//    $terms_children_id =  get_term_children( $id, $taxonomy );
//    if(is_wp_error($terms_children_id)) return false;
//    $ids = array();
//    foreach ( $terms_children_id as $child_id){
//        $current_child = get_term_by('id', $child_id, $taxonomy);
//        if($current_child->count !== 0)  $ids[] = $child_id;
//
//
//    }
//    return $ids;
//}


function is_post_in_term_tax( $assign_cat = 'assign_cat', $product_cat = "product_cat", $assign_slug, $product_slug){
    // Определение запроса
    $args = array(
        'post_type' => 'product',
        $assign_cat => $assign_slug
    );
    $query = new WP_Query( $args );
//    var_dump( $query);
    if(is_wp_error( $query)) return false;
    $mas_id = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        if (has_term($product_slug,  $product_cat, get_the_ID())){
            $mas_id[] = get_the_ID();
        }
    }
    return $mas_id;

}



/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param  string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Опции. См. переменную $def_args
 * @return string Выводит на экран HTML код
 *
 * version 3.3.1
 */

function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
    $kb = new Kama_Breadcrumbs;
    echo $kb->get_crumbs( $sep, $l10n, $args );
}
class Kama_Breadcrumbs {
    public $arg;

    // Локализация
    static $l10n = array(
        'home'       => 'Главная',
        'paged'      => 'Страница %d',
        '_404'       => 'Ошибка 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%d</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Медиа: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
        // tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
        // Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
    );

    // Параметры по умолчанию
    static $args = array(
        'on_front_page'   => false,  // выводить крошки на главной странице
        'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'show_term_title' => false,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
        'title_patt'      => '<li>%s</li>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
        'last_sep'        => false,  // показывать последний разделитель, когда заголовок в конце не отображается
        'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
        // или можно указать свой массив разметки:
         array( 'wrappatt'=>'<ul>%s</ul>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', ),
        'priority_tax'    => array('product_cat'), // приоритетные таксономии, нужно когда запись в нескольких таксах
        'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
        // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
        // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
        // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
        'nofollow' => false, // добавлять rel=nofollow к ссылкам?

        // служебные
        'sep'             => '',
        'linkpatt'        => '',
        'pg_end'          => '',
    );

    function get_crumbs( $sep, $l10n, $args ){
        global $post, $wp_query, $wp_post_types;

        self::$args['sep'] = $sep;

        // Фильтрует дефолты и сливает
        $loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
        $arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

       // $arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

        // упростим
        $sep = & $arg->sep;
        $this->arg = & $arg;

        // микроразметка ---
        if(1){
            $mark = & $arg->markup;

            // Разметка по умолчанию
            if( ! $mark ) $mark = array(
                'wrappatt'  => '<ul class="kama_breadcrumbs">%s</ul>',
                'linkpatt'  => '<a href="%s">%s</a>',
                'sep_after' => '',
            );
            // rdf
            elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
                'wrappatt'   => '<ul class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</ul>',
                'linkpatt'   => '<li typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
                'sep_after'  => '</li>', // закрываем span после разделителя!
            );
            // schema.org
            elseif( $mark === 'schema.org' ) $mark = array(
                'wrappatt'   => '<ul class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</ul>',
                'linkpatt'   => '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></li>',
                'sep_after'  => '',
            );

            elseif( ! is_array($mark) )
                die( __CLASS__ .': "markup" parameter must be array...');

            $wrappatt  = $mark['wrappatt'];
            $arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
            $arg->sep      .= $mark['sep_after']."\n";
        }

        $linkpatt = $arg->linkpatt; // упростим

        $q_obj = get_queried_object();

        // может это архив пустой таксы?
        $ptype = null;
        if( empty($post) ){
            if( isset($q_obj->taxonomy) )
                $ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
        }
        else $ptype = & $wp_post_types[ $post->post_type ];

        // paged
        $arg->pg_end = '';
        if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
            $arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

        $pg_end = $arg->pg_end; // упростим

        // ну, с богом...
        $out = '';

        if( is_front_page() ){
            return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
        }
        // страница записей, когда для главной установлена отдельная страница.
        elseif( is_home() ) {
            $out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
        }
        elseif( is_404() ){
            $out = $loc->_404;
        }
        elseif( is_search() ){
            $out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
        }
        elseif( is_author() ){
            $tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
            $out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
        }
        elseif( is_year() || is_month() || is_day() ){
            $y_url  = get_year_link( $year = get_the_time('Y') );

            if( is_year() ){
                $tit = sprintf( $loc->year, $year );
                $out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
            }
            // month day
            else {
                $y_link = sprintf( $linkpatt, $y_url, $year);
                $m_url  = get_month_link( $year, get_the_time('m') );

                if( is_month() ){
                    $tit = sprintf( $loc->month, get_the_time('F') );
                    $out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
                }
                elseif( is_day() ){
                    $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
                    $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
                }
            }
        }
        // Древовидные записи
        elseif( is_singular() && $ptype->hierarchical ){
            $out = $this->_add_title( $this->_page_crumbs($post), $post );
        }
        // Таксы, плоские записи и вложения
        else {
            $term = $q_obj; // таксономии

            // определяем термин для записей (включая вложения attachments)
            if( is_singular() ){

                // изменим $post, чтобы определить термин родителя вложения
                if( is_attachment() && $post->post_parent ){
                    $save_post = $post; // сохраним
                    $post = get_post($post->post_parent);
                }

                // учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
                $taxonomies = get_object_taxonomies( $post->post_type );
                // оставим только древовидные и публичные, мало ли...
                $taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

                if( $taxonomies ){
                    // сортируем по приоритету
                    if( ! empty($arg->priority_tax) ){
                        usort( $taxonomies, function($a,$b)use($arg){
                            $a_index = array_search($a, $arg->priority_tax);
                            if( $a_index === false ) $a_index = 9999999;

                            $b_index = array_search($b, $arg->priority_tax);
                            if( $b_index === false ) $b_index = 9999999;

                            return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
                        } );
                    }

                    // пробуем получить термины, в порядке приоритета такс
                    foreach( $taxonomies as $taxname ){
                        if( $terms = get_the_terms( $post->ID, $taxname ) ){
                            // проверим приоритетные термины для таксы
                            $prior_terms = & $arg->priority_terms[ $taxname ];
                            if( $prior_terms && count($terms) > 2 ){
                                foreach( (array) $prior_terms as $term_id ){
                                    $filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
                                    $_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

                                    if( $_terms ){
                                        $term = array_shift( $_terms );
                                        break;
                                    }
                                }
                            }
                            else
                                $term = array_shift( $terms );

                            break;
                        }
                    }
                }

                if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
            }

            // вывод

            // все виды записей с терминами или термины
            if( $term && isset($term->term_id) ){
                $term = apply_filters('kama_breadcrumbs_term', $term );

                // attachment
                if( is_attachment() ){
                    if( ! $post->post_parent )
                        $out = sprintf( $loc->attachment, esc_html($post->post_title) );
                    else {
                        if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
                            $_crumbs    = $this->_tax_crumbs( $term, 'self' );
                            $parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
                            $_out = implode( $sep, array($_crumbs, $parent_tit) );
                            $out = $this->_add_title( $_out, $post );
                        }
                    }
                }
                // single
                elseif( is_single() ){
                    if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
                        $_crumbs = $this->_tax_crumbs( $term, 'self' );
                        $out = $this->_add_title( $_crumbs, $post );
                    }
                }
                // не древовидная такса (метки)
                elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
                    // метка
                    if( is_tag() )
                        $out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
                    // такса
                    elseif( is_tax() ){
                        $post_label = $ptype->labels->name;
                        $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                        $out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
                    }
                }
                // древовидная такса (рибрики)
                else {
                    if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
                        $_crumbs = $this->_tax_crumbs( $term, 'parent' );
                        $out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
                    }
                }
            }
            // влоежния от записи без терминов
            elseif( is_attachment() ){
                $parent = get_post($post->post_parent);
                $parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
                $_out = $parent_link;

                // вложение от записи древовидного типа записи
                if( is_post_type_hierarchical($parent->post_type) ){
                    $parent_crumbs = $this->_page_crumbs($parent);
                    $_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
                }

                $out = $this->_add_title( $_out, $post );
            }
            // записи без терминов
            elseif( is_singular() ){
                $out = $this->_add_title( '', $post );
            }
        }

        // замена ссылки на архивную страницу для типа записи
        //$home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

        if( '' === $home_after ){
            // Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
            if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
                && ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
            ){
                $pt_title = $ptype->labels->name;

                // первая страница архива типа записи
                if( is_post_type_archive() && ! $paged_num )
                    $home_after = $pt_title;
                // singular, paged post_type_archive, tax
                else{
                    $home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

                    $home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
                }
            }
        }

        $before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

        $out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

        $out = sprintf( $wrappatt, $before_out . $out );

        return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
    }


    function _page_crumbs( $post ){
        $parent = $post->post_parent;
        $crumbs = array();
        while( $parent ){
            $page = get_post( $parent );
            $crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
            $parent = $page->post_parent;
        }
        return implode( $this->arg->sep, array_reverse($crumbs) );
    }
    function _tax_crumbs( $term, $start_from = 'self', $parent = false ){
        $termlinks = array();
        $term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
        while( $term_id ){
            $term       = get_term( $term_id, $term->taxonomy );
            $termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );

            if($parent) $term_id = $term->parent; else $term_id = 0;
        }
        if( $termlinks )
            return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
        return '';
    }
    // добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
    function _add_title( $add_to, $obj, $term_title = '' ){
        $arg = & $this->arg; // упростим...
        $title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
        $show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;
        // пагинация
        if( $arg->pg_end ){
            $link = $term_title ? get_term_link($obj) : get_permalink($obj);
            $add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
        }
        // дополняем - ставим sep
        elseif( $add_to ){
            if( $show_title )
                $add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
            elseif( $arg->last_sep )
                $add_to .= $arg->sep;
        }
        // sep будет потом...
        elseif( $show_title )
            $add_to = sprintf( $arg->title_patt, $title );
        return $add_to;
    }
}


// apply_filters('term_tax_crumbs', '', $term, $that );
add_filter('attachment_tax_crumbs', 'more_tax_crumbs', 10, 3);
add_filter('term_tax_crumbs', 'more_tax_crumbs', 10, 3);
add_filter('post_tax_crumbs', 'more_tax_crumbs', 10, 3);
function more_tax_crumbs( $empty, $term, $that ){
    $is_post_filter = doing_filter('post_tax_crumbs'); // else 'term_tax_crumbs'
// странца товара
    if(  ( $is_post_filter && is_singular('product') ) || is_tax('product_cat')){
        global $post;

        $out = '';

        $out .= $that->_tax_crumbs( $term, 'self', true ) . $that->arg->sep; // базовая такса - country


        // тип недвижимости
        $term = get_query_var('assign_cat');
//        global $wp_query;
//        var_dump($wp_query->query_vars);
//        $out .= $term.'55';
        if( $term && ($term = get_term_by('slug', $term, 'assign_cat')) ){
            // запись
            if( $is_post_filter ){
                $_crumbs = $that->_tax_crumbs( $term, 'self' );
                $out .= $that->_add_title( $_crumbs, $post );
            }
            // такса
            else {
                $_crumbs = $that->_tax_crumbs( $term, 'self' );
                $out .= $that->_add_title( $_crumbs, $term, esc_html($term->name) );
            }

        }

        return $out;
    }


    return $empty;
}


/**
 * Remove the slug from published post permalinks.
 */
function custom_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'product' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $terms_assign_cat = get_the_terms($post, "assign_cat");
    $terms_product_cat = get_the_terms($post, "product_cat");

    $post_link = str_replace( '/' . $post->post_type . '/', '/'.$terms_product_cat[0]->slug.'/'.$terms_assign_cat[0]->slug.'/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );


function custom_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
//        return;
    }


    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'product', 'page' ) );

    }

    if(term_exists($query->query['name'], 'assign_cat') !== NULL){

        $query->query["assign_cat"] = $query->query['name'];
        $query->query_vars["assign_cat"] = $query->query['name'];

//
        $query->query["product_cat"] = $query->query['category_name'];
        $query->query_vars["product_cat"] = $query->query['category_name'];
//
        unset( $query->query["category_name"]);
        unset( $query->query["page"]);
        unset( $query->query["name"]);
        unset( $query->query_vars["category_name"]);
        unset( $query->query_vars["page"]);
        unset( $query->query_vars["name"]);

        $query->is_single = false;
        $query->is_page = false;
        $query->is_tax = true;
        $query->is_archive = true;
        $query->is_singular = false;

    }
    else{
        $assign_single  = explode('/', $query->query['category_name']);
        $query->query["assign_cat"] = $assign_single[1];
        $query->query_vars["assign_cat"] = $assign_single[1];
//        var_dump($query);
    }


}
add_action( 'pre_get_posts', 'custom_parse_request_tricksy' );



function deleteGET($url, $name, $amp = true) {
    $url = str_replace("&amp;", "&", $url); // Заменяем сущности на амперсанд, если требуется
    list($url_part, $qs_part) = array_pad(explode("?", $url), 2, ""); // Разбиваем URL на 2 части: до знака ? и после
    parse_str($qs_part, $qs_vars); // Разбиваем строку с запросом на массив с параметрами и их значениями
    unset($qs_vars[$name]); // Удаляем необходимый параметр
    if (count($qs_vars) > 0) { // Если есть параметры
        $url = $url_part."?".http_build_query($qs_vars); // Собираем URL обратно
        if ($amp) $url = str_replace("&", "&amp;", $url); // Заменяем амперсанды обратно на сущности, если требуется
    }
    else $url = $url_part; // Если параметров не осталось, то просто берём всё, что идёт до знака ?
    return $url; // Возвращаем итоговый URL
}



class View
{

    public $dir_tmpl;

    public function __construct($dir_tmpl)
    {
        $this->dir_tmpl = $dir_tmpl;
    }


    public function render($file, $params, $return = false)
    {
        $template = $this->dir_tmpl . $file . ".tpl";
        extract($params);
        ob_start();
        require get_parent_theme_file_path($template);

        if ($return) return ob_get_clean();
        else echo ob_get_clean();


    }


}
function find_solution(){
    $attivita = $_POST['attivita'];

    if( term_exists($attivita, 'sector_cat') == false ){

       echo json_encode('error');
       exit();
    }

    $args = array(
        'post_type' => 'product',
        'tax_query' => array(
           array(
                'taxonomy' => 'sector_cat',
                'field'    => 'slug',
                'terms'    => $attivita
            ),

        ),

    );

    $query = new WP_Query( $args);

    $content = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        $ID = get_the_ID();
        $terms = get_the_terms( $ID, 'product_cat' );
        foreach ($terms  as $term){
            $content['json'][$term->name][$term->slug][$ID]['title'] = get_the_title(); // выведем заголовок поста
            $content['json'][$term->name][$term->slug][$ID]['link'] = get_the_permalink();
            $content['json'][$term->name][$term->slug][$ID]['img'] = get_the_post_thumbnail();
            $content['json'][$term->name][$term->slug][$ID]['price'] = get_field('price');
            $content['json'][$term->name][$term->slug][$ID]['id_post'] = $ID;
//            $content['json'][$term->name]['slug'] = $term->slug;
//            $content['json'][$term->name]['name'] = $term->name;
        }

    }

    $view = new View('/tmpl/');
    $params = $content;

    $content['html'] = $view->render("product", $params, true);
//    $content['dir'] = $view->dir_tmpl;
    echo json_encode($content, JSON_HEX_TAG);

    exit();
}


add_action('wp_ajax_find_solution', 'find_solution'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_find_solution', 'find_solution'); // wp_ajax_nopriv_{значение параметра action}



function industry(){
    $term_slug = $_POST['industry'];
    $term = term_exists($term_slug, 'sector_cat');
   // $term = get_term_by( 'id', $term['term_id'], "sector_cat" );

    $related_terms = get_field('related_terms', 'sector_cat' . '_' .$term['term_id']);

//    var_dump( $related_terms );
    if( $related_terms !== false){

        foreach(  $related_terms as $term ){
           echo '<option value="'.$term->slug.'">'.$term->name.'</option>';
        }
    }
    exit();
}

add_action('wp_ajax_industry', 'industry'); // wp_ajax_{значение параметра action}
add_action('wp_ajax_nopriv_industry', 'industry'); // wp_ajax_nopriv_{значение параметра action}





add_filter( 'manage_zakaz_posts_columns', 'shop_zakaz_columns' );
//
//add_action( 'manage_zakaz_custom_column', 'render_shop_zakaz_columns' );

/**
 * Define custom columns for zakazs.
 * @param  array $existing_columns
 * @return array
 */
function shop_zakaz_columns( $existing_columns ) {

//    var_dump($existing_columns);
    $existing_columns['title'] = "Заказ";

//    $columns                     = array();
//    $columns['cb']               = $existing_columns['cb'];
//    $columns['zakaz_status']     = '<span class="status_head tips" data-tip="' . esc_attr__( 'Status', 'woocommerce' ) . '">' . esc_attr__( 'Status', 'woocommerce' ) . '</span>';
//    $columns['zakaz_title']      = 'Заказ';
//    $columns['zakaz_items']      = 'Куплено';
//    $columns['billing_address']  = 'Доставка в';
//    $columns['shipping_address'] = '';
//    $columns['customer_message'] = 'Сообщение от клиента';
//    $columns['zakaz_notes']      = 'Примечание к заказу';
//    $columns['zakaz_date']       = 'Дата';
//    $columns['zakaz_total']      = 'Итого';
//    $columns['zakaz_actions']    = 'Действия';

    return $existing_columns;
}


/**
 * Ouput custom columns for products.
 *
 * @param string $column
 */
function render_product_columns( $column ) {
    global $post, $the_product;

    if ( empty( $the_product ) || $the_product->id != $post->ID ) {
        $the_product = wc_get_product( $post );
    }

    switch ( $column ) {
        case 'thumb' :
            echo '<a href="' . get_edit_post_link( $post->ID ) . '">' . $the_product->get_image( 'thumbnail' ) . '</a>';
            break;
        case 'name' :
            $edit_link = get_edit_post_link( $post->ID );
            $title     = _draft_or_post_title();

            echo '<strong><a class="row-title" href="' . esc_url( $edit_link ) . '">' . esc_html( $title ) . '</a>';

            _post_states( $post );

            echo '</strong>';

            if ( $post->post_parent > 0 ) {
                echo '&nbsp;&nbsp;&larr; <a href="'. get_edit_post_link( $post->post_parent ) .'">'. get_the_title( $post->post_parent ) .'</a>';
            }

            // Excerpt view
            if ( isset( $_GET['mode'] ) && 'excerpt' == $_GET['mode'] ) {
                echo apply_filters( 'the_excerpt', $post->post_excerpt );
            }

            $this->_render_product_row_actions( $post, $title );

            get_inline_data( $post );

            /* Custom inline data for woocommerce. */
            echo '
					<div class="hidden" id="woocommerce_inline_' . $post->ID . '">
						<div class="menu_zakaz">' . $post->menu_zakaz . '</div>
						<div class="sku">' . $the_product->sku . '</div>
						<div class="regular_price">' . $the_product->regular_price . '</div>
						<div class="sale_price">' . $the_product->sale_price . '</div>
						<div class="weight">' . $the_product->weight . '</div>
						<div class="length">' . $the_product->length . '</div>
						<div class="width">' . $the_product->width . '</div>
						<div class="height">' . $the_product->height . '</div>
						<div class="shipping_class">' . $the_product->get_shipping_class() . '</div>
						<div class="visibility">' . $the_product->visibility . '</div>
						<div class="stock_status">' . $the_product->stock_status . '</div>
						<div class="stock">' . $the_product->stock . '</div>
						<div class="manage_stock">' . $the_product->manage_stock . '</div>
						<div class="featured">' . $the_product->featured . '</div>
						<div class="product_type">' . $the_product->product_type . '</div>
						<div class="product_is_virtual">' . $the_product->virtual . '</div>
						<div class="tax_status">' . $the_product->tax_status . '</div>
						<div class="tax_class">' . $the_product->tax_class . '</div>
						<div class="backzakazs">' . $the_product->backzakazs . '</div>
					</div>
				';

            break;
        case 'sku' :
            echo $the_product->get_sku() ? $the_product->get_sku() : '<span class="na">&ndash;</span>';
            break;
        case 'product_type' :
            if ( 'grouped' == $the_product->product_type ) {
                echo '<span class="product-type tips grouped" data-tip="' . esc_attr__( 'Grouped', 'woocommerce' ) . '"></span>';
            } elseif ( 'external' == $the_product->product_type ) {
                echo '<span class="product-type tips external" data-tip="' . esc_attr__( 'External/Affiliate', 'woocommerce' ) . '"></span>';
            } elseif ( 'simple' == $the_product->product_type ) {

                if ( $the_product->is_virtual() ) {
                    echo '<span class="product-type tips virtual" data-tip="' . esc_attr__( 'Virtual', 'woocommerce' ) . '"></span>';
                } elseif ( $the_product->is_downloadable() ) {
                    echo '<span class="product-type tips downloadable" data-tip="' . esc_attr__( 'Downloadable', 'woocommerce' ) . '"></span>';
                } else {
                    echo '<span class="product-type tips simple" data-tip="' . esc_attr__( 'Simple', 'woocommerce' ) . '"></span>';
                }

            } elseif ( 'variable' == $the_product->product_type ) {
                echo '<span class="product-type tips variable" data-tip="' . esc_attr__( 'Variable', 'woocommerce' ) . '"></span>';
            } else {
                // Assuming that we have other types in future
                echo '<span class="product-type tips ' . $the_product->product_type . '" data-tip="' . ucfirst( $the_product->product_type ) . '"></span>';
            }
            break;
        case 'price' :
            echo $the_product->get_price_html() ? $the_product->get_price_html() : '<span class="na">&ndash;</span>';
            break;
        case 'product_cat' :
        case 'product_tag' :
            if ( ! $terms = get_the_terms( $post->ID, $column ) ) {
                echo '<span class="na">&ndash;</span>';
            } else {
                $termlist = array();
                foreach ( $terms as $term ) {
                    $termlist[] = '<a href="' . admin_url( 'edit.php?' . $column . '=' . $term->slug . '&post_type=product' ) . ' ">' . $term->name . '</a>';
                }

                echo implode( ', ', $termlist );
            }
            break;
        case 'featured' :
            $url = wp_nonce_url( admin_url( 'admin-ajax.php?action=woocommerce_feature_product&product_id=' . $post->ID ), 'woocommerce-feature-product' );
            echo '<a href="' . esc_url( $url ) . '" title="'. __( 'Toggle featured', 'woocommerce' ) . '">';
            if ( $the_product->is_featured() ) {
                echo '<span class="wc-featured tips" data-tip="' . esc_attr__( 'Yes', 'woocommerce' ) . '">' . __( 'Yes', 'woocommerce' ) . '</span>';
            } else {
                echo '<span class="wc-featured not-featured tips" data-tip="' . esc_attr__( 'No', 'woocommerce' ) . '">' . __( 'No', 'woocommerce' ) . '</span>';
            }
            echo '</a>';
            break;
        case 'is_in_stock' :

            if ( $the_product->is_in_stock() ) {
                echo '<mark class="instock">' . __( 'In stock', 'woocommerce' ) . '</mark>';
            } else {
                echo '<mark class="outofstock">' . __( 'Out of stock', 'woocommerce' ) . '</mark>';
            }

            if ( $the_product->managing_stock() ) {
                echo ' &times; ' . $the_product->get_total_stock();
            }

            break;

        default :
            break;
    }
}


















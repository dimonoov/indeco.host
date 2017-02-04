
jQuery(document).ready(function($){
    $('.all-product-cat').on('click', function (e) {
        var link = $(this).data('href');
        document.location.href = link;
    });
    //equalheight - одинаковая высота колонок
    //Пример списка элементов:
    //var eqElement = ".cat_container > div, .home_news > div"
    $('.link-more').click(function (e) {
        e.preventDefault();
        var link = $(this);
        var cat = link.data('product');
        var assign = link.data('assign');
        var offset = link.data('offset');
        var uri = link.data('uri');
        var count = link.data('count');
        console.log(count+ 'cou' + offset);
        if(count >= offset){
            $.ajax({
                type: "POST",
                url: myajax.url,
                data: {
                    'action': 'product_more',
                    cat: cat,
                    assign: assign,
                    offset: offset,
                    uri: uri,
                    count: count

                },
                beforeSend: function (msg) {

                },
                success: function (msg) {
                    var next = parseInt(offset)+3;
                    console.log(link);
                    // var link_more = document.getElementById('link_more');
                    var link_more = jQuery('#link_more');
                    console.log(link_more);
                    jQuery.data(link_more, 'offset', next);

                    link.data('offset',next);
                    console.log(link.data('offset')+'offset');
                    $('#content-main').append(msg);
                    $('#more_block').find('#link_more').data('offset', next);


                    //$('.popup-overlay-white').fadeIn(500);
                    // window.location.href = "thanks.html";
                    // form[0].reset();
                }
            })
        }else{
            link.fadeOut();
        }

    });
    $('form#solution #submit-button').click(function(e){
        e.preventDefault();
        if($(this).hasClass('red-variant')) {
            console.log("attivita");
            var attivita = $('select#attivita option:selected').val();
            console.log(attivita);

            $.ajax({
                data: { attivita: attivita, 'action' : 'find_solution'},
                url: myajax.url,
                type: 'POST',
                dataType: "json",
                beforeSend: function(){
                    $(".ajax-solution").fadeIn();
                    $("#myTabContent").html('<div class="load" ><img src="/wp-content/themes/indeco/assets/img/loading-slider.gif"></div>');
                },
                success: function(res){
                    console.log(res);
                    if(!res) alert('Ошибка!');
                    if(res !== null){

                        $("#solutionfinderindustry").find('.nav.nav-tabs').html("");
                        $("#myTabContent").html("");

                        var count = 0;
                        for (var prop in res['json']) {
                            console.log(res['json'][prop] ); // name, surname, age
                            for (var child in res['json'][prop]) {
                                $("#solutionfinderindustry").find('.nav.nav-tabs').append('<li><a href="#' + child + '" data-toggle="tab" aria-expanded="true">' + prop + '</a></li>');
                                var active = "";
                                if (count == 0)  active = "active in";
                                count = count + 1;
                            }
                        }

                        $("#myTabContent").html(res['html']);
                        var slider = $('.responsive').slick({
                            centerPadding: '1px',
                            respondTo: 'slider',
                            slickGoTo: 1,
                            dots: true,
                            infinite: true,
                            speed: 300,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            responsive: [
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 992,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }

                            ]
                        });

                    }
                    else if(!res['json']) {
                        $('#solutionfinderindustry').find('.sfi-title').html('Товары не найдены');
                    }


                },
                error: function(){
                    alert('Error!');
                }
            });
            return false;
        }


    });

    $('#application').change(function (){
        $("#step3").removeClass('active');
        console.log("application");
        $('#submit-button').removeClass('red-variant');
        $.ajax({
            type: "POST",
            url: myajax.url,
            url: myajax.url,
            data: {
                'action': 'industry',
                industry: this.value
            },
            beforeSend: function (msg) {
                $("#attivita").attr('disabled', true);
            },
            success: function (msg) {
                $('#step3').addClass('active');
                $("#attivita").html(msg);
                $("#attivita").attr('disabled', false);
                //$('.popup-overlay-white').fadeIn(500);
                // window.location.href = "thanks.html";
                // form[0].reset();
            }
        })
    });

    $('#industria').change(function (e){
        console.log("industry");
        $("#step3").removeClass('active');
        $("#step2").removeClass('active');
        $('#submit-button').removeClass('red-variant');
        $.ajax({
            type: "POST",
            url: myajax.url,
            data: {
                'action': 'industry',
                industry: this.value
            },
            beforeSend: function (msg) {
                $("#application").attr('disabled', true);
            },
            success: function (msg) {
                $('#step2').addClass('active');
                $("#application").html(msg);
                $("#application").attr('disabled', false);
                //$('.popup-overlay-white').fadeIn(500);
                // window.location.href = "thanks.html";
                // form[0].reset();
            }
        })
    });

    $('#attivita').change(function (e){
        $('#submit-button').addClass('red-variant');
    });

  //
  // console.log(document.location);
  // console.log(window.location);
  // beforeSubmit = function(){
  //   var   search = "";
  //     if(document.location.search !== ""){
  //         search = document.location.search;
  //         console.log(  search);
  //     }
  //
  //       // $("form#param_filter select").change(function(e){
  //       //     console.log( e);
  //       //     window.location.href = '?sort=massa&amount=20';
  //       //     // return false;
  //       //
  //       // })
  //   };

    jcf.setOptions('Select', {
        "wrapNative": false,
        "wrapNativeOnMobile": false,
        "fakeDropInBody": false,
        "useCustomScroll": false,
        "holder" : 'holder'
    });
    // jcf.setOptions('Radio', {
    //     "wrapNative": false,
    //     "wrapNativeOnMobile": false,
    //     "fakeDropInBody": false,
    //     "useCustomScroll": false
    // });



   jcf.replaceAll();
    console.log($('#sort'));
    // $('#sort')[0].jcf.buildDropdown(); // Rebuild based on options
   // jcf.refreshState(); // Updates to current selected

    // $('#perpage')[0].jcf.buildDropdown(); // Rebuild based on options
    // $('#perpage')[0].jcf.refreshState(); // Updates to current selected


  $(".nav.navbar-nav").after("<div id='mobile-menu'>").clone().appendTo("#mobile-menu");
  var menu = $(".menu").clone();

  menu.find('li').each(function(){

    $(this).removeClass('has-submenu').removeClass('dcjq-parent-li');

  });
  menu.find('ul').each(function(){

    $(this).removeClass('submenu');

  });
  menu.appendTo(".nav.navbar-nav li.has-submenu");

    $("#mobile-menu").mmenu({
    "extensions" : [ '',  , 'pagedim-black', "theme-white" ],
    "navbar": {
      "title": "Меню"
    },
    "searchfield" :{
       "placeholder"		: 'Поиск'
    },
    "counters": true,
      //  "iconPanels": true,
    // "offCanvas": {
    //     "position": "right"
    //  },
     "navbars": [
        {
           "position": "top",
           "content": [
              "searchfield"
           ]
        },
        {
           "position": "top"
        },
        {
           "position": "bottom",
           "content": [
              "<a class='fa fa-envelope' href='#/'></a>",
              "<a class='fa fa-twitter' href='#/'></a>",
              "<a class='fa fa-facebook' href='#/'></a>"
           ]
        }
     ]
  });

  // $(".toggle-mnu").click(function() {
  //   $(this).addClass("on");
  // });

  // var api = $("#mobile-menu").data("mmenu");
  // api.bind("closed", function () {
  //   $(".toggle-mnu").removeClass("on");
  // });


    $('.popup').magnificPopup({
      type: 'inline',
      callbacks: {
        afterClose: function() {
          $(".img-ajax").html('');
          $(".params").html('');
        }
      }
    });



  // alert("dd");
  // убираем placeholder при нажатии
  	$('input,textarea').focus(function(){
      $(this).data('placeholder',$(this).attr('placeholder'))
      $(this).attr('placeholder','');
    });
    $('input,textarea').blur(function(){
      $(this).attr('placeholder',$(this).data('placeholder'));
    });



      //  scroll
    var $menu = $("#menu");

     $(window).scroll(function(){
         if ( $(this).scrollTop() > 60 && $menu.hasClass("default") ){
             $menu.removeClass("default").addClass("fixed");
         } else if($(this).scrollTop() <= 60 && $menu.hasClass("fixed")) {
             $menu.removeClass("fixed").addClass("default");
         }
     });//scroll

     $(".top-mnu ul a").mPageScroll2id({
       offset: 50
     });

//  check

// $('form').submit(function(){
//   var form  = $(this);
//   var url   = form.attr('action');
//   var id    = form.attr('id');
//   var title = form.attr('data-title');
//
//   var sotrudnik = $('[name=sotrudnik]', form).val();
//   var phone     = $('[name=phone]', form);
//   var mail      = $('[name=mail]', form);
//
//   var error     = 0;
//
//   if(phone.val() == ''){
//     phone.addClass('error');
//     error = 1;
//   }else phone.removeClass('error');
//
//   if(!isValidEmailAddress(mail.val())){
//     mail.addClass('error');
//     error = 1;
//   }else mail.removeClass('error');
//
//   if(error == 0){
//     $.ajax({
//       type: "POST",
//       url: url,
//       data: {
//         sotrudnik: sotrudnik,
//         phone    : phone.val(),
//         mail    : mail.val(),
//         title    : title,
//         id       : id
//       },
//       success: function(msg){
//         //$('.popup-overlay-white').fadeIn(500);
//         window.location.href = "thanks.html";
//         form[0].reset();
//       }
//   })
// }
//   return false;
// });



    jQuery('form.action_cart').submit(function(e){

      e.preventDefault();
        var thisForm = this;
        var product_id = $(this).find('input.nm').val();
        var assign_cat_term = $(this).find('input[name="assign_cat_term"]').val();
        var product_cat_term = $(this).find('input[name="product_cat_term"]').val();
        var qty = $(this).find('input[type="number"]').val();
        if(!qty) qty = 1;
        console.log(product_id );

       $.ajax({
        url: myajax.url,
        type: 'POST',
        dataType: "json",
        beforeSend: function(xhr){
        // действие при отправке формы, сразу после нажатия на кнопку #submit
            $(thisForm).parent().parent().parent().css("opacity", "0.9");
            $(thisForm).find('.btn-s').val("");
            $(thisForm).find('.btn-s').addClass('loading');


        },

        error: function (request, status, error) {
          if(status==500){
              alert('Ошибка при добавлении товара');
          } else if(status=='timeout'){
              alert('Ошибка: Сервер не отвечает, попробуй ещё.');
          } else {
              // ворпдрессовские ошибочки, не уверен, что это самый оптимальный вариант
              // если знаете способ получше - поделитесь
              var errormsg = request.responseText;
          }
          console.log(error);
        },

        data: 'product_id=' + product_id + '&action=add_to_cart' + '&qty=' + qty + '&assign_cat_term=' + assign_cat_term + '&product_cat_term=' + product_cat_term,
        success: function(html){
            console.log(html);
            console.log(html["qty"]);
            $(thisForm).find('.btn-s').removeClass('loading');
            $(thisForm).find('.btn-s').addClass('good');
            setTimeout(function(){
                $(thisForm).parent().parent().parent().css("opacity", "1");
                $(thisForm).find('.btn-s').removeClass('good');
                $(thisForm).find('.btn-s').val("КУПИТЬ");
            },1500);
            $("#top-cart").find('.fa-shopping-cart span').html(html['qty']).fadeIn();
            $("#top-cart").find('a span').text(html['sum']);
            $("#top-cart").find('a i').addClass('fa fa-rub');

        }
      });

      return false;
    });

    function  delete_product_in_cart(product_id) {
        $.ajax({
            data: {product_id: product_id, 'action' : 'remove_from_cart'},
            url: myajax.url,
            type: 'POST',
            dataType: "json",
            beforeSend: function(){
                $("#product-" + product_id).css("opacity", '0.5');
            },
            success: function(res){
                console.log(res);
                if(!res) alert('Ошибка!');
                console.log(res["html"]);
                if(res['json']['qty'] !== null){
                    $("#top-cart").find(".fa-shopping-cart span").html(res['json']['qty']);
                    $("#top-cart").find("a span").html(res['json']['sum']);
                    $("#product-" + product_id).remove();
                    $("#product-" + product_id).css("opacity", '1');
                }
                else {
                    $("#top-cart").find(".fa-shopping-cart span").fadeOut();
                    $("#top-cart").find("a ").html("Корзина пуста");
                    $(".client-info").remove();
                    $(".btns").remove();
                    showCart(res["html"]);
                }


            },
            error: function(){
                alert('Error!');
            }
        });
    }
    $('#cart ').on('click', '.btn-del', function(e){
        e.preventDefault();
        var product_id = $(this).data('id');
        delete_product_in_cart(product_id);
        return false;
    });
    function showCart(cart){
        $('#cart ').html(cart);

    }


    function change_ajax_qty(product_id, qty, act){

            $.ajax({
                data: {'product_id': product_id, 'action' : 'change_qty', 'act': act, 'qty': qty },
                url: myajax.url,
                type: 'POST',
                dataType: "json",
                beforeSend: function(){
                    $("#product-" + product_id).css("opacity", '0.5');
                },
                success: function(res){
                    console.log(res);
                    if(!res) alert('Ошибка!');

                    if(res['json']['cart']['qty'] !== null){
                        $("#top-cart").find(".fa-shopping-cart span").html(res['json']['cart']['qty']);
                        $("#top-cart").find("a span").html(res['json']['cart']['sum']);
                        $("#product-" + product_id).find('.wid-9 strong span').text(res['json']['product']['sum']);
                        $('#cart').find('.total-price .price span').text(res['json']['cart']['sum']);
                        $("#product-" + product_id).css("opacity", '1');
                    }
                    else {
                        $("#top-cart").find(".fa-shopping-cart span").fadeOut();
                        $("#top-cart").find("a ").html("Корзина пуста");
                        showCart(res["html"]);
                    }


                },
                error: function(){
                    alert('Error!');
                }
            });



    }


    $('#cart').on('click', '.jcf-number > span', function(e){
       var current_qty = $(this).parent().find('input[type=number]').val();
        var act = '';
        var qty = 1;

        if($(this).hasClass('jcf-btn-inc')) act = 'plus';
        if($(this).hasClass('jcf-btn-dec')) act = 'minus';
        // var product_sum = $(this).closest('tr').find('.wid-9 strong span').text();
        // console.log(product_sum);
        var product_id = $(this).closest('tr').data('id');
        if(current_qty > 1) {
            change_ajax_qty(product_id, qty, act);
        }else{
            alert("Такой товар только один в корзине. Удалите его");
        }
    });
    $('#cart').on('keyup', 'input[type=number]', function(e){
        var qty = $(this).val();
        var product_id = $(this).closest('tr').data('id');
        var act = 'qty';
        if(qty !== ''){
            console.log(qty);
            change_ajax_qty(product_id, qty, act);
        }



    });
    
    $("#basket-zakaz").submit(
        function (event) {
            $(this).find('#cart tr').each(function (e) {

            });
        }
    );



    $("[type=reset]").on('click', function (){
        delete_product_in_cart(-1);
        return false;
    });

});

var eqElement = ".eh";
jQuery(document).ready(function(){equalheight(eqElement);}).resize(function(){equalheight(eqElement);});

var eqElement1 = ".eh1";
jQuery(document).ready(function(){equalheight(eqElement1);}).resize(function(){equalheight(eqElement1);});




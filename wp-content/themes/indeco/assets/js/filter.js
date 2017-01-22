jQuery(function($) {
    // сбор параметров фильтра
    var getFilterParams = function() {
        var params = {};


        var param_str = '';
        $.each(params, function(param, value) {
            param_str += param + '=' + value + '&';
        });


        //Показать по
        if ($('.per_page').length && $('.per_page').val() != 20) {
            param_str += 'perpage=' + $('.per_page').val() + '&';
        }
        //Сортировать по
        if ($('.sort_by').length && $('.sort_by').val() != 1) {
            param_str += 'sort=' + $('.sort_by').val() + '&';
        }
        return param_str;
    };

    // товаров на страницу, сортировать
    $('#perpage, #sort').change(function() {
        var params = getFilterParams();
        console.log(this.name);
        console.log(this.value);

        setCookie(this.name, this.value, {
            path: '/'
        });

        // window.location= 'http://key2key.org/'+$('#search_mark option:selected').val() ;
        window.location = $('#param_filter').attr('action') + '?' + params;

    });






    // фильтр параметров
    /*
    $(document).on('click', '#param_filter .jcf-checkbox, #param_filter .filter_radio',
    function() {
        var param_str = getFilterParams();
        window.location = $('#param_filter').attr('action') + (param_str ? '?' + param_str : '');
    });
    */



});





function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

function opencookie(par){
    var allcookies = document.cookie;
    var pos = allcookies.indexOf(par);
    var dlina = par.length;

    if(pos !== -1){
        var start = pos + dlina +1;
        var end = allcookies.indexOf(';', start);

        if(end ==-1)
            end = allcookies.length;

        var znachenie = allcookies.substring(start, end);
        znachenie = decodeURIComponent(znachenie);
        this.cooka = znachenie;
    }
}

function readcooka(name){

    // if(document.cookie!==''){

    // 		var namecomcooka = new opencookie(name);

    // }

    // 	return namecomcooka.cooka;

    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;

}

jQuery(document).ready(function($) {


    $('#sort option').each(function () {
        this.selected = false;
    });
    $("#sort option[value=" + readcooka('sort') + "]").attr("selected", "selected");

    $('#perpage option').each(function () {
        this.selected = false;
    });
    $("#perpage option[value=" + readcooka('perpage') + "]").attr("selected", "selected");
    jcf.replaceAll();
});

    // var data = {
    //     action: 'add_topic',
    //     type: 'search_model',
    //     mark_id: $('#search_mark').val()
    // };
    // jQuery.post( myAjax.ajaxurl, data, function(response) {
    //
    //     $('#search_model').html('<option value="">Выберите модель</option>' + response).dropdown('update').attr('disabled', false);
    //
    //     if(readcooka('old_mark') === readcooka('mark')){
    //         $("#search_model :eq("+ readcooka('model')+")").attr("selected", "selected");
    //     }else{
    //         $("#search_model :eq(0)").attr("selected", "selected");
    //     }
    //     $('#search_mark').dropdown('update');
    //     $('#search_model').dropdown('update');
    // });
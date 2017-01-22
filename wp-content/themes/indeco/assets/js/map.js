function initialize() {

          // Homepage Map style
          var styles =
              [
                  {
                      "featureType": "all",
                      "elementType": "labels.text.fill",
                      "stylers": [
                          { "saturation": 36 },
                          { "color": "#000000" },
                          { "lightness": 40 }
                      ]
                  },
                  {
                      "featureType": "all",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                          { "visibility": "on" },
                          { "color": "#000000" },
                          { "lightness": 16 }
                      ]
                  },
                  {
                      "featureType": "all",
                      "elementType": "labels.icon",
                      "stylers": [
                          { "visibility": "off" }
                      ]
                  },
                  {
                      "featureType": "administrative",
                      "elementType": "geometry.fill",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 20 }
                      ]
                  },
                  {
                      "featureType": "administrative",
                      "elementType": "geometry.stroke",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 17 },
                          { "weight": 1.2 }
                      ]
                  },
                  {
                      "featureType": "landscape",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 20 }
                      ]
                  },
                  {
                      "featureType": "poi",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 21 }
                      ]
                  },
                  {
                      "featureType": "road.highway",
                      "elementType": "geometry.fill",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 17 }
                      ]
                  },
                  {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 29 },
                          { "weight": 0.2 }
                      ]
                  },
                  {
                      "featureType": "road.arterial",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 18 }
                      ]
                  },
                  {
                      "featureType": "road.local",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 16 }
                      ]
                  },
                  {
                      "featureType": "transit",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#000000" },
                          { "lightness": 19 }
                      ]
                  },
                  {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                          { "color": "#404040" },
                          { "lightness": 17 }
                      ]
                  }
              ];



    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles, {name: "Indeco in the World"});

    /* Lat. and Lon. of the center of the map */
    var myCenter = new google.maps.LatLng(41.1143442, 16.8129);

    // Create a map object, and include the MapTypeId to add
    // to the map type control.
    var mapOptions = {
      zoom: 2, 				//zoom level
      center: myCenter, 		//center position
      scrollwheel: false, 	//zoom when scroll disable
      zoomControl: true, 		//show control zoom
          streetViewControl: false,

      mapTypeControlOptions: {
        //mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            mapTypeIds: []
      }

    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');


                                                                                                                                        var contentString0 =
                            '<div class="map-popup">' +
                            '<h3>ETS SIAD (Algeria)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Bd Colonel Amirouche, RN 12 - 15 300 Azazga, Tizi Ouzou, Algerie<br /><br />'+
                                'Tel. +213 26 14 11 33<br />Fax +213 26 14 11 77<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RVRTIFNJQUQ=&d=cmFiYWguY2hhbGxhbEBncm91cGVzaWFkLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/36.745005+4.365849/@36.745005,4.365849,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow0 = new google.maps.InfoWindow({
                                content: contentString0,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image0  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng0 = new google.maps.LatLng(36.745005, 4.365849);
                            var marker0 = new google.maps.Marker({
                                position: myLatlng0,
                                map: map,
                                    icon: image0
                            });

                                google.maps.event.addListener(marker0, 'click', function() {
                              infowindow0.open(map,marker0);
                            });

                                                                                                                                                                                        var contentString1 =
                            '<div class="map-popup">' +
                            '<h3>BEAUTECHNIK SARL (Morocco)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Bd Moulay Hichame, Rue El Khandak, Lot Anas Rue 1, n 45 Sidi Moumen - 20400 Casablanca<br /><br />'+
                                'Tel. +212 22 716366<br />Fax +212 22 724210<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QkVBVVRFQ0hOSUsgU0FSTA==&d=c291bGRpLm91c3NhbWFAZ21haWwuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/33.582707+-7.546048/@33.582707,-7.546048,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow1 = new google.maps.InfoWindow({
                                content: contentString1,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image1  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng1 = new google.maps.LatLng(33.582707, -7.546048);
                            var marker1 = new google.maps.Marker({
                                position: myLatlng1,
                                map: map,
                                    icon: image1
                            });

                                google.maps.event.addListener(marker1, 'click', function() {
                              infowindow1.open(map,marker1);
                            });

                                                                                                                                                                                        var contentString2 =
                            '<div class="map-popup">' +
                            '<h3>B.M. EARTHMOVING CC (Namibia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '161 Mandurne Ndemufajo Ave. - Southern Industrial Area - Windhoek<br /><br />'+
                                'Tel. +264 61 265182<br />Fax +264 61 265182<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Qi5NLiBFQVJUSE1PVklORyBDQw==&d=Ym1lQG10Y21vYmlsZS5jb20ubmE=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-22.583669+17.080433/@-22.583669,17.080433,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow2 = new google.maps.InfoWindow({
                                content: contentString2,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image2  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng2 = new google.maps.LatLng(-22.583669, 17.080433);
                            var marker2 = new google.maps.Marker({
                                position: myLatlng2,
                                map: map,
                                    icon: image2
                            });

                                google.maps.event.addListener(marker2, 'click', function() {
                              infowindow2.open(map,marker2);
                            });

                                                                                                                                                                                        var contentString3 =
                            '<div class="map-popup">' +
                            '<h3>NORDIC MACHINERY (Tunisie)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Rue Fouchana, Lot 22, Zone Industrielle El-M&#39;ghira I Fouchana, Ben Arous 2082 Tunisia<br /><br />'+
                                'Tel. +216 71 409 260<br />Fax +216 71 409 270<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Tk9SRElDIE1BQ0hJTkVSWQ==&d=U0FEUkkuRUxFVUNIQG5vcmRpYy50bg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/36.717092+10.183615/@36.717092,10.183615,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow3 = new google.maps.InfoWindow({
                                content: contentString3,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image3  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng3 = new google.maps.LatLng(36.717092, 10.183615);
                            var marker3 = new google.maps.Marker({
                                position: myLatlng3,
                                map: map,
                                    icon: image3
                            });

                                google.maps.event.addListener(marker3, 'click', function() {
                              infowindow3.open(map,marker3);
                            });

                                                                                                                                                                                                                    var contentString4 =
                            '<div class="map-popup">' +
                            '<h3>GRUPO VIALES SRL (Argentina)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Colectora Este de Panamericana(Libertador Gral San Martin) 33,425 Ricardo Rojas Tigre 1610 Buenos Aires<br /><br />'+
                                'Tel. +54 11 4736 7131<br />Fax +54 11 4736 7924<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R1JVUE8gVklBTEVTIFNSTA==&d=bHVjaWFub0BncnVwb3ZpYWxlcy5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-34.461270+-58.688184/@-34.461270,-58.688184,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow4 = new google.maps.InfoWindow({
                                content: contentString4,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image4  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng4 = new google.maps.LatLng(-34.461270, -58.688184);
                            var marker4 = new google.maps.Marker({
                                position: myLatlng4,
                                map: map,
                                    icon: image4
                            });

                                google.maps.event.addListener(marker4, 'click', function() {
                              infowindow4.open(map,marker4);
                            });

                                                                                                                                                                                        var contentString5 =
                            '<div class="map-popup">' +
                            '<h3>INDECO BRASIL (Brazil)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Rua James Clerk Maxwell, 170 - Techno Park - 13069.380 - Campinas - SP - Brasil<br /><br />'+
                                'Mobile +55 19 98717 0734<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIEJSQVNJTA==&d=dG9uaUBpbmRlY28uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-22.851085+-47.150404/@-22.851085,-47.150404,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow5 = new google.maps.InfoWindow({
                                content: contentString5,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image5  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng5 = new google.maps.LatLng(-22.851085, -47.150404);
                            var marker5 = new google.maps.Marker({
                                position: myLatlng5,
                                map: map,
                                    icon: image5
                            });

                                google.maps.event.addListener(marker5, 'click', function() {
                              infowindow5.open(map,marker5);
                            });

                                                                                                        var contentString6 =
                            '<div class="map-popup">' +
                            '<h3>COPEX IMPORT&Aacute;CAO E COMERCIO Ltda (Brazil)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Av. Patria 1171 Bairro Sao Geraldo - 90230-071 Porto Alegre RS<br /><br />'+
                                'Tel. +55 51 33374888<br />Fax +55 51 33374888<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q09QRVggSU1QT1JUJkFhY3V0ZTtDQU8gRSBDT01FUkNJTyBMdGRh&d=YWNncmlzY2lAY29wZXguY29tLmJy">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-30.030932+-51.120912/@-30.030932,-51.120912,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow6 = new google.maps.InfoWindow({
                                content: contentString6,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image6  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng6 = new google.maps.LatLng(-30.030932, -51.120912);
                            var marker6 = new google.maps.Marker({
                                position: myLatlng6,
                                map: map,
                                    icon: image6
                            });

                                google.maps.event.addListener(marker6, 'click', function() {
                              infowindow6.open(map,marker6);
                            });

                                                                                                        var contentString7 =
                            '<div class="map-popup">' +
                            '<h3>NORDESTE MAQUINAS (Brazil)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Rua Francisco Marques da Fonseca, 200 - Bayeux / PB<br /><br />'+
                                'Tel. +55 83 3232-5956<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Tk9SREVTVEUgTUFRVUlOQVM=&d=YWxiYW5pQG5vcmRlc3RlbWFxdWluYXMuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-7.132727+-34.929731/@-7.132727,-34.929731,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow7 = new google.maps.InfoWindow({
                                content: contentString7,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image7  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng7 = new google.maps.LatLng(-7.132727, -34.929731);
                            var marker7 = new google.maps.Marker({
                                position: myLatlng7,
                                map: map,
                                    icon: image7
                            });

                                google.maps.event.addListener(marker7, 'click', function() {
                              infowindow7.open(map,marker7);
                            });

                                                                                                        var contentString8 =
                            '<div class="map-popup">' +
                            '<h3>JARDIM (Brazil)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Avenida Presidente Kennedy, 1.901 – (Sa&iacute;da para Ner&oacute;polis)<br /><br />'+
                                'Tel. +55&nbsp;62 3268-3268&nbsp;- Mobile&nbsp;+ 55 62 9961-6576<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SkFSRElN&d=cm9kcmlnb0BqYXJkaW1lcXVpcGFtZW50b3MuY29tLmJy">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-16.614609+-49.243251/@-16.614609,-49.243251,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow8 = new google.maps.InfoWindow({
                                content: contentString8,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image8  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng8 = new google.maps.LatLng(-16.614609, -49.243251);
                            var marker8 = new google.maps.Marker({
                                position: myLatlng8,
                                map: map,
                                    icon: image8
                            });

                                google.maps.event.addListener(marker8, 'click', function() {
                              infowindow8.open(map,marker8);
                            });

                                                                                                                                                                                        var contentString9 =
                            '<div class="map-popup">' +
                            '<h3>FOREGO INTERNATIONAL LTD (Cuba)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Ave. 156 No. 323 - Havana<br /><br />'+
                                'Tel. +53 3 208-6701<br />Fax +53 3 208-6023<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Rk9SRUdPIElOVEVSTkFUSU9OQUwgTFRE&d=Zm9yZWdvZmhAZm9yZWdvLmN1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/23.138761+-82.400263/@23.138761,-82.400263,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow9 = new google.maps.InfoWindow({
                                content: contentString9,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image9  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng9 = new google.maps.LatLng(23.138761, -82.400263);
                            var marker9 = new google.maps.Marker({
                                position: myLatlng9,
                                map: map,
                                    icon: image9
                            });

                                google.maps.event.addListener(marker9, 'click', function() {
                              infowindow9.open(map,marker9);
                            });

                                                                                                                                                                                        var contentString10 =
                            '<div class="map-popup">' +
                            '<h3>ITALPARTS (Dominican Republic)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'km 14 Autopista Duarte Santo Domingo - Santo Domingo<br /><br />'+
                                'Tel. +1 809 5640051<br />Fax +1 809 5612827<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SVRBTFBBUlRT&d=YW50b25pb3JvYTdAaG90bWFpbC5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/18.510193+-70.007742/@18.510193,-70.007742,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow10 = new google.maps.InfoWindow({
                                content: contentString10,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image10  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng10 = new google.maps.LatLng(18.510193, -70.007742);
                            var marker10 = new google.maps.Marker({
                                position: myLatlng10,
                                map: map,
                                    icon: image10
                            });

                                google.maps.event.addListener(marker10, 'click', function() {
                              infowindow10.open(map,marker10);
                            });

                                                                                                                                                                                        var contentString11 =
                            '<div class="map-popup">' +
                            '<h3>KADISMAT (Guadeloupe island)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'z.a. de Fort Ile - 97128 Goyave<br /><br />'+
                                'Tel. +590 266633<br />Fax +590 384163<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=S0FESVNNQVQ=&d=bGNoYXJvbkBrYWRpc21hdC5mcg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/16.133823+-61.567304/@16.133823,-61.567304,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow11 = new google.maps.InfoWindow({
                                content: contentString11,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image11  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng11 = new google.maps.LatLng(16.133823, -61.567304);
                            var marker11 = new google.maps.Marker({
                                position: myLatlng11,
                                map: map,
                                    icon: image11
                            });

                                google.maps.event.addListener(marker11, 'click', function() {
                              infowindow11.open(map,marker11);
                            });

                                                                                                                                                                                        var contentString12 =
                            '<div class="map-popup">' +
                            '<h3>COGUMA (Guatemala)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Calzada Aguilar Batres 36-01 Zona 12 - 01012 Guatemala C.A.<br /><br />'+
                                'Tel. +502 2476-0615<br />Fax +502 2477-0971<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q09HVU1B&d=cGx1bmFAY29ndW1hLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/14.588592+-90.560667/@14.588592,-90.560667,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow12 = new google.maps.InfoWindow({
                                content: contentString12,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image12  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng12 = new google.maps.LatLng(14.588592, -90.560667);
                            var marker12 = new google.maps.Marker({
                                position: myLatlng12,
                                map: map,
                                    icon: image12
                            });

                                google.maps.event.addListener(marker12, 'click', function() {
                              infowindow12.open(map,marker12);
                            });

                                                                                                                                                                                        var contentString13 =
                            '<div class="map-popup">' +
                            '<h3>SOCAMAT (Martinique)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Pelletier - 97232 Lamentin<br /><br />'+
                                'Tel. +596 511110<br />Fax +596 515840<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U09DQU1BVA==&d=ZGF2aWRyb21hbmFAc29jYW1hdC5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/14.620481+-60.988578/@14.620481,-60.988578,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow13 = new google.maps.InfoWindow({
                                content: contentString13,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image13  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng13 = new google.maps.LatLng(14.620481, -60.988578);
                            var marker13 = new google.maps.Marker({
                                position: myLatlng13,
                                map: map,
                                    icon: image13
                            });

                                google.maps.event.addListener(marker13, 'click', function() {
                              infowindow13.open(map,marker13);
                            });

                                                                                                                                                                                        var contentString14 =
                            '<div class="map-popup">' +
                            '<h3>INDECO MESSICO (Messico)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Henry Ford #4, Interior A, Esquina Av. Gustavo Baz, Fracc.Ind. San Nicolas, Tlalnepantla de Baz C.P. 54030<br /><br />'+
                                'Tel. 0052 55 49880543<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIE1FU1NJQ08=&d=Y2xhdWRpb3JpbmRlY29AZW5pbmZpbml0dW0uY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/19.552343+-99.205505/@19.552343,-99.205505,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow14 = new google.maps.InfoWindow({
                                content: contentString14,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image14  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng14 = new google.maps.LatLng(19.552343, -99.205505);
                            var marker14 = new google.maps.Marker({
                                position: myLatlng14,
                                map: map,
                                    icon: image14
                            });

                                google.maps.event.addListener(marker14, 'click', function() {
                              infowindow14.open(map,marker14);
                            });

                                                                                                                                                                                        var contentString15 =
                            '<div class="map-popup">' +
                            '<h3>MPS PANAMA (Panama)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Panamericana, San Juan de Pacora, Panama&#039; city, Panama<br /><br />'+
                                'Tel. +507 6229 1718<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TVBTIFBBTkFNQQ==&d=ZnJhbmVsaWFzQG1wc3BhbmFtYS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/9.097962+-79.303072/@9.097962,-79.303072,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow15 = new google.maps.InfoWindow({
                                content: contentString15,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image15  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng15 = new google.maps.LatLng(9.097962, -79.303072);
                            var marker15 = new google.maps.Marker({
                                position: myLatlng15,
                                map: map,
                                    icon: image15
                            });

                                google.maps.event.addListener(marker15, 'click', function() {
                              infowindow15.open(map,marker15);
                            });

                                                                                                                                                                                        var contentString16 =
                            '<div class="map-popup">' +
                            '<h3>GRUPO VIALES SRL (Paraguay)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Av. Defensores del Chaco 905, Casi Tte Bottana – Asunci&oacute;n<br /><br />'+
                                'Tel. +595-981 150 803<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R1JVUE8gVklBTEVTIFNSTA==&d=cGFibG9AZ3J1cG92aWFsZXMuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-25.331255+-57.575530/@-25.331255,-57.575530,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow16 = new google.maps.InfoWindow({
                                content: contentString16,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image16  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng16 = new google.maps.LatLng(-25.331255, -57.575530);
                            var marker16 = new google.maps.Marker({
                                position: myLatlng16,
                                map: map,
                                    icon: image16
                            });

                                google.maps.event.addListener(marker16, 'click', function() {
                              infowindow16.open(map,marker16);
                            });

                                                                                                                                                                                        var contentString17 =
                            '<div class="map-popup">' +
                            '<h3>STENICA (Peru)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Av. Nicol&aacute;s Ayll&oacute;n 2285 Ate - Lima<br /><br />'+
                                'Tel. +51 417 3030<br />Fax +51 417 3043<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U1RFTklDQQ==&d=Z21hZ2FnbmFAc3RlbmljYS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-12.062612+-76.981406/@-12.062612,-76.981406,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow17 = new google.maps.InfoWindow({
                                content: contentString17,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image17  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng17 = new google.maps.LatLng(-12.062612, -76.981406);
                            var marker17 = new google.maps.Marker({
                                position: myLatlng17,
                                map: map,
                                    icon: image17
                            });

                                google.maps.event.addListener(marker17, 'click', function() {
                              infowindow17.open(map,marker17);
                            });

                                                                                                                                                                                        var contentString18 =
                            '<div class="map-popup">' +
                            '<h3>INDECO NORTH AMERICA INC. (United States of America)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '135 Research Drive - CT 06460 Milford<br /><br />'+
                                'Tel. +1 203 7131030<br />Fax +1 203 7131040<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIE5PUlRIIEFNRVJJQ0EgSU5DLg==&d=YnBhbmtyYWNpakBpbmRlY28tYnJlYWtlcnMuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.240249+-73.014508/@41.240249,-73.014508,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow18 = new google.maps.InfoWindow({
                                content: contentString18,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image18  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng18 = new google.maps.LatLng(41.240249, -73.014508);
                            var marker18 = new google.maps.Marker({
                                position: myLatlng18,
                                map: map,
                                    icon: image18
                            });

                                google.maps.event.addListener(marker18, 'click', function() {
                              infowindow18.open(map,marker18);
                            });

                                                                                                                                                                                                                                                                                                    var contentString19 =
                            '<div class="map-popup">' +
                            '<h3>ORVAL S.A. (Venezuela)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Carrettera Nacional, Parcela n&deg;32 Zona Industrial Ararure, Estado Portuguesa - C.P.3303<br /><br />'+
                                'Tel. +58 255 6229051-7566<br />Fax +58 255 6229097<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T1JWQUwgUy5BLg==&d=bW9yYWxlc2phdmllckBvcnZhbC5jb20udmU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/9.530552+-69.240520/@9.530552,-69.240520,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow19 = new google.maps.InfoWindow({
                                content: contentString19,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image19  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng19 = new google.maps.LatLng(9.530552, -69.240520);
                            var marker19 = new google.maps.Marker({
                                position: myLatlng19,
                                map: map,
                                    icon: image19
                            });

                                google.maps.event.addListener(marker19, 'click', function() {
                              infowindow19.open(map,marker19);
                            });

                                                                                                        var contentString20 =
                            '<div class="map-popup">' +
                            '<h3>MAQUINARIAS MEGA C.A. (Venezuela)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Zona Industrial Guayabal, Avenida C, Parcel n. 1, Edificio Mega, Guarenas-Edo. Miranda<br /><br />'+
                                'Tel. +58 (212) 361.4345/5988<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFRVUlOQVJJQVMgTUVHQSBDLkEu&d=a2dvbnphbGV6QG1lZ2EtY2EuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/10.489245+-66.631340/@10.489245,-66.631340,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow20 = new google.maps.InfoWindow({
                                content: contentString20,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image20  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng20 = new google.maps.LatLng(10.489245, -66.631340);
                            var marker20 = new google.maps.Marker({
                                position: myLatlng20,
                                map: map,
                                    icon: image20
                            });

                                google.maps.event.addListener(marker20, 'click', function() {
                              infowindow20.open(map,marker20);
                            });

                                                                                                        var contentString21 =
                            '<div class="map-popup">' +
                            '<h3>MAQUINARIAS INTERNATIONAL, C.A. (MAKINT) (Venezuela)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Km 6.5 via Perija, Avenida 50, No.155-50 Municipio San Francisco, Edo. Zulia<br /><br />'+
                                'Tel. +58 261 800.80.00 (Master) /80.01/80.80/80.88<br />Fax +58 261 800.80.10/80.30<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFRVUlOQVJJQVMgSU5URVJOQVRJT05BTCwgQy5BLiAoTUFLSU5UKQ==&d=YXVkaXRvcmlhQG1ha2ludC5jb20udmU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/10.532526+-71.715371/@10.532526,-71.715371,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow21 = new google.maps.InfoWindow({
                                content: contentString21,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image21  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng21 = new google.maps.LatLng(10.532526, -71.715371);
                            var marker21 = new google.maps.Marker({
                                position: myLatlng21,
                                map: map,
                                    icon: image21
                            });

                                google.maps.event.addListener(marker21, 'click', function() {
                              infowindow21.open(map,marker21);
                            });

                                                                                                                                                                                                                    var contentString22 =
                            '<div class="map-popup">' +
                            '<h3>Nass Corporation (Bahrain)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'P.O. Box 669, Manama, Kingdom of Bahrain<br /><br />'+
                                'Tel. +973 17 703123<br />Fax +973 17 703090<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TmFzcyBDb3Jwb3JhdGlvbg==&d=YW1yLnphaWRAbmFzc2NvbW1lcmNpYWwuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/26.195418+50.595514/@26.195418,50.595514,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow22 = new google.maps.InfoWindow({
                                content: contentString22,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image22  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng22 = new google.maps.LatLng(26.195418, 50.595514);
                            var marker22 = new google.maps.Marker({
                                position: myLatlng22,
                                map: map,
                                    icon: image22
                            });

                                google.maps.event.addListener(marker22, 'click', function() {
                              infowindow22.open(map,marker22);
                            });

                                                                                                                                                                                        var contentString23 =
                            '<div class="map-popup">' +
                            '<h3>Grand International Engineering Limited (Hong Kong)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Shop A, G/F, Profit Nice Mansion, 22 Pitt Street, Yau Ma Tei, Kowloon<br /><br />'+
                                'Tel. +852 26188186<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R3JhbmQgSW50ZXJuYXRpb25hbCBFbmdpbmVlcmluZyBMaW1pdGVk&d=aGFyb2xkbmcuZ2llQGdtYWlsLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/22.313288+114.167909/@22.313288,114.167909,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow23 = new google.maps.InfoWindow({
                                content: contentString23,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image23  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng23 = new google.maps.LatLng(22.313288, 114.167909);
                            var marker23 = new google.maps.Marker({
                                position: myLatlng23,
                                map: map,
                                    icon: image23
                            });

                                google.maps.event.addListener(marker23, 'click', function() {
                              infowindow23.open(map,marker23);
                            });

                                                                                                                                                                                        var contentString24 =
                            '<div class="map-popup">' +
                            '<h3>INDECO INDIA (India)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '703/47 Seawoods Estates Palm Beach Road, Nerul(West) Navi Mumbai 400706<br /><br />'+
                                'Tel. +91 98 49 009875<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIElORElB&d=a2FzYmVrYXJAaW5kZWNvLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/19.005657+73.015386/@19.005657,73.015386,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow24 = new google.maps.InfoWindow({
                                content: contentString24,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image24  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng24 = new google.maps.LatLng(19.005657, 73.015386);
                            var marker24 = new google.maps.Marker({
                                position: myLatlng24,
                                map: map,
                                    icon: image24
                            });

                                google.maps.event.addListener(marker24, 'click', function() {
                              infowindow24.open(map,marker24);
                            });

                                                                                                                                                                                        var contentString25 =
                            '<div class="map-popup">' +
                            '<h3>PT BRUDER UTAMA NUSANTARA (Indonesia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Jl. Sunset Road No.88 Kuta Badung 80352 Bali<br /><br />'+
                                'Tel. +62 361 9340031<br />Fax +62 851 00303 197<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UFQgQlJVREVSIFVUQU1BIE5VU0FOVEFSQQ==&d=cm9uYWxkLmdvYmVsQGJydWRlcmluZG9uZXNpYS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-8.697616+115.176474/@-8.697616,115.176474,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow25 = new google.maps.InfoWindow({
                                content: contentString25,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image25  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng25 = new google.maps.LatLng(-8.697616, 115.176474);
                            var marker25 = new google.maps.Marker({
                                position: myLatlng25,
                                map: map,
                                    icon: image25
                            });

                                google.maps.event.addListener(marker25, 'click', function() {
                              infowindow25.open(map,marker25);
                            });

                                                                                                                                                                                        var contentString26 =
                            '<div class="map-popup">' +
                            '<h3>TOURANTO Co. Ltd. (Iran)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'No. 24 Kashef St. Saadi Ave - 11476 Teheran<br /><br />'+
                                'Tel. +98 2122852931<br />Fax +98 2122846676<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=VE9VUkFOVE8gQ28uIEx0ZC4=&d=YS5zb2xleW1hbmlAdG91cmFudG8uY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/35.695886+51.425020/@35.695886,51.425020,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow26 = new google.maps.InfoWindow({
                                content: contentString26,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image26  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng26 = new google.maps.LatLng(35.695886, 51.425020);
                            var marker26 = new google.maps.Marker({
                                position: myLatlng26,
                                map: map,
                                    icon: image26
                            });

                                google.maps.event.addListener(marker26, 'click', function() {
                              infowindow26.open(map,marker26);
                            });

                                                                                                                                                                                        var contentString27 =
                            '<div class="map-popup">' +
                            '<h3>Genavco LLC (UAE)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'P.O. Box 5563 Za’Abeel Road, Karama Dubai<br /><br />'+
                                'Tel. + 971-4-3961000<br />Fax +971-4-3961308<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R2VuYXZjbyBMTEM=&d=c3Vib2RoLmRhc0BnZW5hdmNvLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/25.245002+55.307407/@25.245002,55.307407,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow27 = new google.maps.InfoWindow({
                                content: contentString27,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image27  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng27 = new google.maps.LatLng(25.245002, 55.307407);
                            var marker27 = new google.maps.Marker({
                                position: myLatlng27,
                                map: map,
                                    icon: image27
                            });

                                google.maps.event.addListener(marker27, 'click', function() {
                              infowindow27.open(map,marker27);
                            });

                                                                                                                                                                                                                    var contentString28 =
                            '<div class="map-popup">' +
                            '<h3>INDECO AUSTRALIA PTY. Ltd (Australia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '1 Burgess Street - 3025 Altona North, Victoria<br /><br />'+
                                'Tel. +61 3 9315 3266<br />Fax +61 3 9314 4140<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIEFVU1RSQUxJQSBQVFkuIEx0ZA==&d=c3RlcGhlbm1vcnJpc0BpbmRlY28uY29tLmF1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-37.824434+144.835312/@-37.824434,144.835312,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow28 = new google.maps.InfoWindow({
                                content: contentString28,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image28  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng28 = new google.maps.LatLng(-37.824434, 144.835312);
                            var marker28 = new google.maps.Marker({
                                position: myLatlng28,
                                map: map,
                                    icon: image28
                            });

                                google.maps.event.addListener(marker28, 'click', function() {
                              infowindow28.open(map,marker28);
                            });

                                                                                                                                                                                        var contentString29 =
                            '<div class="map-popup">' +
                            '<h3>SOPADEP (French Polynesia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'BP 1617 Tipaerui, Face au Stade - 98713 Papeete<br /><br />'+
                                'Tel. +689 475475<br />Fax +689 475400<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U09QQURFUA==&d=aHBhYW1hQHNvcGFkZXAucGY=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/-17.546472+-149.579228/@-17.546472,-149.579228,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow29 = new google.maps.InfoWindow({
                                content: contentString29,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image29  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng29 = new google.maps.LatLng(-17.546472, -149.579228);
                            var marker29 = new google.maps.Marker({
                                position: myLatlng29,
                                map: map,
                                    icon: image29
                            });

                                google.maps.event.addListener(marker29, 'click', function() {
                              infowindow29.open(map,marker29);
                            });

                                                                                                                                                                                                                    var contentString30 =
                            '<div class="map-popup">' +
                            '<h3>DORALCO GESMBH (Austria)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'S&uuml;ddruckgasse 23 - 2512 Oeynhausen<br /><br />'+
                                'Tel. +43 2252299<br />Fax +43 225229922<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RE9SQUxDTyBHRVNNQkg=&d=c2VydmljZUBkb3JhbGNvLmF0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/47.982923+16.285997/@47.982923,16.285997,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow30 = new google.maps.InfoWindow({
                                content: contentString30,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image30  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng30 = new google.maps.LatLng(47.982923, 16.285997);
                            var marker30 = new google.maps.Marker({
                                position: myLatlng30,
                                map: map,
                                    icon: image30
                            });

                                google.maps.event.addListener(marker30, 'click', function() {
                              infowindow30.open(map,marker30);
                            });

                                                                                                                                                                                        var contentString31 =
                            '<div class="map-popup">' +
                            '<h3>INTERPARTS NV (Belgium)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Noorwegenstrraat 8 09940 EVERGEM<br /><br />'+
                                'Tel. +32 9 222.57.86<br />Fax +32 9 222.57.85<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5URVJQQVJUUyBOVg==&d=U29maWUuRGVCb3NzY2hlcmVAaW50ZXJwYXJ0cy5iZQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.130506+3.741556/@51.130506,3.741556,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow31 = new google.maps.InfoWindow({
                                content: contentString31,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image31  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng31 = new google.maps.LatLng(51.130506, 3.741556);
                            var marker31 = new google.maps.Marker({
                                position: myLatlng31,
                                map: map,
                                    icon: image31
                            });

                                google.maps.event.addListener(marker31, 'click', function() {
                              infowindow31.open(map,marker31);
                            });

                                                                                                                                                                                        var contentString32 =
                            '<div class="map-popup">' +
                            '<h3>KIROV Construction & Mining Equipment (Bulgary)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Bul. &quot;Tsaritsa Yoanna&quot; 49, 1324 Sofia<br /><br />'+
                                'Tel. +59 2 933 08 65<br />Fax +359 2 958 40 32<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=S0lST1YgQ29uc3RydWN0aW9uICYgTWluaW5nIEVxdWlwbWVudA==&d=Ym95a29fa3Jhc3RldkBraXJvdi5uZXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/42.714490+23.264216/@42.714490,23.264216,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow32 = new google.maps.InfoWindow({
                                content: contentString32,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image32  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng32 = new google.maps.LatLng(42.714490, 23.264216);
                            var marker32 = new google.maps.Marker({
                                position: myLatlng32,
                                map: map,
                                    icon: image32
                            });

                                google.maps.event.addListener(marker32, 'click', function() {
                              infowindow32.open(map,marker32);
                            });

                                                                                                                                                                                        var contentString33 =
                            '<div class="map-popup">' +
                            '<h3>WT GRUPA D.O.O. (Croatia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Buzdohanj 31/1 - 51219 Cavle<br /><br />'+
                                'Tel. +385 51545388<br />Fax +385 51258991<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=V1QgR1JVUEEgRC5PLk8u&d=cG9rcmFqYWNAd3RncnVwYS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.347959+14.477565/@45.347959,14.477565,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow33 = new google.maps.InfoWindow({
                                content: contentString33,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image33  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng33 = new google.maps.LatLng(45.347959, 14.477565);
                            var marker33 = new google.maps.Marker({
                                position: myLatlng33,
                                map: map,
                                    icon: image33
                            });

                                google.maps.event.addListener(marker33, 'click', function() {
                              infowindow33.open(map,marker33);
                            });

                                                                                                                                                                                        var contentString34 =
                            '<div class="map-popup">' +
                            '<h3>VIGGO BENZ as (Denmark)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Industriparken 42 DK-4270 H&oslash;ng<br /><br />'+
                                'Tel. +45 43 96 41 22 Fax +45 43 96 41 45<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=VklHR08gQkVOWiBhcw==&d=anBAdmlnZ29iZW5kei5kaw==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/55.493605+11.293513/@55.493605,11.293513,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow34 = new google.maps.InfoWindow({
                                content: contentString34,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image34  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng34 = new google.maps.LatLng(55.493605, 11.293513);
                            var marker34 = new google.maps.Marker({
                                position: myLatlng34,
                                map: map,
                                    icon: image34
                            });

                                google.maps.event.addListener(marker34, 'click', function() {
                              infowindow34.open(map,marker34);
                            });

                                                                                                                                                                                        var contentString35 =
                            '<div class="map-popup">' +
                            '<h3>PRESTON BUSINESS UNITED INC. (Estonia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'SUUR SOJAMOE 8E 11415 TALLINN<br /><br />'+
                                'Tel. +495 642 11 71<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UFJFU1RPTiBCVVNJTkVTUyBVTklURUQgSU5DLg==&d=SW5kZWNvX3J1c0BtYWlsLnJ1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/59.422750+24.797059/@59.422750,24.797059,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow35 = new google.maps.InfoWindow({
                                content: contentString35,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image35  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng35 = new google.maps.LatLng(59.422750, 24.797059);
                            var marker35 = new google.maps.Marker({
                                position: myLatlng35,
                                map: map,
                                    icon: image35
                            });

                                google.maps.event.addListener(marker35, 'click', function() {
                              infowindow35.open(map,marker35);
                            });

                                                                                                                                                                                        var contentString36 =
                            '<div class="map-popup">' +
                            '<h3>Sarl FREDERIC SAUVY GARAGE TP (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'ZA LE MARDARIC 04310 PEYRUIS<br /><br />'+
                                'Tel. +33 4 92 31 20 11<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U2FybCBGUkVERVJJQyBTQVVWWSBHQVJBR0UgVFA=&d=ZnJlZGVyaWMuc2F1dnlAb3JhbmdlLmZy">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.043274+5.957374/@44.043274,5.957374,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow36 = new google.maps.InfoWindow({
                                content: contentString36,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image36  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng36 = new google.maps.LatLng(44.043274, 5.957374);
                            var marker36 = new google.maps.Marker({
                                position: myLatlng36,
                                map: map,
                                    icon: image36
                            });

                                google.maps.event.addListener(marker36, 'click', function() {
                              infowindow36.open(map,marker36);
                            });

                                                                                                        var contentString37 =
                            '<div class="map-popup">' +
                            '<h3>ALLIANCE COMPACT (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Parc Des Aqueducs Chemin du Favier 69230 St. Genis Laval<br /><br />'+
                                'Tel. +33 4 78 56 84 80<br />Fax +33 4 78 56 99 58<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QUxMSUFOQ0UgQ09NUEFDVA==&d=cGhpbGlwcGUuZGljb25uZUBhbGxpYW5jZS1jb21wYWN0cy5mcg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.706768+4.771227/@45.706768,4.771227,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow37 = new google.maps.InfoWindow({
                                content: contentString37,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image37  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng37 = new google.maps.LatLng(45.706768, 4.771227);
                            var marker37 = new google.maps.Marker({
                                position: myLatlng37,
                                map: map,
                                    icon: image37
                            });

                                google.maps.event.addListener(marker37, 'click', function() {
                              infowindow37.open(map,marker37);
                            });

                                                                                                        var contentString38 =
                            '<div class="map-popup">' +
                            '<h3>Soci&eacute;t&eacute; VDF (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'ZI du Vazzio - Lieu dit Cavone 20090 Ajaccio<br /><br />'+
                                'Tel:&nbsp;+33 (0)4 95 26 29 88<br />Fax +33 (0)4 95 52 99 86<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U29jaSZlYWN1dGU7dCZlYWN1dGU7IFZERg==&d=bGxlQHZkZi5mcg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.927973+8.797358/@41.927973,8.797358,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow38 = new google.maps.InfoWindow({
                                content: contentString38,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image38  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng38 = new google.maps.LatLng(41.927973, 8.797358);
                            var marker38 = new google.maps.Marker({
                                position: myLatlng38,
                                map: map,
                                    icon: image38
                            });

                                google.maps.event.addListener(marker38, 'click', function() {
                              infowindow38.open(map,marker38);
                            });

                                                                                                        var contentString39 =
                            '<div class="map-popup">' +
                            '<h3>AGRI TP DEPANNAGE (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '18 Rue de la Briqueterie 77470 Poincy<br /><br />'+
                                'Tel. +33 1.60.44.01.38<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QUdSSSBUUCBERVBBTk5BR0U=&d=YWdyaS50cC5kZXBhbm5hZ2VAb3JhbmdlLmZy">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/48.969808+2.922436/@48.969808,2.922436,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow39 = new google.maps.InfoWindow({
                                content: contentString39,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image39  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng39 = new google.maps.LatLng(48.969808, 2.922436);
                            var marker39 = new google.maps.Marker({
                                position: myLatlng39,
                                map: map,
                                    icon: image39
                            });

                                google.maps.event.addListener(marker39, 'click', function() {
                              infowindow39.open(map,marker39);
                            });

                                                                                                        var contentString40 =
                            '<div class="map-popup">' +
                            '<h3>CLM COMPTOIR LAURENT UNITED INC. (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '185 Rue Famille Laurens Z.I. Les Milles - 13854 Aix En Provence<br /><br />'+
                                'Tel. +33 4 90 71 82 45<br />Fax +33 4 90 71 15 44<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q0xNIENPTVBUT0lSIExBVVJFTlQgVU5JVEVEIElOQy4=&d=Y2xtc2FybEBvcmFuZ2UuZnI=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.480768+5.383888/@43.480768,5.383888,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow40 = new google.maps.InfoWindow({
                                content: contentString40,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image40  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng40 = new google.maps.LatLng(43.480768, 5.383888);
                            var marker40 = new google.maps.Marker({
                                position: myLatlng40,
                                map: map,
                                    icon: image40
                            });

                                google.maps.event.addListener(marker40, 'click', function() {
                              infowindow40.open(map,marker40);
                            });

                                                                                                        var contentString41 =
                            '<div class="map-popup">' +
                            '<h3>SARL S&eacute;bastien ROBERT (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Sagnes 07200 Saint Maurice D&#39;Ardeche<br /><br />'+
                                'Tel. +33 6 82 49 74 10<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U0FSTCBTJmVhY3V0ZTtiYXN0aWVuIFJPQkVSVA==&d=c2ViYXN0aWVuLnJvYmVydDA3QG9yYW5nZS5mcg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.526823+4.411817/@44.526823,4.411817,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow41 = new google.maps.InfoWindow({
                                content: contentString41,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image41  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng41 = new google.maps.LatLng(44.526823, 4.411817);
                            var marker41 = new google.maps.Marker({
                                position: myLatlng41,
                                map: map,
                                    icon: image41
                            });

                                google.maps.event.addListener(marker41, 'click', function() {
                              infowindow41.open(map,marker41);
                            });

                                                                                                        var contentString42 =
                            '<div class="map-popup">' +
                            '<h3>PACA VENTES (France)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Quartier Rompe Coual - RN7 Route de Brignoles 83340 Le Luc<br /><br />'+
                                'Tel. +33 4 94 04 12 00<br />Fax +33 4 94 04 13 00<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UEFDQSBWRU5URVM=&d=cGFjYXZlbnRlcy5tYWdhc2luQG9yYW5nZS5mcg==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.396426+6.298634/@43.396426,6.298634,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow42 = new google.maps.InfoWindow({
                                content: contentString42,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image42  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng42 = new google.maps.LatLng(43.396426, 6.298634);
                            var marker42 = new google.maps.Marker({
                                position: myLatlng42,
                                map: map,
                                    icon: image42
                            });

                                google.maps.event.addListener(marker42, 'click', function() {
                              infowindow42.open(map,marker42);
                            });

                                                                                                                                                                                        var contentString43 =
                            '<div class="map-popup">' +
                            '<h3>Girards Baumaschinen GmbH (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '54646 Brimingen, Gewerbepark Auf Herrel<br /><br />'+
                                'Tel. +49 06522 933933<br />Fax +49 06522 933939<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R2lyYXJkcyBCYXVtYXNjaGluZW4gR21iSA==&d=bWFyY3VzQGdpcmFyZHMtYmF1bWFzY2hpbmVuLmRl">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/49.971418+6.355304/@49.971418,6.355304,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow43 = new google.maps.InfoWindow({
                                content: contentString43,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image43  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng43 = new google.maps.LatLng(49.971418, 6.355304);
                            var marker43 = new google.maps.Marker({
                                position: myLatlng43,
                                map: map,
                                    icon: image43
                            });

                                google.maps.event.addListener(marker43, 'click', function() {
                              infowindow43.open(map,marker43);
                            });

                                                                                                        var contentString44 =
                            '<div class="map-popup">' +
                            '<h3>Bentrup GmbH & Co. KG (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '59387 Ascheberg-Herbern, An der Vogelrute 43<br /><br />'+
                                'Tel. +49 02599 92980<br />Fax +49 02599 929879<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QmVudHJ1cCBHbWJIICYgQ28uIEtH&d=aW5mb0BiZW50cnVwLWdtYmguZGU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.741673+7.673010/@51.741673,7.673010,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow44 = new google.maps.InfoWindow({
                                content: contentString44,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image44  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng44 = new google.maps.LatLng(51.741673, 7.673010);
                            var marker44 = new google.maps.Marker({
                                position: myLatlng44,
                                map: map,
                                    icon: image44
                            });

                                google.maps.event.addListener(marker44, 'click', function() {
                              infowindow44.open(map,marker44);
                            });

                                                                                                        var contentString45 =
                            '<div class="map-popup">' +
                            '<h3>Indeco Verkaufsb&uuml;ro Deutschland (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '52385 Nideggen, Im Altwerk 11<br /><br />'+
                                'Tel +49 02427 5191430<br />Fax +49 02427 5191423<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SW5kZWNvIFZlcmthdWZzYiZ1dW1sO3JvIERldXRzY2hsYW5k&d=d2FsdGVyQGluZGVjby1oYW1tZXIuZGU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/50.691155+6.483574/@50.691155,6.483574,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow45 = new google.maps.InfoWindow({
                                content: contentString45,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image45  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng45 = new google.maps.LatLng(50.691155, 6.483574);
                            var marker45 = new google.maps.Marker({
                                position: myLatlng45,
                                map: map,
                                    icon: image45
                            });

                                google.maps.event.addListener(marker45, 'click', function() {
                              infowindow45.open(map,marker45);
                            });

                                                                                                        var contentString46 =
                            '<div class="map-popup">' +
                            '<h3>Baumaschinen Rath (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '72285 Pfalzgrafenweiler, B&ouml;singer Str. 8/2<br /><br />'+
                                'Tel. +49 07445 8599413<br />Fax +49 07445 8598078<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QmF1bWFzY2hpbmVuIFJhdGg=&d=aW5mb0BiYXVtYXNjaGluZW4tcmF0aC5kZQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/48.528587+8.572721/@48.528587,8.572721,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow46 = new google.maps.InfoWindow({
                                content: contentString46,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image46  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng46 = new google.maps.LatLng(48.528587, 8.572721);
                            var marker46 = new google.maps.Marker({
                                position: myLatlng46,
                                map: map,
                                    icon: image46
                            });

                                google.maps.event.addListener(marker46, 'click', function() {
                              infowindow46.open(map,marker46);
                            });

                                                                                                        var contentString47 =
                            '<div class="map-popup">' +
                            '<h3>Gro&szlig; & J&ouml;bges Hydraulik GmbH (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '53937 Schleiden, Im P&uuml;tzfeld 2<br /><br />'+
                                'Tel. +49 02444 911193<br />Fax +49 02444 911194<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R3JvJnN6bGlnOyAmIEomb3VtbDtiZ2VzIEh5ZHJhdWxpayBHbWJI&d=aW5mb0Bncm9zc3VuZGpvZWJnZXMuZGU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/50.555257+6.460914/@50.555257,6.460914,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow47 = new google.maps.InfoWindow({
                                content: contentString47,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image47  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng47 = new google.maps.LatLng(50.555257, 6.460914);
                            var marker47 = new google.maps.Marker({
                                position: myLatlng47,
                                map: map,
                                    icon: image47
                            });

                                google.maps.event.addListener(marker47, 'click', function() {
                              infowindow47.open(map,marker47);
                            });

                                                                                                        var contentString48 =
                            '<div class="map-popup">' +
                            '<h3>NBM-B&ouml;hrer GmbH & Co. KG (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '97318 Kitzingen, conneKT 26<br /><br />'+
                                'Tel. +49 09321 2649200<br />Fax +49 09321 264229<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TkJNLUImb3VtbDtocmVyIEdtYkggJiBDby4gS0c=&d=aW5mb0BuLWJtLmRl">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/49.744946+10.198551/@49.744946,10.198551,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow48 = new google.maps.InfoWindow({
                                content: contentString48,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image48  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng48 = new google.maps.LatLng(49.744946, 10.198551);
                            var marker48 = new google.maps.Marker({
                                position: myLatlng48,
                                map: map,
                                    icon: image48
                            });

                                google.maps.event.addListener(marker48, 'click', function() {
                              infowindow48.open(map,marker48);
                            });

                                                                                                        var contentString49 =
                            '<div class="map-popup">' +
                            '<h3>BMS Baumaschinenservice e.K. (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '85123 Karlskron-Brautlach, M&uuml;nchener Stra&szlig;e 23<br /><br />'+
                                'Tel. +49 08450 924862<br />Fax +49 08450 925879<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Qk1TIEJhdW1hc2NoaW5lbnNlcnZpY2UgZS5LLg==&d=aW5mb0BibXMtZ2ViZW5kb3JmZXIuZGU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/48.694446+11.455316/@48.694446,11.455316,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow49 = new google.maps.InfoWindow({
                                content: contentString49,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image49  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng49 = new google.maps.LatLng(48.694446, 11.455316);
                            var marker49 = new google.maps.Marker({
                                position: myLatlng49,
                                map: map,
                                    icon: image49
                            });

                                google.maps.event.addListener(marker49, 'click', function() {
                              infowindow49.open(map,marker49);
                            });

                                                                                                        var contentString50 =
                            '<div class="map-popup">' +
                            '<h3>Tino Engelmann Hydraulik- / Abbruchtechnik (Germany)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '04910 Elsterwerda, Haidaer Str. 69<br /><br />'+
                                'Tel. +49 03533 160059<br />Fax +49 03533 488492<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=VGlubyBFbmdlbG1hbm4gSHlkcmF1bGlrLSAvIEFiYnJ1Y2h0ZWNobmlr&d=aW5mb0BhYmJydWNodGVjaG5pay1lbmdlbG1hbm4uZGU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.472483+13.496799/@51.472483,13.496799,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow50 = new google.maps.InfoWindow({
                                content: contentString50,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image50  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng50 = new google.maps.LatLng(51.472483, 13.496799);
                            var marker50 = new google.maps.Marker({
                                position: myLatlng50,
                                map: map,
                                    icon: image50
                            });

                                google.maps.event.addListener(marker50, 'click', function() {
                              infowindow50.open(map,marker50);
                            });

                                                                                                                                                                                        var contentString51 =
                            '<div class="map-popup">' +
                            '<h3>Kontopoulos I. Nik & SIA OE (Greece)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Thesi Loutsa Sklirou - Aspropyrgos 19300 Athens<br /><br />'+
                                'Tel. +30 210 557055-56<br />Fax +30 210 5578978<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=S29udG9wb3Vsb3MgSS4gTmlrICYgU0lBIE9F&d=a29udGpjYkBvdGVuZXQuZ3I=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/38.053620+23.579452/@38.053620,23.579452,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow51 = new google.maps.InfoWindow({
                                content: contentString51,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image51  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng51 = new google.maps.LatLng(38.053620, 23.579452);
                            var marker51 = new google.maps.Marker({
                                position: myLatlng51,
                                map: map,
                                    icon: image51
                            });

                                google.maps.event.addListener(marker51, 'click', function() {
                              infowindow51.open(map,marker51);
                            });

                                                                                                                                                                                        var contentString52 =
                            '<div class="map-popup">' +
                            '<h3>POWERED ACCESS HUNGARY KFT (Hungary)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Soroksari ut 150 - 1095 IX Budapest<br /><br />'+
                                'Tel. +36 12806911<br />Fax +36 12807174<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UE9XRVJFRCBBQ0NFU1MgSFVOR0FSWSBLRlQ=&d=Ry5LZWxlbWVuQHBvd2VyZWQuaHU=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/47.451558+19.090611/@47.451558,19.090611,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow52 = new google.maps.InfoWindow({
                                content: contentString52,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image52  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng52 = new google.maps.LatLng(47.451558, 19.090611);
                            var marker52 = new google.maps.Marker({
                                position: myLatlng52,
                                map: map,
                                    icon: image52
                            });

                                google.maps.event.addListener(marker52, 'click', function() {
                              infowindow52.open(map,marker52);
                            });

                                                                                                        var contentString53 =
                            '<div class="map-popup">' +
                            '<h3>DM-KER  KFT (Hungary)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '2310 Szigetszentmikl&oacute;s, Csepeli &uacute;t 22.<br /><br />'+
                                'Tel. +36 1 257 6261<br />Fax +36 1 265 5545<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RE0tS0VSICBLRlQ=&d=a29jc2lzQGRta2VyLmh1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/47.384200+19.050134/@47.384200,19.050134,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow53 = new google.maps.InfoWindow({
                                content: contentString53,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image53  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng53 = new google.maps.LatLng(47.384200, 19.050134);
                            var marker53 = new google.maps.Marker({
                                position: myLatlng53,
                                map: map,
                                    icon: image53
                            });

                                google.maps.event.addListener(marker53, 'click', function() {
                              infowindow53.open(map,marker53);
                            });

                                                                                                                                                                                        var contentString54 =
                            '<div class="map-popup">' +
                            '<h3>MERKUR (Iceland)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'V&ouml;luteigi 7 270 Mosfellsb&aelig;r<br /><br />'+
                                'Tel. +354 534 6050<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUVSS1VS&d=a3Jpc3RvZmVyQG1lcmt1ci5pcw==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/64.280375+-21.126708/@64.280375,-21.126708,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow54 = new google.maps.InfoWindow({
                                content: contentString54,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image54  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng54 = new google.maps.LatLng(64.280375, -21.126708);
                            var marker54 = new google.maps.Marker({
                                position: myLatlng54,
                                map: map,
                                    icon: image54
                            });

                                google.maps.event.addListener(marker54, 'click', function() {
                              infowindow54.open(map,marker54);
                            });

                                                                                                                                                                                        var contentString55 =
                            '<div class="map-popup">' +
                            '<h3>PURCELL PLANT SALES (Ireland)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Unit C2 Allenwood Enterprise Park- Allenwood Co. Killdare<br /><br />'+
                                'Tel. +353 (0) 45 859916<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UFVSQ0VMTCBQTEFOVCBTQUxFUw==&d=aW5mb0BwdXJjZWxscGxhbnQuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/53.289013+-6.883610/@53.289013,-6.883610,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow55 = new google.maps.InfoWindow({
                                content: contentString55,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image55  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng55 = new google.maps.LatLng(53.289013, -6.883610);
                            var marker55 = new google.maps.Marker({
                                position: myLatlng55,
                                map: map,
                                    icon: image55
                            });

                                google.maps.event.addListener(marker55, 'click', function() {
                              infowindow55.open(map,marker55);
                            });

                                                                                                                                                                                        var contentString56 =
                            '<div class="map-popup">' +
                            '<h3>FRATELLI SATRIANI S.n.c. (Basilicata, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'C.da Costa della Gaveta 138 - 85100 Potenza (PZ)<br /><br />'+
                                'Tel. +39 0971 471442<br />Fax +39 0971 471442<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RlJBVEVMTEkgU0FUUklBTkkgUy5uLmMu&d=aW5mb0BmcmF0ZWxsaXNhdHJpYW5pLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/40.656477+15.835955/@40.656477,15.835955,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow56 = new google.maps.InfoWindow({
                                content: contentString56,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image56  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng56 = new google.maps.LatLng(40.656477, 15.835955);
                            var marker56 = new google.maps.Marker({
                                position: myLatlng56,
                                map: map,
                                    icon: image56
                            });

                                google.maps.event.addListener(marker56, 'click', function() {
                              infowindow56.open(map,marker56);
                            });

                                                                                                                                                    var contentString57 =
                            '<div class="map-popup">' +
                            '<h3>CO.M.IN. spa (Calabria, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Trieste Palazzo Fabian, 53 - 87030 Roges di Rende (CS)<br /><br />'+
                                'Tel. +39 0984 390323-393623<br />Fax +39 0984 393361<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q08uTS5JTi4gc3Bh&d=Y29taW4uc2VkZUBnbWFpbC5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/39.324693+16.244142/@39.324693,16.244142,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow57 = new google.maps.InfoWindow({
                                content: contentString57,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image57  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng57 = new google.maps.LatLng(39.324693, 16.244142);
                            var marker57 = new google.maps.Marker({
                                position: myLatlng57,
                                map: map,
                                    icon: image57
                            });

                                google.maps.event.addListener(marker57, 'click', function() {
                              infowindow57.open(map,marker57);
                            });

                                                                                                        var contentString58 =
                            '<div class="map-popup">' +
                            '<h3>ORMI S.r.l. (Calabria, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Zona Industriale Torrelupo - 89100 Reggio Calabria (RC)<br /><br />'+
                                'Tel. +39 0965 53476<br />Fax +39 0965 590623<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T1JNSSBTLnIubC4=&d=ZnJhbmNlc2NvQG9ybWlzcmwuMTkxLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/38.144232+15.717061/@38.144232,15.717061,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow58 = new google.maps.InfoWindow({
                                content: contentString58,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image58  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng58 = new google.maps.LatLng(38.144232, 15.717061);
                            var marker58 = new google.maps.Marker({
                                position: myLatlng58,
                                map: map,
                                    icon: image58
                            });

                                google.maps.event.addListener(marker58, 'click', function() {
                              infowindow58.open(map,marker58);
                            });

                                                                                                        var contentString59 =
                            '<div class="map-popup">' +
                            '<h3>ACCURSO MACCHINE IND.LI S.r.l. (Calabria, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Trieste s.n.c. - 87030 Rende (CS)<br /><br />'+
                                'Tel. +39 0984 484131<br />Fax +39 0984 408277<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QUNDVVJTTyBNQUNDSElORSBJTkQuTEkgUy5yLmwu&d=YWNjdXJzb21hY2NoaW5lQHZpcmdpbGlvLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/39.324751+16.244174/@39.324751,16.244174,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow59 = new google.maps.InfoWindow({
                                content: contentString59,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image59  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng59 = new google.maps.LatLng(39.324751, 16.244174);
                            var marker59 = new google.maps.Marker({
                                position: myLatlng59,
                                map: map,
                                    icon: image59
                            });

                                google.maps.event.addListener(marker59, 'click', function() {
                              infowindow59.open(map,marker59);
                            });

                                                                                                                                                    var contentString60 =
                            '<div class="map-popup">' +
                            '<h3>BOVE MARIO & C. snc (Campania, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via S.S. 19 n. 33 / 35 - 84091 Battipaglia (SA)<br /><br />'+
                                'Tel. +39 0828 305470-75<br />Fax +39 0828 302030<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Qk9WRSBNQVJJTyAmIEMuIHNuYw==&d=dmVuZGl0YUBib3ZlbWFjY2hpbmUuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/40.604488+14.997985/@40.604488,14.997985,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow60 = new google.maps.InfoWindow({
                                content: contentString60,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image60  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng60 = new google.maps.LatLng(40.604488, 14.997985);
                            var marker60 = new google.maps.Marker({
                                position: myLatlng60,
                                map: map,
                                    icon: image60
                            });

                                google.maps.event.addListener(marker60, 'click', function() {
                              infowindow60.open(map,marker60);
                            });

                                                                                                                                                    var contentString61 =
                            '<div class="map-popup">' +
                            '<h3>OFFICINA BARALDI SNC (Emilia-Romagna, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via II Giugno 107 - Mirandola<br /><br />'+
                                'Tel. +39 0535 22028<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T0ZGSUNJTkEgQkFSQUxESSBTTkM=&d=b2ZmaWNpbmFiYXJhbGRpbWFzc2ltb2NzbmNAdmlyZ2lsaW8uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.898109+11.081576/@44.898109,11.081576,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow61 = new google.maps.InfoWindow({
                                content: contentString61,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image61  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng61 = new google.maps.LatLng(44.898109, 11.081576);
                            var marker61 = new google.maps.Marker({
                                position: myLatlng61,
                                map: map,
                                    icon: image61
                            });

                                google.maps.event.addListener(marker61, 'click', function() {
                              infowindow61.open(map,marker61);
                            });

                                                                                                        var contentString62 =
                            '<div class="map-popup">' +
                            '<h3>MARTELLI GEOM. CARLO (Emilia-Romagna, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Emilia Levante, 192/4 - 40139 Bologna (BO)<br /><br />'+
                                'Tel. +39 0522-814182<br />Fax +39 0522-717596<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFSVEVMTEkgR0VPTS4gQ0FSTE8=&d=aW5mb0BtYXJ0ZWxsaWNhcmxvLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.480551+11.388340/@44.480551,11.388340,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow62 = new google.maps.InfoWindow({
                                content: contentString62,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image62  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng62 = new google.maps.LatLng(44.480551, 11.388340);
                            var marker62 = new google.maps.Marker({
                                position: myLatlng62,
                                map: map,
                                    icon: image62
                            });

                                google.maps.event.addListener(marker62, 'click', function() {
                              infowindow62.open(map,marker62);
                            });

                                                                                                        var contentString63 =
                            '<div class="map-popup">' +
                            '<h3>LUCCARINI SERVIZI SRL (Emilia-Romagna, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Mincio 58 - Savignano sul Panaro (MO)<br /><br />'+
                                'Tel. +39 059 771180<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TFVDQ0FSSU5JIFNFUlZJWkkgU1JM&d=YXNzaXN0ZW56YUBsdWNjYXJpbmlzZXJ2aXppLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.467560+11.014566/@44.467560,11.014566,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow63 = new google.maps.InfoWindow({
                                content: contentString63,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image63  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng63 = new google.maps.LatLng(44.467560, 11.014566);
                            var marker63 = new google.maps.Marker({
                                position: myLatlng63,
                                map: map,
                                    icon: image63
                            });

                                google.maps.event.addListener(marker63, 'click', function() {
                              infowindow63.open(map,marker63);
                            });

                                                                                                        var contentString64 =
                            '<div class="map-popup">' +
                            '<h3>POLLINI ELIO & C. snc (Emilia-Romagna, , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via San Martino Riparotta, 6 - 47900 Viserba di Rimini (RN)<br /><br />'+
                                'Tel. +39 0541 738635<br />Fax +39 0541 733583<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UE9MTElOSSBFTElPICYgQy4gc25j&d=aW5mb0BvZmZpY2luYXBvbGxpbmkuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.079683+12.526727/@44.079683,12.526727,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow64 = new google.maps.InfoWindow({
                                content: contentString64,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image64  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng64 = new google.maps.LatLng(44.079683, 12.526727);
                            var marker64 = new google.maps.Marker({
                                position: myLatlng64,
                                map: map,
                                    icon: image64
                            });

                                google.maps.event.addListener(marker64, 'click', function() {
                              infowindow64.open(map,marker64);
                            });

                                                                                                        var contentString65 =
                            '<div class="map-popup">' +
                            '<h3>OFF.FERRARI snc DI Ferrari Mario e Figli (Emilia-Romagna, , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via A.Ganapini 13/A - 42035 Felina di Castelnuovo Ne&#39;Monti (RE)<br /><br />'+
                                'Tel. +39 0522-814182<br />Fax +39 0522-717596<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T0ZGLkZFUlJBUkkgc25jIERJIEZlcnJhcmkgTWFyaW8gZSBGaWdsaQ==&d=b2ZmaWNpbmFmZXJyYXJpQGxpYmVyby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.449220+10.466462/@44.449220,10.466462,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow65 = new google.maps.InfoWindow({
                                content: contentString65,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image65  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng65 = new google.maps.LatLng(44.449220, 10.466462);
                            var marker65 = new google.maps.Marker({
                                position: myLatlng65,
                                map: map,
                                    icon: image65
                            });

                                google.maps.event.addListener(marker65, 'click', function() {
                              infowindow65.open(map,marker65);
                            });

                                                                                                                                                    var contentString66 =
                            '<div class="map-popup">' +
                            '<h3>R.T.I.A. snc (Friuli-Venezia Giulia, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Udine 141 - 33030 Farla di Maiano (UD)<br /><br />'+
                                'Tel. +39 0432 959311<br />Fax +39 0432 948875<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Ui5ULkkuQS4gc25j&d=Y29tbWVyY2lhbGVAcnRpYS5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/46.173883+13.066686/@46.173883,13.066686,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow66 = new google.maps.InfoWindow({
                                content: contentString66,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image66  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng66 = new google.maps.LatLng(46.173883, 13.066686);
                            var marker66 = new google.maps.Marker({
                                position: myLatlng66,
                                map: map,
                                    icon: image66
                            });

                                google.maps.event.addListener(marker66, 'click', function() {
                              infowindow66.open(map,marker66);
                            });

                                                                                                        var contentString67 =
                            '<div class="map-popup">' +
                            '<h3>ADRIA VEICOLI (Friuli-Venezia Giulia, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'via Caduti sul Lavoro, 8 - 34015 Muggia (TS)<br /><br />'+
                                'Tel. +39 040 380476<br />Fax +39 040 384140<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QURSSUEgVkVJQ09MSQ==&d=aW5mb0BhZHJpYXZlaWNvbGkuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.591097+13.805060/@45.591097,13.805060,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow67 = new google.maps.InfoWindow({
                                content: contentString67,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image67  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng67 = new google.maps.LatLng(45.591097, 13.805060);
                            var marker67 = new google.maps.Marker({
                                position: myLatlng67,
                                map: map,
                                    icon: image67
                            });

                                google.maps.event.addListener(marker67, 'click', function() {
                              infowindow67.open(map,marker67);
                            });

                                                                                                                                                    var contentString68 =
                            '<div class="map-popup">' +
                            '<h3>OFFICINA ALPASSI G. A. C. & C. snc (Lazio, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'str. 214 km 6, - 03020 Giglio di Veroli (FR)<br /><br />'+
                                'Tel. +39 0775 335334<br />Fax +39 0775 335970<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T0ZGSUNJTkEgQUxQQVNTSSBHLiBBLiBDLiAmIEMuIHNuYw==&d=b2ZmaWNpbmEuYWxwYXNzaUBsaWJlcm8uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.663960+13.428461/@41.663960,13.428461,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow68 = new google.maps.InfoWindow({
                                content: contentString68,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image68  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng68 = new google.maps.LatLng(41.663960, 13.428461);
                            var marker68 = new google.maps.Marker({
                                position: myLatlng68,
                                map: map,
                                    icon: image68
                            });

                                google.maps.event.addListener(marker68, 'click', function() {
                              infowindow68.open(map,marker68);
                            });

                                                                                                                                                    var contentString69 =
                            '<div class="map-popup">' +
                            '<h3>Italy Indeco Ind. SpA (Lombardia, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Garibaldi, 63/4 - 20061 - Carugate (MI) - Italy<br /><br />'+
                                'Tel. +39 02 921 515 71<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SXRhbHkgSW5kZWNvIEluZC4gU3BB&d=aW5mb0BpbmRlY28uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.560436+9.343261/@45.560436,9.343261,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow69 = new google.maps.InfoWindow({
                                content: contentString69,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image69  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng69 = new google.maps.LatLng(45.560436, 9.343261);
                            var marker69 = new google.maps.Marker({
                                position: myLatlng69,
                                map: map,
                                    icon: image69
                            });

                                google.maps.event.addListener(marker69, 'click', function() {
                              infowindow69.open(map,marker69);
                            });

                                                                                                        var contentString70 =
                            '<div class="map-popup">' +
                            '<h3>SCARAVILLI SALVATORE (Lombardia, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Piedimonte, 30 - 23868 Valmadrera (LC)<br /><br />'+
                                'Tel. +39 0341 207120<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U0NBUkFWSUxMSSBTQUxWQVRPUkU=&d=aW5mb0BzY2FyYXZpbGxpc2FsdmF0b3JlLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.843996+9.366394/@45.843996,9.366394,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow70 = new google.maps.InfoWindow({
                                content: contentString70,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image70  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng70 = new google.maps.LatLng(45.843996, 9.366394);
                            var marker70 = new google.maps.Marker({
                                position: myLatlng70,
                                map: map,
                                    icon: image70
                            });

                                google.maps.event.addListener(marker70, 'click', function() {
                              infowindow70.open(map,marker70);
                            });

                                                                                                        var contentString71 =
                            '<div class="map-popup">' +
                            '<h3>RAMI SRL di Pietro Assolari & C. (Lombardia, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Basse 7 - 24068 Seriate (BG)<br /><br />'+
                                'Tel. +39 035 295368<br />Fax +39 035 298716<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UkFNSSBTUkwgZGkgUGlldHJvIEFzc29sYXJpICYgQy4=&d=aW5mb0ByYW1pLW1tdC5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.669767+9.735000/@45.669767,9.735000,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow71 = new google.maps.InfoWindow({
                                content: contentString71,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image71  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng71 = new google.maps.LatLng(45.669767, 9.735000);
                            var marker71 = new google.maps.Marker({
                                position: myLatlng71,
                                map: map,
                                    icon: image71
                            });

                                google.maps.event.addListener(marker71, 'click', function() {
                              infowindow71.open(map,marker71);
                            });

                                                                                                        var contentString72 =
                            '<div class="map-popup">' +
                            '<h3>PANCOTTI spa (Lombardia, , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Emilia, 3 - 26862 Guardamiglio - Lodi (LO)<br /><br />'+
                                'Tel. +39 0377 451270<br />Fax +39 0377 451277<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UEFOQ09UVEkgc3Bh&d=aW5mb0BwYW5jb3R0aS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.099224+9.686337/@45.099224,9.686337,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow72 = new google.maps.InfoWindow({
                                content: contentString72,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image72  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng72 = new google.maps.LatLng(45.099224, 9.686337);
                            var marker72 = new google.maps.Marker({
                                position: myLatlng72,
                                map: map,
                                    icon: image72
                            });

                                google.maps.event.addListener(marker72, 'click', function() {
                              infowindow72.open(map,marker72);
                            });

                                                                                                        var contentString73 =
                            '<div class="map-popup">' +
                            '<h3>PACCANI MACCHINE spa (Lombardia, , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Comonte, 39/A - 24068 Seriate (BG)<br /><br />'+
                                'Tel. +39 035 294905<br />Fax +39 035 294906<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UEFDQ0FOSSBNQUNDSElORSBzcGE=&d=aW5mb0BwYWNjYW5pbWFjY2hpbmUuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.685941+9.743120/@45.685941,9.743120,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow73 = new google.maps.InfoWindow({
                                content: contentString73,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image73  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng73 = new google.maps.LatLng(45.685941, 9.743120);
                            var marker73 = new google.maps.Marker({
                                position: myLatlng73,
                                map: map,
                                    icon: image73
                            });

                                google.maps.event.addListener(marker73, 'click', function() {
                              infowindow73.open(map,marker73);
                            });

                                                                                                        var contentString74 =
                            '<div class="map-popup">' +
                            '<h3>INTRACO spa (Lombardia, , , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Panzini, 12 - 20145 Milano (MI)<br /><br />'+
                                'Tel. +39 02 4699416<br />Fax +39 02 4633416<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5UUkFDTyBzcGE=&d=aW50cmFjb0BpbnRyYWNvc3BhLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.471333+9.160297/@45.471333,9.160297,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow74 = new google.maps.InfoWindow({
                                content: contentString74,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image74  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng74 = new google.maps.LatLng(45.471333, 9.160297);
                            var marker74 = new google.maps.Marker({
                                position: myLatlng74,
                                map: map,
                                    icon: image74
                            });

                                google.maps.event.addListener(marker74, 'click', function() {
                              infowindow74.open(map,marker74);
                            });

                                                                                                        var contentString75 =
                            '<div class="map-popup">' +
                            '<h3>GIORI RICAMBI srl (Lombardia, , , , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Localit&agrave; Fondi, 108 - 25071 Agnosine (BS)<br /><br />'+
                                'Tel. +39 0365 823280<br />Fax +39 0365 823768<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R0lPUkkgUklDQU1CSSBzcmw=&d=aW5mb0BnaW9yaXJpY2FtYmkuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.652177+10.366768/@45.652177,10.366768,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow75 = new google.maps.InfoWindow({
                                content: contentString75,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image75  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng75 = new google.maps.LatLng(45.652177, 10.366768);
                            var marker75 = new google.maps.Marker({
                                position: myLatlng75,
                                map: map,
                                    icon: image75
                            });

                                google.maps.event.addListener(marker75, 'click', function() {
                              infowindow75.open(map,marker75);
                            });

                                                                                                        var contentString76 =
                            '<div class="map-popup">' +
                            '<h3>COMPAL sas (Lombardia, , , , , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Treponti, 31 - 25086 Rezzato - (BS)<br /><br />'+
                                'Tel. +39 030 2791592 - 2792457<br />Fax +39 030 2590327<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q09NUEFMIHNhcw==&d=aW5mb0Bjb21wYWxzcmwuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.505471+10.336416/@45.505471,10.336416,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow76 = new google.maps.InfoWindow({
                                content: contentString76,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image76  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng76 = new google.maps.LatLng(45.505471, 10.336416);
                            var marker76 = new google.maps.Marker({
                                position: myLatlng76,
                                map: map,
                                    icon: image76
                            });

                                google.maps.event.addListener(marker76, 'click', function() {
                              infowindow76.open(map,marker76);
                            });

                                                                                                        var contentString77 =
                            '<div class="map-popup">' +
                            '<h3>INDECO IND. - Unit&agrave; di Milano (Lombardia, , , , , , , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Garibaldi, 63/4- 20061 Carugate (MI)<br /><br />'+
                                'Tel. + 39 02 92151571<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIElORC4gLSBVbml0JmFncmF2ZTsgZGkgTWlsYW5v&d=aW5mb0BpbmRlY28uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.560229+9.341807/@45.560229,9.341807,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow77 = new google.maps.InfoWindow({
                                content: contentString77,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image77  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng77 = new google.maps.LatLng(45.560229, 9.341807);
                            var marker77 = new google.maps.Marker({
                                position: myLatlng77,
                                map: map,
                                    icon: image77
                            });

                                google.maps.event.addListener(marker77, 'click', function() {
                              infowindow77.open(map,marker77);
                            });

                                                                                                                                                    var contentString78 =
                            '<div class="map-popup">' +
                            '<h3>O.R.M.O. di Carboni S. e Biagiarelli U. & C. snc (Marche, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Ugo La Malfa 35/A - 61032 Fano (PU)<br /><br />'+
                                'Tel. +39 0721 855217<br />Fax +39 0721 855352<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Ty5SLk0uTy4gZGkgQ2FyYm9uaSBTLiBlIEJpYWdpYXJlbGxpIFUuICYgQy4gc25j&d=b3Jtb0Bvcm1vZmFuby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.785495+13.003481/@43.785495,13.003481,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow78 = new google.maps.InfoWindow({
                                content: contentString78,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image78  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng78 = new google.maps.LatLng(43.785495, 13.003481);
                            var marker78 = new google.maps.Marker({
                                position: myLatlng78,
                                map: map,
                                    icon: image78
                            });

                                google.maps.event.addListener(marker78, 'click', function() {
                              infowindow78.open(map,marker78);
                            });

                                                                                                                                                    var contentString79 =
                            '<div class="map-popup">' +
                            '<h3>RECMAC srl (Piemonte, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Circonvallazione, 22 - 10060 Buriasco (TO)<br /><br />'+
                                'Tel. +39 0121 56576-7<br />Fax +39 0121 56506<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UkVDTUFDIHNybA==&d=ZGF2aWRlQHJlY21hYy5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.871554+7.411649/@44.871554,7.411649,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow79 = new google.maps.InfoWindow({
                                content: contentString79,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image79  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng79 = new google.maps.LatLng(44.871554, 7.411649);
                            var marker79 = new google.maps.Marker({
                                position: myLatlng79,
                                map: map,
                                    icon: image79
                            });

                                google.maps.event.addListener(marker79, 'click', function() {
                              infowindow79.open(map,marker79);
                            });

                                                                                                                                                    var contentString80 =
                            '<div class="map-popup">' +
                            '<h3>S.& M. PER srl (Puglia, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Lecce s.n. Bivio Cavallino - 73020 Cavallino (LE)<br /><br />'+
                                'Tel. +39 0832 345382<br />Fax +39 0832 231547<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Uy4mIE0uIFBFUiBzcmw=&d=c2VtcGVyLnNybEB2aXJnaWxpby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/40.329572+18.174688/@40.329572,18.174688,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow80 = new google.maps.InfoWindow({
                                content: contentString80,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image80  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng80 = new google.maps.LatLng(40.329572, 18.174688);
                            var marker80 = new google.maps.Marker({
                                position: myLatlng80,
                                map: map,
                                    icon: image80
                            });

                                google.maps.event.addListener(marker80, 'click', function() {
                              infowindow80.open(map,marker80);
                            });

                                                                                                        var contentString81 =
                            '<div class="map-popup">' +
                            '<h3>MA.MO.TE.R. snc (Puglia, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'S.S. 89 Km 9,800 - 71011 Apricena (FG)<br /><br />'+
                                'Tel. +39 0882 647645<br />Fax +39 0882 647633<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUEuTU8uVEUuUi4gc25j&d=aW5mb0BtYW1vdGVyLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.759914+15.425150/@41.759914,15.425150,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow81 = new google.maps.InfoWindow({
                                content: contentString81,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image81  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng81 = new google.maps.LatLng(41.759914, 15.425150);
                            var marker81 = new google.maps.Marker({
                                position: myLatlng81,
                                map: map,
                                    icon: image81
                            });

                                google.maps.event.addListener(marker81, 'click', function() {
                              infowindow81.open(map,marker81);
                            });

                                                                                                        var contentString82 =
                            '<div class="map-popup">' +
                            '<h3>Italy Indeco Ind. SpA (Puglia, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Viale Lindemann, 10 ZI - 70132 Bari - Italy<br /><br />'+
                                'Tel. +39 080 531 33 40/70<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SXRhbHkgSW5kZWNvIEluZC4gU3BB&d=aW5mb0BpbmRlY28uaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.114316+16.815486/@41.114316,16.815486,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow82 = new google.maps.InfoWindow({
                                content: contentString82,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image82  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng82 = new google.maps.LatLng(41.114316, 16.815486);
                            var marker82 = new google.maps.Marker({
                                position: myLatlng82,
                                map: map,
                                    icon: image82
                            });

                                google.maps.event.addListener(marker82, 'click', function() {
                              infowindow82.open(map,marker82);
                            });

                                                                                                                                                    var contentString83 =
                            '<div class="map-popup">' +
                            '<h3>MAUGERI MACCHINE srl (Sicilia, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Caduti di tutte le guerre, 14 - 95040 Motta Santa Anastasia (CT)<br /><br />'+
                                'Tel. +39 095 7132661<br />Fax +39 095 461772<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFVR0VSSSBNQUNDSElORSBzcmw=&d=aW5mb0BtYXVnZXJpbWFjY2hpbmUuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/37.521893+14.995126/@37.521893,14.995126,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow83 = new google.maps.InfoWindow({
                                content: contentString83,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image83  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng83 = new google.maps.LatLng(37.521893, 14.995126);
                            var marker83 = new google.maps.Marker({
                                position: myLatlng83,
                                map: map,
                                    icon: image83
                            });

                                google.maps.event.addListener(marker83, 'click', function() {
                              infowindow83.open(map,marker83);
                            });

                                                                                                        var contentString84 =
                            '<div class="map-popup">' +
                            '<h3>EDIL MACCHINE srl (Sicilia, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Ciachea (Ang. S.S. 113) - 90044 Carini (PA)<br /><br />'+
                                'Tel. +39 091 8692027<br />Fax +39 091 8692191<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RURJTCBNQUNDSElORSBzcmw=&d=bGFtb25pY2FAZWRpbG1hY2NoaW5lc3JsLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/38.166290+13.219070/@38.166290,13.219070,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow84 = new google.maps.InfoWindow({
                                content: contentString84,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image84  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng84 = new google.maps.LatLng(38.166290, 13.219070);
                            var marker84 = new google.maps.Marker({
                                position: myLatlng84,
                                map: map,
                                    icon: image84
                            });

                                google.maps.event.addListener(marker84, 'click', function() {
                              infowindow84.open(map,marker84);
                            });

                                                                                                                                                    var contentString85 =
                            '<div class="map-popup">' +
                            '<h3>SAMI srl (Toscana, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via N. Sauro, 103 - 56021 Cascina (PI)<br /><br />'+
                                'Tel. +39 050 703113<br />Fax +39 050 700611<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U0FNSSBzcmw=&d=aW5mb0BzYW1pbWFjY2hpbmUuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.661555+10.542865/@43.661555,10.542865,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow85 = new google.maps.InfoWindow({
                                content: contentString85,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image85  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng85 = new google.maps.LatLng(43.661555, 10.542865);
                            var marker85 = new google.maps.Marker({
                                position: myLatlng85,
                                map: map,
                                    icon: image85
                            });

                                google.maps.event.addListener(marker85, 'click', function() {
                              infowindow85.open(map,marker85);
                            });

                                                                                                        var contentString86 =
                            '<div class="map-popup">' +
                            '<h3>RI-MA di BASSI RENZO (Toscana, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via dei Cappuccini SN - 50032 Borgo San Lorenzo (FI)<br /><br />'+
                                'Tel. +39 0558 457445<br />Fax +39 0558 457445<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UkktTUEgZGkgQkFTU0kgUkVOWk8=&d=cmkubWEuYnNsQHZpcmdpbGlvLml0">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.960231+11.366621/@43.960231,11.366621,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow86 = new google.maps.InfoWindow({
                                content: contentString86,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image86  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng86 = new google.maps.LatLng(43.960231, 11.366621);
                            var marker86 = new google.maps.Marker({
                                position: myLatlng86,
                                map: map,
                                    icon: image86
                            });

                                google.maps.event.addListener(marker86, 'click', function() {
                              infowindow86.open(map,marker86);
                            });

                                                                                                        var contentString87 =
                            '<div class="map-popup">' +
                            '<h3>MATEROZZI snc (Toscana, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Loc. La Macchia, 85 - 53018 Sovicille (SI)<br /><br />'+
                                'Tel. +39 0577 314709<br />Fax +39 0577 314703<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFURVJPWlpJIHNuYw==&d=aW5mb0BtYXRlcm96emkuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/43.275003+11.247967/@43.275003,11.247967,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow87 = new google.maps.InfoWindow({
                                content: contentString87,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image87  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng87 = new google.maps.LatLng(43.275003, 11.247967);
                            var marker87 = new google.maps.Marker({
                                position: myLatlng87,
                                map: map,
                                    icon: image87
                            });

                                google.maps.event.addListener(marker87, 'click', function() {
                              infowindow87.open(map,marker87);
                            });

                                                                                                                                                    var contentString88 =
                            '<div class="map-popup">' +
                            '<h3>OTHMAR UNTERHOFER KG sas (Trentino-Alto Adige, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via G. di Vittorio,8 - 39100 Bolzano (BZ)<br /><br />'+
                                'Tel. +39 0471 910306<br />Fax +39 0471 910524<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T1RITUFSIFVOVEVSSE9GRVIgS0cgc2Fz&d=dW50ZXJob2Zlci5vdGhtYXJAZG5ldC5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/46.475222+11.326479/@46.475222,11.326479,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow88 = new google.maps.InfoWindow({
                                content: contentString88,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image88  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng88 = new google.maps.LatLng(46.475222, 11.326479);
                            var marker88 = new google.maps.Marker({
                                position: myLatlng88,
                                map: map,
                                    icon: image88
                            });

                                google.maps.event.addListener(marker88, 'click', function() {
                              infowindow88.open(map,marker88);
                            });

                                                                                                        var contentString89 =
                            '<div class="map-popup">' +
                            '<h3>OFFICINA MARCHI snc (Trentino-Alto Adige, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Loc. Ronco Del Mela, 12 - 38040 Lona Lases (TN)<br /><br />'+
                                'Tel. +39 0461 689208<br />Fax +39 0461 689468<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=T0ZGSUNJTkEgTUFSQ0hJIHNuYw==&d=YW1taW5pc3RyYXppb25lLm1hcmNoaUB2aXJnaWxpby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/46.145693+11.201295/@46.145693,11.201295,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow89 = new google.maps.InfoWindow({
                                content: contentString89,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image89  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng89 = new google.maps.LatLng(46.145693, 11.201295);
                            var marker89 = new google.maps.Marker({
                                position: myLatlng89,
                                map: map,
                                    icon: image89
                            });

                                google.maps.event.addListener(marker89, 'click', function() {
                              infowindow89.open(map,marker89);
                            });

                                                                                                                                                    var contentString90 =
                            '<div class="map-popup">' +
                            '<h3>CANDELORI MARIO & C. (Umbria, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Strada di Recentino, 8/A - 05100 Terni (TR)<br /><br />'+
                                'Tel. +39 0744 800531<br />Fax +39 0744 807238<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q0FOREVMT1JJIE1BUklPICYgQy4=&d=Y2FuZGVsb3JpQGxpYmVyby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/42.549056+12.600817/@42.549056,12.600817,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow90 = new google.maps.InfoWindow({
                                content: contentString90,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image90  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng90 = new google.maps.LatLng(42.549056, 12.600817);
                            var marker90 = new google.maps.Marker({
                                position: myLatlng90,
                                map: map,
                                    icon: image90
                            });

                                google.maps.event.addListener(marker90, 'click', function() {
                              infowindow90.open(map,marker90);
                            });

                                                                                                                                                    var contentString91 =
                            '<div class="map-popup">' +
                            '<h3>GMS SRL (Veneto, Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via Ca&#39; Benetti, 6 - 36050 Bolzano Vicentino (VI)<br /><br />'+
                                'Tel. +39 0444 946420<br />Fax +39 0444 946431<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R01TIFNSTA==&d=aW5mb0BnbXNlcnZpY2UuYml6">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.606277+11.597730/@45.606277,11.597730,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow91 = new google.maps.InfoWindow({
                                content: contentString91,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image91  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng91 = new google.maps.LatLng(45.606277, 11.597730);
                            var marker91 = new google.maps.Marker({
                                position: myLatlng91,
                                map: map,
                                    icon: image91
                            });

                                google.maps.event.addListener(marker91, 'click', function() {
                              infowindow91.open(map,marker91);
                            });

                                                                                                        var contentString92 =
                            '<div class="map-popup">' +
                            '<h3>O.S.M.I. snc (Veneto, , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via G. Buzzatti, 6 - 32036 Sedico (BL)<br /><br />'+
                                'Tel. +39 0437 83221<br />Fax +39 0437 83721<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Ty5TLk0uSS4gc25j&d=b3NtaWNtaUB2aXJnaWxpby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/46.103900+12.095422/@46.103900,12.095422,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow92 = new google.maps.InfoWindow({
                                content: contentString92,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image92  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng92 = new google.maps.LatLng(46.103900, 12.095422);
                            var marker92 = new google.maps.Marker({
                                position: myLatlng92,
                                map: map,
                                    icon: image92
                            });

                                google.maps.event.addListener(marker92, 'click', function() {
                              infowindow92.open(map,marker92);
                            });

                                                                                                        var contentString93 =
                            '<div class="map-popup">' +
                            '<h3>MAC 3 srl (Veneto, , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Localit&agrave; Spinarol, 1 - 37011 Calmasino di Bardolino (VR)<br /><br />'+
                                'Tel. +39 045 6862502<br />Fax +39 045 6888063<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFDIDMgc3Js&d=aW5mb0BtYWMzdnIuaXQ=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.512937+10.775960/@45.512937,10.775960,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow93 = new google.maps.InfoWindow({
                                content: contentString93,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image93  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng93 = new google.maps.LatLng(45.512937, 10.775960);
                            var marker93 = new google.maps.Marker({
                                position: myLatlng93,
                                map: map,
                                    icon: image93
                            });

                                google.maps.event.addListener(marker93, 'click', function() {
                              infowindow93.open(map,marker93);
                            });

                                                                                                        var contentString94 =
                            '<div class="map-popup">' +
                            '<h3>CARVENS srl (Veneto, , , , Italy)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Via dell&#39;Artigianato, 4/A - 35026 Conselve (PD)<br /><br />'+
                                'Tel. +39 049 9501700<br />Fax +39 049 5385935<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q0FSVkVOUyBzcmw=&d=YXNzaXN0ZW56YUBjYXJ2ZW5zLmV1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.201309+11.897892/@45.201309,11.897892,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow94 = new google.maps.InfoWindow({
                                content: contentString94,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image94  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng94 = new google.maps.LatLng(45.201309, 11.897892);
                            var marker94 = new google.maps.Marker({
                                position: myLatlng94,
                                map: map,
                                    icon: image94
                            });

                                google.maps.event.addListener(marker94, 'click', function() {
                              infowindow94.open(map,marker94);
                            });

                                                                                                                                                                                        var contentString95 =
                            '<div class="map-popup">' +
                            '<h3>MAKO S.A. (Luxembourg)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Zone Industrielle Scheleck I - L - 3225 Bettembourg<br /><br />'+
                                'Tel. +352 519395<br />Fax +352 514856<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUFLTyBTLkEu&d=Z2xAbWFrby5sdQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/49.506306+6.098605/@49.506306,6.098605,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow95 = new google.maps.InfoWindow({
                                content: contentString95,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image95  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng95 = new google.maps.LatLng(49.506306, 6.098605);
                            var marker95 = new google.maps.Marker({
                                position: myLatlng95,
                                map: map,
                                    icon: image95
                            });

                                google.maps.event.addListener(marker95, 'click', function() {
                              infowindow95.open(map,marker95);
                            });

                                                                                                                                                                                        var contentString96 =
                            '<div class="map-popup">' +
                            '<h3>Global Motors dooel (Macedonia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Bul”Makedonsko-Kosovska brigada”br.60<br /><br />'+
                                'Tel. +389 22 600550<br />Fax +389 22 600552<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R2xvYmFsIE1vdG9ycyBkb29lbA==&d=di56YWZpcm92c2tpQGdsb2JhbC1tb3RvcnMubWs=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/42.018455+21.430888/@42.018455,21.430888,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow96 = new google.maps.InfoWindow({
                                content: contentString96,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image96  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng96 = new google.maps.LatLng(42.018455, 21.430888);
                            var marker96 = new google.maps.Marker({
                                position: myLatlng96,
                                map: map,
                                    icon: image96
                            });

                                google.maps.event.addListener(marker96, 'click', function() {
                              infowindow96.open(map,marker96);
                            });

                                                                                                                                                                                        var contentString97 =
                            '<div class="map-popup">' +
                            '<h3>PAUL GALEA (Malta)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '114, Casa S. Anna, Triq Gnien - Zebbiegh MST 11<br /><br />'+
                                'Tel. +356 21582338-575568<br />Fax +356 21575568<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UEFVTCBHQUxFQQ==&d=cGFsZ2FsQG1hbHRhbmV0Lm5ldA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/35.919357+14.381401/@35.919357,14.381401,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow97 = new google.maps.InfoWindow({
                                content: contentString97,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image97  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng97 = new google.maps.LatLng(35.919357, 14.381401);
                            var marker97 = new google.maps.Marker({
                                position: myLatlng97,
                                map: map,
                                    icon: image97
                            });

                                google.maps.event.addListener(marker97, 'click', function() {
                              infowindow97.open(map,marker97);
                            });

                                                                                                                                                                                        var contentString98 =
                            '<div class="map-popup">' +
                            '<h3>GRAUSCH I GRAUSCH MASZYNY BUDOWLANE SP. Z.O.O. (Poland)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Ul. Obornicka 1 - 62-002 Zlotkowo<br /><br />'+
                                'Tel. +48 61 6577780<br />Fax +48 61 6577781<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R1JBVVNDSCBJIEdSQVVTQ0ggTUFTWllOWSBCVURPV0xBTkUgU1AuIFouTy5PLg==&d=bmRpZGluYUBtYXN6eW55YnVkb3dsYW5lLnBs">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/52.500332+16.836188/@52.500332,16.836188,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow98 = new google.maps.InfoWindow({
                                content: contentString98,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image98  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng98 = new google.maps.LatLng(52.500332, 16.836188);
                            var marker98 = new google.maps.Marker({
                                position: myLatlng98,
                                map: map,
                                    icon: image98
                            });

                                google.maps.event.addListener(marker98, 'click', function() {
                              infowindow98.open(map,marker98);
                            });

                                                                                                                                                                                        var contentString99 =
                            '<div class="map-popup">' +
                            '<h3>DOMIFER Ltda (Portugal)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Parque Industrial Rendufe - 4720 - 632 Rendufe - Amares<br /><br />'+
                                'Tel. +351 253 310210<br />Fax +351 253 310219<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RE9NSUZFUiBMdGRh&d=ZGFuaWVsZmVybmFuZGVzQGRvbWlmZXIuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/41.628653+-8.394615/@41.628653,-8.394615,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow99 = new google.maps.InfoWindow({
                                content: contentString99,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image99  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng99 = new google.maps.LatLng(41.628653, -8.394615);
                            var marker99 = new google.maps.Marker({
                                position: myLatlng99,
                                map: map,
                                    icon: image99
                            });

                                google.maps.event.addListener(marker99, 'click', function() {
                              infowindow99.open(map,marker99);
                            });

                                                                                                                                                                                        var contentString100 =
                            '<div class="map-popup">' +
                            '<h3>S.C. MARCOM RMC 94 SRL (Romania)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Drumal Odaii Street nr.14/A - Otopeni Ilfov county<br /><br />'+
                                'Tel. +40 (0)21-352.21.64<br />Fax: +40 (0)21-352.21.67<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Uy5DLiBNQVJDT00gUk1DIDk0IFNSTA==&d=Y2F0YWxpbi5pb25pdGFAbWFyY29tLnJv">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/44.538718+26.064589/@44.538718,26.064589,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow100 = new google.maps.InfoWindow({
                                content: contentString100,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image100  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng100 = new google.maps.LatLng(44.538718, 26.064589);
                            var marker100 = new google.maps.Marker({
                                position: myLatlng100,
                                map: map,
                                    icon: image100
                            });

                                google.maps.event.addListener(marker100, 'click', function() {
                              infowindow100.open(map,marker100);
                            });

                                                                                                                                                                                        var contentString101 =
                            '<div class="map-popup">' +
                            '<h3>NOVEX CONSTRUCTION EQUIPMENT (Russia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Sibirskiy Trakt 57, 620 100 Ekaterinburg - Russia<br /><br />'+
                                'Tel. +7 343 379 33 62<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Tk9WRVggQ09OU1RSVUNUSU9OIEVRVUlQTUVOVA==&d=Y2FhQG52eC5ydQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/56.818661+60.668696/@56.818661,60.668696,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow101 = new google.maps.InfoWindow({
                                content: contentString101,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image101  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng101 = new google.maps.LatLng(56.818661, 60.668696);
                            var marker101 = new google.maps.Marker({
                                position: myLatlng101,
                                map: map,
                                    icon: image101
                            });

                                google.maps.event.addListener(marker101, 'click', function() {
                              infowindow101.open(map,marker101);
                            });

                                                                                                        var contentString102 =
                            '<div class="map-popup">' +
                            '<h3>IndecoRUS LLC (Russia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Sadovnicheskaya street 25, office 9<br /><br />'+
                                'Tel. +7 495 642 1171<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SW5kZWNvUlVTIExMQw==&d=SW5kZWNvX3J1c0BtYWlsLnJ1">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/55.746434+37.634346/@55.746434,37.634346,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow102 = new google.maps.InfoWindow({
                                content: contentString102,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image102  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng102 = new google.maps.LatLng(55.746434, 37.634346);
                            var marker102 = new google.maps.Marker({
                                position: myLatlng102,
                                map: map,
                                    icon: image102
                            });

                                google.maps.event.addListener(marker102, 'click', function() {
                              infowindow102.open(map,marker102);
                            });

                                                                                                        var contentString103 =
                            '<div class="map-popup">' +
                            '<h3>Indeco Delegation in Russia (Russia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Moscow<br /><br />'+
                                'Tel. +7 985 642 1171<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SW5kZWNvIERlbGVnYXRpb24gaW4gUnVzc2lh&d=cnVzc2lhQGluZGVjby5pdA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/55.756046+37.616059/@55.756046,37.616059,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow103 = new google.maps.InfoWindow({
                                content: contentString103,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image103  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng103 = new google.maps.LatLng(55.756046, 37.616059);
                            var marker103 = new google.maps.Marker({
                                position: myLatlng103,
                                map: map,
                                    icon: image103
                            });

                                google.maps.event.addListener(marker103, 'click', function() {
                              infowindow103.open(map,marker103);
                            });

                                                                                                                                                                                        var contentString104 =
                            '<div class="map-popup">' +
                            '<h3>HYDREX (SLOVAKIA)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Partiz&aacute;nska ulica &#269;. 1877 - 962 05 Hri&#328;ov&aacute;<br /><br />'+
                                'Tel. +421 45 5497025-6<br />Fax +421 45 5497675<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SFlEUkVY&d=c2VsZWNreUBoeWRyZXguc2s=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/48.582812+19.528703/@48.582812,19.528703,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow104 = new google.maps.InfoWindow({
                                content: contentString104,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image104  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng104 = new google.maps.LatLng(48.582812, 19.528703);
                            var marker104 = new google.maps.Marker({
                                position: myLatlng104,
                                map: map,
                                    icon: image104
                            });

                                google.maps.event.addListener(marker104, 'click', function() {
                              infowindow104.open(map,marker104);
                            });

                                                                                                                                                                                        var contentString105 =
                            '<div class="map-popup">' +
                            '<h3>NS UNION TEHNIKA (Serbia)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Miroslava Prodanovi&#263;a 6 - 21000 Novi Sad<br /><br />'+
                                'Tel. +381 21 6396636<br />Fax +381 21 6396636<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TlMgVU5JT04gVEVITklLQQ==&d=c2FzYS5zZWt1bGljQG5zdW5pb24uY28ucnM=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/45.285551+19.821308/@45.285551,19.821308,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow105 = new google.maps.InfoWindow({
                                content: contentString105,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image105  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng105 = new google.maps.LatLng(45.285551, 19.821308);
                            var marker105 = new google.maps.Marker({
                                position: myLatlng105,
                                map: map,
                                    icon: image105
                            });

                                google.maps.event.addListener(marker105, 'click', function() {
                              infowindow105.open(map,marker105);
                            });

                                                                                                                                                                                        var contentString106 =
                            '<div class="map-popup">' +
                            '<h3>SEHAPLA S.L. (Spain)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Ctra Villafranqueza - Tangel Km 5 Pol. Ind. Garrachico C/Garrachico 14 - 03112 Alicante<br /><br />'+
                                'Tel. +34 965 181733<br />Fax +34 965 175644<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U0VIQVBMQSBTLkwu&d=Z2VyZW50ZUBzZWhhcGxhLmVz">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/38.398715+-0.477519/@38.398715,-0.477519,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow106 = new google.maps.InfoWindow({
                                content: contentString106,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image106  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng106 = new google.maps.LatLng(38.398715, -0.477519);
                            var marker106 = new google.maps.Marker({
                                position: myLatlng106,
                                map: map,
                                    icon: image106
                            });

                                google.maps.event.addListener(marker106, 'click', function() {
                              infowindow106.open(map,marker106);
                            });

                                                                                                                                                                                        var contentString107 =
                            '<div class="map-popup">' +
                            '<h3>ANDERSEN CONTRACTOR AB (Sweden)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'P.O. BOX 41 - Lill-Kvek&#39;s Gard - 74082 Orsundsbro<br /><br />'+
                                'Tel. +46 171 465151-58<br />Fax +46 171 465160<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=QU5ERVJTRU4gQ09OVFJBQ1RPUiBBQg==&d=bWFyY3VzQGFuZGVyc2VuLWNvbnRyYWN0b3Iuc2U=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/59.725611+17.258885/@59.725611,17.258885,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow107 = new google.maps.InfoWindow({
                                content: contentString107,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image107  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng107 = new google.maps.LatLng(59.725611, 17.258885);
                            var marker107 = new google.maps.Marker({
                                position: myLatlng107,
                                map: map,
                                    icon: image107
                            });

                                google.maps.event.addListener(marker107, 'click', function() {
                              infowindow107.open(map,marker107);
                            });

                                                                                                                                                                                        var contentString108 =
                            '<div class="map-popup">' +
                            '<h3>MTA - TISSIERES MARC ANDRE (Switzerland)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Rte du Simplon, 81 - CH 1958 Saint Leonard<br /><br />'+
                                'Tel. +41 27 2057937<br />Fax +41 27 2057947<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TVRBIC0gVElTU0lFUkVTIE1BUkMgQU5EUkU=&d=am8udGlzc2llcmVzQG10YW10YS5jaA==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/46.256318+7.433119/@46.256318,7.433119,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow108 = new google.maps.InfoWindow({
                                content: contentString108,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image108  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng108 = new google.maps.LatLng(46.256318, 7.433119);
                            var marker108 = new google.maps.Marker({
                                position: myLatlng108,
                                map: map,
                                    icon: image108
                            });

                                google.maps.event.addListener(marker108, 'click', function() {
                              infowindow108.open(map,marker108);
                            });

                                                                                                                                                                                        var contentString109 =
                            '<div class="map-popup">' +
                            '<h3>B.V. BECO (THE NEDERLANDS)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'DE LIMIET 18, 4130 ED VIANEN<br /><br />'+
                                'Tel. +31 347323 140<br />Fax +31 347377 780<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Qi5WLiBCRUNP&d=ai5tZW5ja2VAYmVjby12aWFuZW4ubmw=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.975241+5.089255/@51.975241,5.089255,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow109 = new google.maps.InfoWindow({
                                content: contentString109,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image109  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng109 = new google.maps.LatLng(51.975241, 5.089255);
                            var marker109 = new google.maps.Marker({
                                position: myLatlng109,
                                map: map,
                                    icon: image109
                            });

                                google.maps.event.addListener(marker109, 'click', function() {
                              infowindow109.open(map,marker109);
                            });

                                                                                                                                                                                        var contentString110 =
                            '<div class="map-popup">' +
                            '<h3>MH EQUIPMENT (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Whitewall Business Centre Whitewall Road Medway City Estate - ME2 4DZ Strood Kent<br /><br />'+
                                'Tel. +44 (0) 1634 713032<br />Fax +44 (0) 1634 713063<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUggRVFVSVBNRU5U&d=c2FsZXNAbWhlcXVpcG1lbnQuY28udWs=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.400166+0.510997/@51.400166,0.510997,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow110 = new google.maps.InfoWindow({
                                content: contentString110,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image110  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng110 = new google.maps.LatLng(51.400166, 0.510997);
                            var marker110 = new google.maps.Marker({
                                position: myLatlng110,
                                map: map,
                                    icon: image110
                            });

                                google.maps.event.addListener(marker110, 'click', function() {
                              infowindow110.open(map,marker110);
                            });

                                                                                                        var contentString111 =
                            '<div class="map-popup">' +
                            '<h3>MECHPLANT NORTH EAST LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Esh House Bowburn North Ind. Est - DH6 5PF Bowburn CO Durham<br /><br />'+
                                'Tel. +44 (0) 191 377 8222<br />Fax +44 (0) 191 377 3207<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TUVDSFBMQU5UIE5PUlRIIEVBU1QgTFRE&d=c3RldmVAbXBuZS5jby51aw==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/54.737722+-1.532444/@54.737722,-1.532444,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow111 = new google.maps.InfoWindow({
                                content: contentString111,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image111  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng111 = new google.maps.LatLng(54.737722, -1.532444);
                            var marker111 = new google.maps.Marker({
                                position: myLatlng111,
                                map: map,
                                    icon: image111
                            });

                                google.maps.event.addListener(marker111, 'click', function() {
                              infowindow111.open(map,marker111);
                            });

                                                                                                        var contentString112 =
                            '<div class="map-popup">' +
                            '<h3>KDM HIRE LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '11Killycolp Road BT80 9AD Cookstown Co Tyrone N. Ireland<br /><br />'+
                                'Tel. +44 (0) 28 8676 6633<br />Fax +44 (0) 28 8676 1039<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=S0RNIEhJUkUgTFRE&d=a2VpdGhAa2RtaGlyZS5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/54.613345+-6.729289/@54.613345,-6.729289,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow112 = new google.maps.InfoWindow({
                                content: contentString112,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image112  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng112 = new google.maps.LatLng(54.613345, -6.729289);
                            var marker112 = new google.maps.Marker({
                                position: myLatlng112,
                                map: map,
                                    icon: image112
                            });

                                google.maps.event.addListener(marker112, 'click', function() {
                              infowindow112.open(map,marker112);
                            });

                                                                                                        var contentString113 =
                            '<div class="map-popup">' +
                            '<h3>JAKESPARE LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Bottom Farm Heath Lane - SG4 8SR Codicote Hertfordshire<br /><br />'+
                                'Tel. +44 (0) 1438 820087<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SkFLRVNQQVJFIExURA==&d=YWRhbUBqYWtlc3BhcmUuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.845626+-0.249043/@51.845626,-0.249043,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow113 = new google.maps.InfoWindow({
                                content: contentString113,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image113  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng113 = new google.maps.LatLng(51.845626, -0.249043);
                            var marker113 = new google.maps.Marker({
                                position: myLatlng113,
                                map: map,
                                    icon: image113
                            });

                                google.maps.event.addListener(marker113, 'click', function() {
                              infowindow113.open(map,marker113);
                            });

                                                                                                        var contentString114 =
                            '<div class="map-popup">' +
                            '<h3>GLOBAL CONSTRUCTION PLANT & EQUIPMENT LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Corner Farm Horton Cum Studley - OX33 1BJ<br /><br />'+
                                'Tel. +44 (0) 1865 351510<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R0xPQkFMIENPTlNUUlVDVElPTiBQTEFOVCAmIEVRVUlQTUVOVCBMVEQ=&d=c2FsZXNAZ2xvYmFscGxhbnQuY28udWs=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.799539+-1.119341/@51.799539,-1.119341,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow114 = new google.maps.InfoWindow({
                                content: contentString114,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image114  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng114 = new google.maps.LatLng(51.799539, -1.119341);
                            var marker114 = new google.maps.Marker({
                                position: myLatlng114,
                                map: map,
                                    icon: image114
                            });

                                google.maps.event.addListener(marker114, 'click', function() {
                              infowindow114.open(map,marker114);
                            });

                                                                                                        var contentString115 =
                            '<div class="map-popup">' +
                            '<h3>GORDON BOW PLANT HIRE LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '6 Youngs Road East Mains Industrial Estate- EH52 5LY Broxburn West Lothian<br /><br />'+
                                'Tel. +44 (0)1506 855913<br />Fax +44 (0) 1506 856393<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R09SRE9OIEJPVyBQTEFOVCBISVJFIExURA==&d=Z29yZG9uQGdvcmRvbmJvdy5jby51aw==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/55.940261+-3.455673/@55.940261,-3.455673,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow115 = new google.maps.InfoWindow({
                                content: contentString115,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image115  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng115 = new google.maps.LatLng(55.940261, -3.455673);
                            var marker115 = new google.maps.Marker({
                                position: myLatlng115,
                                map: map,
                                    icon: image115
                            });

                                google.maps.event.addListener(marker115, 'click', function() {
                              infowindow115.open(map,marker115);
                            });

                                                                                                        var contentString116 =
                            '<div class="map-popup">' +
                            '<h3>INDECO UK Ltd. (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Unit 11 - Oasis Business Park - Road One Winsford Industrial Estate - CW7 3RY Winsford Cheshire<br /><br />'+
                                'Tel. +44 1606 597 560<br />Fax +44 1606 597 561<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=SU5ERUNPIFVLIEx0ZC4=&d=bWdAaW5kZWNvLnVrLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/53.196852+-2.495072/@53.196852,-2.495072,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow116 = new google.maps.InfoWindow({
                                content: contentString116,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image116  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng116 = new google.maps.LatLng(53.196852, -2.495072);
                            var marker116 = new google.maps.Marker({
                                position: myLatlng116,
                                map: map,
                                    icon: image116
                            });

                                google.maps.event.addListener(marker116, 'click', function() {
                              infowindow116.open(map,marker116);
                            });

                                                                                                        var contentString117 =
                            '<div class="map-popup">' +
                            '<h3>GENESIS CONSTRUCTION MACHINERY SALES LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Parkside Works Parkwood Street - BD21 4PJ Keighley W.Yorkshire<br /><br />'+
                                'Tel. +44 (0)1535 661234<br />Fax +44 (0) 1535 608765<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=R0VORVNJUyBDT05TVFJVQ1RJT04gTUFDSElORVJZIFNBTEVTIExURA==&d=Z2VuZXNpc0BheGlzLWNvbm5lY3QuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/53.866004+-1.894312/@53.866004,-1.894312,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow117 = new google.maps.InfoWindow({
                                content: contentString117,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image117  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng117 = new google.maps.LatLng(53.866004, -1.894312);
                            var marker117 = new google.maps.Marker({
                                position: myLatlng117,
                                map: map,
                                    icon: image117
                            });

                                google.maps.event.addListener(marker117, 'click', function() {
                              infowindow117.open(map,marker117);
                            });

                                                                                                        var contentString118 =
                            '<div class="map-popup">' +
                            '<h3>EAGLE PLANT (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Millfield Trading Estate - TA20 2DG Chard Somerset<br /><br />'+
                                'Tel. +44 (0) 1460 61111<br />Fax +44 (0) 843 659 3954<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=RUFHTEUgUExBTlQ=&d=Y2hhcmQuYnJhbmNoQGVhZ2xlcGxhbnQuY28udWs=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/50.871173+-2.948344/@50.871173,-2.948344,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow118 = new google.maps.InfoWindow({
                                content: contentString118,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image118  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng118 = new google.maps.LatLng(50.871173, -2.948344);
                            var marker118 = new google.maps.Marker({
                                position: myLatlng118,
                                map: map,
                                    icon: image118
                            });

                                google.maps.event.addListener(marker118, 'click', function() {
                              infowindow118.open(map,marker118);
                            });

                                                                                                        var contentString119 =
                            '<div class="map-popup">' +
                            '<h3>DEREK FITZGERALD PLANT LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Finney Spring House Charley Road - LE12 9EW Shepshed Leicester<br /><br />'+
                                'Tel. +44 (0)1509 502355<br />Fax: +44 (0) 1509 505886<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=REVSRUsgRklUWkdFUkFMRCBQTEFOVCBMVEQ=&d=Zml0emdlcmFsZHBsYW50QGJ0Y29ubmVjdC5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.664218+-3.020268/@51.664218,-3.020268,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow119 = new google.maps.InfoWindow({
                                content: contentString119,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image119  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng119 = new google.maps.LatLng(51.664218, -3.020268);
                            var marker119 = new google.maps.Marker({
                                position: myLatlng119,
                                map: map,
                                    icon: image119
                            });

                                google.maps.event.addListener(marker119, 'click', function() {
                              infowindow119.open(map,marker119);
                            });

                                                                                                        var contentString120 =
                            '<div class="map-popup">' +
                            '<h3>CARADON TOOL & PLANT HIRE LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Miller Business Park Station Road - PL14 4DA Liskeard Cornwall<br /><br />'+
                                'Tel. +44 (0)1579 343796<br />Fax +44 (0) 01576 347762<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Q0FSQURPTiBUT09MICYgUExBTlQgSElSRSBMVEQ=&d=Y2FyYWRvbnRwaEBidGNvbm5lY3QuY29t">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/50.448793+-4.471897/@50.448793,-4.471897,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow120 = new google.maps.InfoWindow({
                                content: contentString120,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image120  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng120 = new google.maps.LatLng(50.448793, -4.471897);
                            var marker120 = new google.maps.Marker({
                                position: myLatlng120,
                                map: map,
                                    icon: image120
                            });

                                google.maps.event.addListener(marker120, 'click', function() {
                              infowindow120.open(map,marker120);
                            });

                                                                                                        var contentString121 =
                            '<div class="map-popup">' +
                            '<h3>SPARTAN PLANT & ENGINE REPAIRS LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Unit 16 Atlantic Trading Estate - CF63 3RF Barry Vale of Glamorgan<br /><br />'+
                                'Tel. +44 (0) 1446 701133<br />Fax +44 (0) 1446 701233<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U1BBUlRBTiBQTEFOVCAmIEVOR0lORSBSRVBBSVJTIExURA==&d=amZhcnJ1Z2lhMTcwMkB5YWhvby5jb20=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.397201+-3.249356/@51.397201,-3.249356,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow121 = new google.maps.InfoWindow({
                                content: contentString121,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image121  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng121 = new google.maps.LatLng(51.397201, -3.249356);
                            var marker121 = new google.maps.Marker({
                                position: myLatlng121,
                                map: map,
                                    icon: image121
                            });

                                google.maps.event.addListener(marker121, 'click', function() {
                              infowindow121.open(map,marker121);
                            });

                                                                                                        var contentString122 =
                            '<div class="map-popup">' +
                            '<h3>SGS EQUIPMENT (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Unit 7 Bridge Industries Broadcut - PO16 8SX Fareham Hampshire<br /><br />'+
                                'Tel. +44 (0) 2392 471225<br />Fax +44 (0) 2392 475335<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=U0dTIEVRVUlQTUVOVA==&d=Z2F2aW5Ac2dzZXF1aXBtZW50LmNvLnVr">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/50.819547+-0.797229/@50.819547,-0.797229,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow122 = new google.maps.InfoWindow({
                                content: contentString122,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image122  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng122 = new google.maps.LatLng(50.819547, -0.797229);
                            var marker122 = new google.maps.Marker({
                                position: myLatlng122,
                                map: map,
                                    icon: image122
                            });

                                google.maps.event.addListener(marker122, 'click', function() {
                              infowindow122.open(map,marker122);
                            });

                                                                                                        var contentString123 =
                            '<div class="map-popup">' +
                            '<h3>RED PLANT SALES LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Booms Farm Garage Coggeshall Road - CO6 2JX Earls Colne Essex<br /><br />'+
                                'Tel. +44 (0) 1206 323147<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UkVEIFBMQU5UIFNBTEVTIExURA==&d=aW5mb0ByZWRwbGFudHNhbGVzLmNvLnVr">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.908255+0.697028/@51.908255,0.697028,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow123 = new google.maps.InfoWindow({
                                content: contentString123,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image123  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng123 = new google.maps.LatLng(51.908255, 0.697028);
                            var marker123 = new google.maps.Marker({
                                position: myLatlng123,
                                map: map,
                                    icon: image123
                            });

                                google.maps.event.addListener(marker123, 'click', function() {
                              infowindow123.open(map,marker123);
                            });

                                                                                                        var contentString124 =
                            '<div class="map-popup">' +
                            '<h3>PLANTMASTER SALES (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '79 Oaklands Drive Willerby - HU10 6BJ Hull Humberside<br /><br />'+
                                'Tel. +44 (0) 1482 650136<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=UExBTlRNQVNURVIgU0FMRVM=&d=">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/53.759378+-0.448802/@53.759378,-0.448802,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow124 = new google.maps.InfoWindow({
                                content: contentString124,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image124  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng124 = new google.maps.LatLng(53.759378, -0.448802);
                            var marker124 = new google.maps.Marker({
                                position: myLatlng124,
                                map: map,
                                    icon: image124
                            });

                                google.maps.event.addListener(marker124, 'click', function() {
                              infowindow124.open(map,marker124);
                            });

                                                                                                        var contentString125 =
                            '<div class="map-popup">' +
                            '<h3>NEWCAT PLANT SERVICES LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Unit1, Beta Block Orchard Trading Estate - GL54 5EB Cheltenham Gloucester<br /><br />'+
                                'Tel. +44 (0) 1242 621110<br />Fax +44 (0) 1242 621118<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TkVXQ0FUIFBMQU5UIFNFUlZJQ0VTIExURA==&d=c3VlQG5ld2NhdHBsYW50LmNvLnVr">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/51.993165+-1.965459/@51.993165,-1.965459,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow125 = new google.maps.InfoWindow({
                                content: contentString125,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image125  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng125 = new google.maps.LatLng(51.993165, -1.965459);
                            var marker125 = new google.maps.Marker({
                                position: myLatlng125,
                                map: map,
                                    icon: image125
                            });

                                google.maps.event.addListener(marker125, 'click', function() {
                              infowindow125.open(map,marker125);
                            });

                                                                                                        var contentString126 =
                            '<div class="map-popup">' +
                            '<h3>MTK (BREAKER HIRE & SALES) LTD (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                'Nelstrop Road Levenshulme - M19 3JL Manchester<br /><br />'+
                                'Tel. +44 (0) 161 225 9740<br />Fax +44 (0) 872 331 5170<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=TVRLIChCUkVBS0VSIEhJUkUgJiBTQUxFUykgTFRE&d=bWlrZS5sZWVjaEBrYWlsbHBsYW50LmNvLnVr">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/53.444796+-2.172843/@53.444796,-2.172843,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow126 = new google.maps.InfoWindow({
                                content: contentString126,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image126  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng126 = new google.maps.LatLng(53.444796, -2.172843);
                            var marker126 = new google.maps.Marker({
                                position: myLatlng126,
                                map: map,
                                    icon: image126
                            });

                                google.maps.event.addListener(marker126, 'click', function() {
                              infowindow126.open(map,marker126);
                            });

                                                                                                        var contentString127 =
                            '<div class="map-popup">' +
                            '<h3>NORTHERN EXCAVATORS (United Kingdom)</h3>' +
                                '<div>' +
                                '<address style="font-style: normal;">'+
                                '103 Culcavy Road, Newport Road, Hillsborough BT26 6HH - Northern Ireland<br /><br />'+
                                'Tel. +44 (0) 28 9268 2617<br />Fax +44 (0) 28 9268 9522<br />'+
                                '<i class="fa fa-envelope" aria-hidden="true"></i><a class="fancybox iframe" href="/ru/form_templates/complesso_pagina.php?a=Tk9SVEhFUk4gRVhDQVZBVE9SUw==&d=a2FyZW5Abm9ydGhlcm5leGNhdmF0b3JzLmNvbQ==">e-mail</a>'+
                                '</address>'+
                                '<hr />' +
                            '<a target="_blank" href="https://www.google.com/maps/place/54.483614+-6.090991/@54.483614,-6.090991,7z">' +
                            'Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð² Google Maps &#187;</a> ' +
                                '</div>' +
                            '</div>';

                            var infowindow127 = new google.maps.InfoWindow({
                                content: contentString127,
                                maxWidth: 230,
                                maxHeight: 300,

                            });

                                var image127  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
                            var myLatlng127 = new google.maps.LatLng(54.483614, -6.090991);
                            var marker127 = new google.maps.Marker({
                                position: myLatlng127,
                                map: map,
                                    icon: image127
                            });

                                google.maps.event.addListener(marker127, 'click', function() {
                              infowindow127.open(map,marker127);
                            });


    /* Marker 0 */
    var contentString =
        '<div class="map-popup">' +
        '<h3>Indeco Headquarter</h3>' +
            '<div>' +
            '<address>'+
            'Viale Lindemann, 10 ZI<br />'+
            'Bari - 70132 - Italy<br />'+
            'Tel. +39 080 531 33 40/70'+
            '</address>'+
            '<hr />' +
        '<a target="_blank" href="https://www.google.it/maps/place/Indeco+Ind.+Spa/@41.1143442,16.8129,17z/data=!4m13!1m7!3m6!1s0x1347eed6128e7407:0x907568fddd787a3f!2sIndeco+Ind.+Spa!3b1!8m2!3d41.1143402!4d16.8150887!3m4!1s0x1347eed6128e7407:0x907568fddd787a3f!8m2!3d41.1143402!4d16.8150887">' +
        'Watch in Google Maps &#187;</a> ' +
            '</div>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 230,
        maxHeight: 300,

    });

        var image  = 'http://indeco.loc/wp-content/themes/indeco/assets/img/indeco-marker-dealer.png';
    var myLatlng = new google.maps.LatLng(41.1143442, 16.8129);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
            icon: image
    });

        google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });

/* */




     /* Hide Markers when zoom <= 12 x */
         /*
    google.maps.event.addListener(map, 'zoom_changed', function() {
      var zoom = map.getZoom();

      if (zoom <= 12) {
        marker3.setMap(null);
          marker2.setMap(null);
          marker1.setMap(null);
      } else {
        marker3.setMap(map);
          marker2.setMap(map);
          marker1.setMap(map);
      }
    });
    */

     /* open popup marker when map is load */
    // new google.maps.event.trigger( marker, 'click' );

}
// jQuery(document).ready(function(){
    google.maps.event.addDomListener(window, 'load', initialize);
// });

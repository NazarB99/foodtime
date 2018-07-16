@extends('layouts.front')

@section('content')
    <main>
        <div class="main-part">
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part"
                     style="background: url('{{$restaurant->header}}') no-repeat center center; box-shadow: 0 5px 5px black; z-index: 10"></section>
            <div class="grk1"></div>
            <!-- End Breadcrumb Part -->
            <!-- Start Menu Part -->
            <div class="additional_inforamation">
                <div class="container oPadding">
                    <div class="col-md-6">
                        <table class="restInfoTable" border="0">
                            <tr>
                                <td><img src="{{asset('images/icon_kitchen.png')}}"/></td>
                                <th>Кухня: @foreach($restaurant->restaurant_categories as $cat){{$cat->name}} @endforeach</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/icon_distance.png')}}"/></td>
                                <th>Расстояние до вас:</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>7.6 км</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/icon_time.png')}}"/></td>
                                <th>Время доставки:</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>45 минут</td>
                            </tr>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/icon_cost.png')}}"/></td>
                                <th>Стоимость доставки:</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>бесплатно</td>
                            </tr>
                        </table>
                    </div>
                    <div id="map" class="col-md-6"></div>
                </div>
            </div>
        <!-- <div class="additional_inforamation_2" style="margin-top: 3rem;margin-bottom:-1rem;">
                <div class="container">
                    <h6 style="font-weight: bolder">Адрес: </h6>
                </div>
            </div>-->
            <div class="search_back">
                <div class="container">
                    <form class="search_container" role="form" autocomplete="off">
                        <input type="text" name="search_food" placeholder="Поиск блюд ....">
                        <input type="submit" class="srch_btn" name="submit" value="&#xf002;">
                    </form>
                </div>
            </div>

            <div class="container mPadding">
                <div class="menu_cat_container">
                    <ul>
                        <li class="menu_header">Меню</li>
                        <li><a class="item_click" data-filter="*">Все</a></li>
                        @foreach($categories as $category)
                            <li><a data-filter=".{{$category->id}}" class="item_click">&nbsp;<i class="fa fa-chevron-right"></i>{{$category->name}}</a></li>
                        @endforeach
                        {{--<li><a data-filter="."  class="item_click zBBor">&nbsp;<i class="fa fa-chevron-right"></i></a></li>--}}
                    </ul>
                </div>
                <div class="food_display_container">
                    <div class="sBox curr_menu">
                       @foreach($products as $product)
                            <div class="portion_cont_left {{$product->category_id}}">
                                <a data-toggle="modal" href="#food_details" class="details">
                                    <img id="img_{{$product->id}}" src="{{$product->img}}" class="img-responsive">
                                    <span><i class="fa fa-search fa-2x"></i></span>
                                    <div class="food_ingredients">
                                        Состав: {{$product->description}}
                                    </div>
                                </a>
                                <h4 id="product_val_{{$product->id}}">{{$product->name}}</h4>
                                <section class="food_pw">350 г&nbsp;&nbsp;&nbsp;&nbsp;<span id="price_product_">{{$product->price}} TMT</span>
                                </section>
                                <section class="half_cont">
                                    <input id="{{$product->id}}" type="button" class="orderBtn plus" value="Заказать">
                                    <input type="button" class="plusBtn" value="&#xf067;">
                                    <input id="order_count_{{$product->id}}" data-id="" type="text" class="orderCount" value="1"
                                           onkeypress="return onlyNum(event)">
                                    <input type="button" class="minusBtn" value="&#xf068;">
                                </section>
                            </div>
                        @endforeach
                    </div>
                    <div class="sBox next_menu">
                        @foreach($products as $product)
                        <div class="portion_cont_left {{$product->category_id}}">
                            <a data-toggle="modal" href="#food_details" class="details">
                                <img id="img_{{$product->id}}" src="{{$product->img}}" class="img-responsive">
                                <span><i class="fa fa-search fa-2x"></i></span>
                                <div class="food_ingredients">
                                    Состав: {{$product->description}}</div>
                            </a>
                            <h4 id="product_val_{{$product->id}}">{{$product->name}}</h4>
                            <section class="food_pw">350 г&nbsp;&nbsp;&nbsp;&nbsp;<span id="price_product_">{{$product->price}} TMT</span>
                            </section>
                            <section class="half_cont">
                                <input id="{{$product->id}}" type="button" class="orderBtn plus" value="Заказать">
                                <input type="button" class="plusBtn" value="&#xf067;">
                                <input id="order_count_{{$product->id}}" data-id="" type="text" class="orderCount" value="1"
                                       onkeypress="return onlyNum(event)">
                                <input type="button" class="minusBtn" value="&#xf068;">
                            </section>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="food_details" tabindex="-1" role="dialog" aria-labelledby="foodModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content food_modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">*</button>
                </div>
                <div class="modal-body">
                    <img src="/" class="food_mod_frame">
                    <p class="food_content"></p>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        var count = 1;
        var countEl = document.getElementById("count");

        function plus() {
            count++;
            countEl.value = count;
        }

        function minus() {
            if (count > 1) {
                count--;
                countEl.value = count;
            }
        }
    </script>
    <script>
        var customLabel = {
            restaurant: {
                label: 'R'
            },
        };

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(37.899522498451546, 58.36096913733169),
                zoom: 16
            });
            var infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML file
            downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function (data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName('marker');
                Array.prototype.forEach.call(markers, function (markerElem) {
                    var id = markerElem.getAttribute('id');
                    var name = markerElem.getAttribute('name');
                    var address = markerElem.getAttribute('address');
                    var type = markerElem.getAttribute('type');
                    var point = new google.maps.LatLng(
                        parseFloat(markerElem.getAttribute('lat')),
                        parseFloat(markerElem.getAttribute('lng')));

                    var p = {lat: 37.899522498451546, lng: 58.36096913733169};

                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name;
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));

                    var text = document.createElement('text');
                    text.textContent = address;
                    infowincontent.appendChild(text);
                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: p,
                        label: icon.label
                    });
                    marker.addListener('click', function () {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                });
            });
        }


        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {
        }
    </script>
    <script async defer
            src="https://
            maps.googleapis.com/maps/api/js?key=AIzaSyAuHxj8l7-FRiiT8U3ddK7tLgEHUA6RFYY&callback=initMap">
    </script>
    <script>
        function onlyNum(e) {
            var eCode = (e.which) ? e.which : event.keyCode;
            if (eCode > 31 && (eCode < 48 || eCode > 57)) return false;
            return true;
        }

        $(document).ready(function () {
//            if($("#table_body").children.length > 0){
//                $("#order_button").attr("href","/cart/pay");
//            }
            $('a.item_click').eq(0).addClass('act_category');
            $("a#plus").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/add/" + id, {}, function (data) {
                    $("#orders_inner").html(data);
                    //$("#price_table").html(data);
                });
                return false;
            });
            $("a#remove").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/delete/" + id, {}, function () {

                });
                $("tr#row_" + id).remove();
                //return false;
            });
            $('div .details').on('click', function () {
                $('.food_mod_frame').attr('src', $(this).parent().find('img').attr('src'));
                $('p.food_content').text($(this).parent().find('div.food_ingredients').text());
            });

            $('section input:button').on('click', function () {
                if ($(this).hasClass('plusBtn')) {
                    $(this).parent().find('input[type="text"]').val(function (i, esVal) {
                        return ++esVal;
                    });
                }
                else if ($(this).hasClass('minusBtn')) {
                    if ($(this).parent().find('input[type="text"]').val() !== '1') {
                        $(this).parent().find('input[type="text"]').val(function (i, esVal) {
                            return --esVal;
                        });
                    }
                }
            });

            $('a.item_click').on('click', function () {
                if (!$(this).hasClass('act_category')) {
                    var $container = $('.next_menu').isotope({transitionDuration: 0});

                    var selector = $(this).attr('data-filter');
                    $container.isotope({filter: selector});
                    /*return false;*/


                    //fill content of next_menu first, then following code comes $('.next_menu').empty();
                    $('.curr_menu').addClass('vis_menu');
                    $('.next_menu').addClass('unvis_menu');
                    setTimeout(function () {
                        $('.food_display_container').find('.vis_menu').removeClass('curr_menu').removeClass('vis_menu').addClass('next_menu').end().parent().find('.unvis_menu').removeClass('next_menu').removeClass('unvis_menu').addClass('curr_menu');
                    }, 1500);
                    $('a.act_category').removeClass('act_category');
                    $(this).addClass('act_category');
                }
            });
            $('input.orderCount').bind('paste', function (e){e.preventDefault()}).on('blur', function () {if (!this.value || $(this).val().trim() == '' || $(this).val() == 0) $(this).val('1');}).on('change',function(){ $('.next_menu div section').find('input#'+$(this)[0].id).val(this.value);});
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.orderBtn').click(function () {
                var pdt_id = $(this).attr("id");
                var qty = $('#order_count_'+ pdt_id).val();
                $.ajax({
                    type: "POST",
                    url: 'http://foodtime.oo/cart/add',
                    data: {pdt_id: pdt_id, qty:qty , _token: '{{csrf_token()}}'},
                    success: function( msg ) {
                        $('#orders_inner').text(msg.price + ' TMT');
                        $('#cart_total').text(msg.price + ' TMT');
                        $("#items").html(msg.item);
                    }
                });
            });
        });
    </script>
@endsection
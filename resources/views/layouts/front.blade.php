<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATM-FOOD</title>

    <link href="{{asset('plugin/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/bootstrap/datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/font-awesome/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/form-field/jquery.formstyler.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/revolution-plugin/extralayers.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/revolution-plugin/settings.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/owl-carousel/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/slick-slider/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/magnific/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/animation/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive_2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style-default.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/response_style.css')}}">
    <link href="{{mix('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <!--    <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
    function displayDiv() {
        if (document.getElementById('cart-wrap').style.display === "none") {
            document.getElementById('cart-wrap').style.display = "block";
            document.styleSheets[0].addRule('.cart-blog:before', "border-bottom: 8px dashed #fff;\n" +
                "    border-left: 8px solid transparent;\n" +
                "    border-right: 8px solid transparent;\n" +
                "    position: absolute;\n" +
                "    top: 0;\n" +
                "    right: 35%;\n" +
                "    display: inline-block;\n" +
                "    margin-top: -8px;\n" +
                "    margin-left: -8px;\n" +
                "    z-index: 99");
            $("h3.title").removeClass("plus");
        } else {
            document.getElementById('cart-wrap').style.display = "none";
            $("h3.title").addClass("plus");
        }
    }
</script>
<div id="pre-loader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">Загружается</span>
    </div>
    <!--<div class="loader-holder">
        <div class="frame">
            <img src="/images/Preloader.gif" alt="ATMfood"/>
        </div>
    </div>-->
</div>
<header>
    <div class="header-part header-reduce sticky">
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <div class="header-top-left" style="margin-top: 4px">
                        <a href="#" class="top-cell"><img src="{{asset('images/category/phone.png')}}" alt=""
                                                          style="width:15px;"><span id="header-phone">(+993 12) 48-63-67/68</span></a>
                        <a href="mailto:info@itpark.tm?subject=ATM контакт" class="top-email"><span id="header-email"
                                                                                                    style="font-family: 'Ubuntu';font-size: 18px;font-weight: 400;">info@itpark.tm</span></a>
                    </div>
                    <div class="header-top-right">
                        <div class="social-buttons-header">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        <div class="language-menu" style="font-family: 'Ubuntu'">
                            <a href="#" class="current-lang">Русский <i class="fa fa-caret-down"
                                                                        aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Туркменский</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-info">
                    <div class="header-info-inner">
                        <div class="book-table header-collect book-md" style="font-family: Ubuntu">
                            @if(!Auth::id())
                                <a href="{{route('users.login.register')}}" style="margin-right: 22px;">Вход или Регистрация</a>
                            @else
                                @if(Auth::user()->admin)
                                    <a href="{{route('restaurants.admin.list')}}" style="margin-right: 5px;">{{Auth::user()->name}}</a>
                                @elseif(Auth::user()->restaurant)
                                    <a href="{{route('order.list')}}" style="margin-right: 5px;">{{Auth::user()->name}}</a>
                                @else
                                    <a href="#" style="margin-right: 5px;">{{Auth::user()->name}}</a>
                                @endif
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выход
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                            {{--<a href="#">Выйти</a>--}}
                        </div>
                        <div class="shop-cart header-collect">
                            <a onclick="displayDiv();" href="javascript:void()" id="orders"><img
                                        src="{{asset('images/icon-basket.png')}}" alt=""
                                        style="font-family: Ubuntu"><span id="orders_inner"
                                                                          style="margin-left: -1px; font-family: Ubuntu">{{Cart::total()}}
                                    TMT</span></a>
                            <div id="cart-wrap" class="cart-wrap">
                                <div class="cart-blog">
                                    <div id="items">
                                        @foreach(Cart::content() as $item)
                                            <div id='cart_item_{{$item->id}}' class='cart-item'>
                                                <div class='cart-item-left'>
                                                    <img src='{{$item->options->img}} ' alt=''>
                                                </div>
                                                <div class='cart-item-right'>
                                                    <h6 id='name_product'>{{$item->name}}</h6>
                                                    <span id='product_price_{{$item->id}}'>{{$item->price * $item->qty}}
                                                        TMT</span>
                                                </div>
                                                <span id='{{$item->id}}' class='delete-icon' onclick="deleteItem({{$item->id}})"></span>
                                                <input data-id='{{$item->id}}' min='1' max='100' class='input_{{$item->id}}'
                                                       id='cart-wrap-input' type='number' value='{{$item->qty}}' onkeyup='changeValue({{$item->id}});'><label
                                                        for='cart-wrap-input' class='input_label'>шт </label>
                                                <input type="hidden" id="hidden_{{$item->id}}" value="{{$item->rowId}}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="subtotal">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h6>Итого :</h6>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <span id="cart_total">{{Cart::total()}} TMT</span>
                                        </div>
                                    </div>
                                    <div class="cart-btn">
                                        <a style="width: 75%;margin-left:7%;" href="{{route('cart.index')}}"
                                           class="btn-main view">Оформление Заказа</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-part">
                            <a href="#" style="margin-left: -17px"></a>
                            <div class="search-box">
                                <form action="/search" method="get">
                                    <input type="text" name="find_restaurant" placeholder="Поиск"
                                           style="font-family: Ubuntu" autocomplete="off">
                                    <input type="submit" value=" ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-icon">
                    <a href="#" class="hambarger">
                        <span class="bar-1"></span>
                        <span class="bar-2"></span>
                        <span class="bar-3"></span>
                    </a>
                </div>
                <div class="menu-main">
                    <ul style="font-family: Ubuntu">
                        <li class="mega-menu">
                            <a href="{{route('restaurant.list')}}">Рестораны</a>
                        </li>
                        <li class="mega-menu">
                            <a href="#">Контакты</a>
                        </li>
                        <li class="mega-menu">
                            <a href="#">О Нас</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="/"><img id="logo_img" src="{{asset('images/logo.png')}}" alt="На главную"></a>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<br><br><br>
<footer>
    <div class="footer-part wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"
         style="box-shadow: 0 -5px 5px grey; padding: 0">
        <div class="container">
            <div class="left-side">
                <p style="font-family: Ubuntu;color: white"><i class="fa fa-address-book" style="margin-right: 4px"></i>329
                    ул. Гарашсызлык, Ашхабад, Туркменистан.</p>
                <p style="font-family: Ubuntu; margin-left: 9px" id="phone"><a href="#"><i class="fa fa-phone"
                                                                                           style="margin-right: 4px"></i>+993
                        12 34 56 78</a></p>
                <p style="font-family: Ubuntu; margin-left: 9px" id="email"><a href="#"><i class="fa fa-envelope"
                                                                                           style="margin-right: 4px"></i>atmfood@gmail.com</a>
                </p>
            </div>
            <div class="right-side">
                <div class="social-buttons">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-vk"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                </div>
                <p>ХО Центр автоматизации и технологий &copy;2017.</p>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="top-arrow"><i class="fa fa-chevron-up"></i></a>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('plugin/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugin/bootstrap/bootstrap-datepicker.js')}}"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script>-->
<script src="{{asset('plugin/form-field/jquery.formstyler.min.js')}}"></script>
<script src="{{asset('plugin/revolution-plugin/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('plugin/revolution-plugin/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('plugin/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('plugin/slick-slider/slick.min.js')}}"></script>
<script src="{{asset('plugin/isotop/isotop.js')}}"></script>
<script src="{{asset('plugin/isotop/packery-mode.pkgd.min.js')}}"></script>
<script src="{{asset('plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('plugin/animation/wow.min.js')}}"></script>
<script src="{{asset('plugin/parallax/jquery.stellar.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
<script>  var $slider = $('.slider');
    var $slideBox = $slider.find('.slide-box');
    var $leftControl = $slider.find('.slide-left');
    var $rightControl = $slider.find('.slide-right');
    var $slides = $slider.find('.slide');
    var numItems = $slider.find('.slide').length;
    var position = 0;


    var windowWidth = $(window).width();
    $slides.width(windowWidth);
    $leftControl.on('click', function () {
        var width = $slider.width();
        position = position - 1 >= 0 ? position - 1 : numItems - 1;
        if (position != numItems - 1) {
            $slider.find('.slide').eq(position + 1).css('margin-left', 0);
        }
        else {
            $slider.find('.slide:gt(0)').each(function (index) {
                $(this).css('margin-left', width * -1 + 'px');
            });
        }
    });

    $rightControl.on('click', function () {
        var width = $slider.width();
        position = position + 1 < numItems ? position + 1 : 0;
        if (position != 0) {
            $slider.find('.slide').eq(position).css('margin-left', width * -1 + 'px');
        }
        else {
            $slider.find('.slide').css('margin-left', 0);
        }
    });

    $(window).resize(function () {
        $slides.width($(window).width()).height($(window).height);
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<script>

</script>
@yield('scripts')
<script>
    function changeValue(id) {
        var qty = $('.input_' + id).val();
        var hidden = $('#hidden_' + id).val();
        $.ajax({
            type: "POST",
            url: 'http://foodtime.oo/cart/update',
            data: {pdt_id: id, qty: qty, hidden: hidden, _token: '{{csrf_token()}}'},
            success: function (msg) {
                $('#orders_inner').text(msg.total_price + " TMT");
                $('#cart_total').text(msg.total_price + " TMT");
                $('#product_price_' + id).text(msg.item_price + " TMT");
            }
        });
    }
</script>
<script>
    function deleteItem(id){
        var hidden = $('#hidden_' + id).val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: 'http://foodtime.oo/cart/delete',
            data: {hidden: hidden, _token: '{{csrf_token()}}'},
            success: function (msg) {
                $('#orders_inner').text(msg.price + " TMT");
                $('#cart_total').text(msg.price + " TMT");
                $("#items").html(msg.cart);
            }
        });
    }
</script>
</body>
</html>
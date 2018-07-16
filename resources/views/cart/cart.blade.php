@extends('layouts.front')
@section('content')
<main>
        <div class="main-part">
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part"
                     style="background: url('/images/category/basket.jpg') no-repeat center center; box-shadow: 0 5px 5px black;z-index: 10;">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <h2>Корзина</h2>
                        <a href="#">На главную</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class="home-icon shop-cart bg-skeen">
                <form id="cart_form" action="" method="post">
                    <div class="container">
                        <br><br>
                        <div class="shop-cart-list wow fadeInDown" data-wow-duration="1000ms"
                             data-wow-delay="300ms">
                            <table class="shop-cart-table">
                                <thead>
                                <tr>
                                    <th>БЛЮДО</th>
                                    <th>ЦЕНА</th>
                                    <th>КОЛИЧЕСТВО</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th>БЛЮДО</th>
                                        <td>
                                            <div class="product-cart">
                                                <img class="img-rounded"
                                                     src="{{$product->options->img}}"
                                                     alt="" style="width: 100px">
                                            </div>
                                            <div class="product-cart-title">
                                                <span>{{$product->name}}</span>
                                            </div>
                                        </td>
                                        <th>ЦЕНА</th>
                                        <td>
                                            <strong>{{$product->price * $product->qty}}</strong>
                                        </td>
                                        <th>КОЛИЧЕСТВО</th>
                                        <td>
                                            <div class="price-textbox">
                                                            <span class="minus-text" id="{{$product->id}}"><i
                                                                        class="icon-minus"></i></span>
                                                <input name="quantity_{{$product->id}}"
                                                       id="quantity_{{$product->id}}"
                                                       placeholder=""
                                                       type="number"
                                                       value="{{$product->qty}}">
                                                <span class="plus-text" id="{{$product->id}}"><i
                                                            class="icon-plus"></i></span>
                                            </div>
                                        </td>
                                        <td class="shop-cart-close"><a
                                                    href="/cart/deleteCart/"><i
                                                        class="icon-cancel-5"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="product-cart-detail">
                                <div class="cupon-part">
                                    <input type="text" name="txt" placeholder="Cupon Code">
                                </div>
                                <a href="#" class="btn-medium btn-dark-coffee">Подтвердить купон</a>
                                <input type="submit" name="reboot" class="btn-medium btn-skin pull-right"
                                       onclick="rebootThePage()" value="Обновить корзину">
                            </div>
                        </div>
                        <div class="cart-total wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

                            <div class="cart-total-title">
                                <h5>ИТОГО</h5>
                            </div>
                            <div class="product-cart-total">
                                <small>Заказано на</small>
                                <span>{{Cart::total()}} TMT</span>
                            </div>
                            <div class="product-cart-total">
                                <small>Доставка</small>
                                <span>10.00 ТМТ</span>
                            </div>
                            <div class="grand-total">
                                <h5>ВСЕГО <span>{{Cart::total() + 10}} TMT</span></h5>
                            </div>
                            <div class="proceed-check">
                                <a href="{{route('checkout.info')}}" name="checkout" class="btn-primary-gold btn-medium">ПОДТВЕРДИТЬ ПОКУПКУ</a>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
	@section('scripts')
    <script>
        $(document).ready(function () {
            ////////////////////////////////////////////////
            $(".plus-text").click(function () {
                var id = $(this).attr("id");
                var prevValue = $('#quantity_' + id).val();
                var newValue = parseInt(prevValue, 10) + 1;
                $('#quantity_' + id).val(newValue);
            });
            $(".minus-text").click(function () {
                var id = $(this).attr("id");
                var prevValue = $('#quantity_' + id).val();
                var newValue = parseInt(prevValue, 10) - 1;
                $('#quantity_' + id).val(newValue);
            });
        });
        //////////////////////////////////////////////////

        var form = document.getElementById("cart_form");
        function rebootThePage() {
            form.action = "/cart";
            form.submit();
        }
        function checkOut() {
            form.action = "/checkout";
            form.submit();
        }
    </script>
    @endsection
</body>

</html>
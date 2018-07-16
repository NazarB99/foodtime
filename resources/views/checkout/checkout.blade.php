@extends('layouts.front')
@section('content')
<main>
    <div class="main-part">
        <!-- Start Breadcrumb Part -->
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('images/breadbg1.jpg')}}');">
            <div class="container">
                <div class="breadcrumb-inner">
                    <h2>КОРЗИНА</h2>
                    <a href="#">Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Part -->
        <form action="{{route('checkout.store')}}" method="post">
            {{csrf_field()}}
            <section class="home-icon shop-cart bg-skeen">
                <div class="container">
                    <br><br><br>
                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="shop-checkout-left">
                                    <h6>Returning customer? Click here to <a href="login_register.html">login</a></h6>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h5>Детали заказа</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" name="name_customer" placeholder="Имя" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" id="phone" name="phone_customer" placeholder="Телефон" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="address" cols="60" rows="3" placeholder="Адрес" required></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>
                                                <input type="checkbox" name="checkbox">Create an account ?</label>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h5>Shipping Address</h5>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea placeholder="Примечания"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="shop-checkout-right">
                                    <div class="shop-checkout-box">
                                        <h5>ВАШ ЗАКАЗ</h5>
                                        <div class="shop-checkout-title">
                                            <h6>PRODUCT <span>TOTAL</span></h6>
                                        </div>
                                        <div class="shop-checkout-row">
                                            @foreach(Cart::content() as $item)
                                                <p><span>{{$item->name}}</span>{{$item->qty}} x<small>{{$item->price * $item->qty}} TMT</small></p>
                                                <input type="hidden" name="cart[]" value="{{$item->id}}">
                                                <input type="hidden" name="content[]" value="{{$item->name}}({{$item->qty}}шт.)">
                                            @endforeach

                                        </div>
                                        <div class="checkout-total">
                                            <h6>ЗАКАЗАНО НА <small>{{Cart::total()}} TMT</small></h6>
                                        </div>
                                        <div class="checkout-total">
                                            <h6>ДОСТАВКА <small>10 TMT</small></h6>
                                        </div>
                                        <div class="checkout-total">
                                            <h6>ОБЩАЯ СУММА <small class="price-big">{{Cart::total() + 10}} TMT</small></h6>
                                        </div>
                                    </div>
                                    <div class="checkout-button">
                                        <input class="button-default btn-large btn-primary-gold" name="order_submit" type="submit" value="ПОДТВЕРДИТЬ ПЛАТЕЖ">
                                    </div>
                                    <!--								<div class="shop-checkout-box">-->
                                    <!--									<h5>PAYMENT METHODS</h5>-->
                                    <!--									<label>-->
                                    <!--										<input type="radio" name="radio">Direct Bank Transfer</label>-->
                                    <!--									<p>Make your payment directly into our bank account. Please use your cleared in our account.</p>-->
                                    <!--									<div class="payment-mode">-->
                                    <!--										<label>-->
                                    <!--											<input type="radio" name="radio">Check Payments</label>-->
                                    <!--									</div>-->
                                    <!--									<div class="payment-mode">-->
                                    <!--										<label>-->
                                    <!--											<input type="radio" name="radio">Cash on Delivery</label>-->
                                    <!--									</div>-->
                                    <!--									<div class="payment-mode">-->
                                    <!--										<label>-->
                                    <!--											<input type="radio" name="radio"> PayPal</label> <a href="#"><img src="/images/paycart.png" alt=""></a><a href="#">What is PayPal?</a>-->
                                    <!--									</div>-->
                                    <!--									<div class="checkout-terms">-->
                                    <!--										<label>-->
                                    <!--											<input type="checkbox" name="checkbox">I’ve read and accept the terms &amp; conditions *</label>-->
                                    <!--									</div>-->
                                    <!--								</div>-->
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </form>

    </div>
</main>
@endsection
@section('scripts')
<script src="{{asset('js/inputmask.js')}}"></script>
<script>
    $(":input").inputmask();

    $("#phone").inputmask({"mask": "+999 99 99 99 99"});
</script>
@endsection

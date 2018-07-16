@extends('layouts.front')
@section('content')
    <main>
        <div class="main-part">
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
                     style="background-image: url('{{asset('images/breadbg1.jpg')}}');">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <h2>ЗАКАЗ ПРИНЯТ</h2>
                        <a href="#">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class="home-icon shop-cart bg-skeen wow fadeInDown" data-wow-duration="1000ms"
                     data-wow-delay="300ms">
                <div class="icon-default icon-skeen">
                    <img src="/images/scroll-arrow.png" alt="">
                </div>
                <div class="container">
                    <br><br><br>
                    <div class="order-complete-box">
                        <img src="/images/complete-sign.png" alt="">
                        <p> Спасибо за заказ в нашем сервисе. Через несколько минут вам позвонят, на указанный вами
                            номер, для подтверждения заказа.</p>
                        <br>
                        <a href="/" class="btn-medium btn-primary-gold btn-large">На главную</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
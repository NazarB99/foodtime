@extends('layouts.front')
@section('content')
    <main>
        <div class="main-part">
            <div class="error-404 banner-bg wow fadeInDown" data-background="{{asset('images/banner1.jpg')}}" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="error-404-inner">
                    <div class="error-404-title">4 <img src="/images/404.png" alt=""> 4</div>
                    <h2>СТРАНИЦА НЕ НАЙДЕНА</h2>
                    <p style="font-family: Ubuntu">Извините такой страницы, которую вы ищете нет
                        <br> Попробуйте вернуться на<a href="/"> главную страницу</a></p>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main -->
@endsection
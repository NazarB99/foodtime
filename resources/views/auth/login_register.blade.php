@extends('layouts.front')

@section('content')
<main>
    <div class="main-part">
        <!-- Start Breadcrumb Part -->
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
                 style="background-image: url('/images/breadbg1.jpg');">
            <div class="container">
                <div class="breadcrumb-inner">
                    <h2>Войти или Зарегистрироваться</h2>
                    <a href="/">Главная</a>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Part -->
        <section class="home-icon login-register bg-skeen">
            <div class="icon-default icon-skeen">
                <img src="/images/scroll-arrow.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms"
                         data-wow-delay="300ms">
                        <form method="POST" action="{{ url('/login') }}">
                            {{csrf_field()}}
                            <div class="login-wrap form-common">
                                <div class="title text-center">
                                    <h3 class="text-coffee">Вход</h3>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="text" name="email" placeholder="Email address"
                                                   class="input-fields" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" name="password" placeholder="********"
                                                   class="input-fields">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                        Forgot Your Password?
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="submit" name="submit" value="ВОЙТИ"
                                                   class="button-default button-default-submit">
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms"
                         data-wow-delay="300ms">
                        <form method="POST" action="{{ url('/register') }}">
                            {{csrf_field()}}
                            <div class="register-wrap form-common">
                                <div class="title text-center">
                                    <h3 class="text-coffee">Регистрация</h3>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input type="text" name="name" placeholder="First Name"
                                                   class="input-fields" autocomplete="off" value="{{old('name')}}" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="email" name="email" placeholder="proverka@gmail.com"
                                                   class="input-fields{{ $errors->has('email') ? ' has-error' : '' }}" value="{{old('email')}}" autocomplete="off" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="phone" name="phone" class="input-fields{{ $errors->has('phone') ? ' has-error' : '' }}"
                                                   autocomplete="off" placeholder="Телефон" required>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" name="password" placeholder="Password"
                                                   class="input-fields" autocomplete="off" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Подтвердить пароль"
                                                   class="input-fields" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="submit" name="submit"
                                                   class="button-default button-default-submit"
                                                   value="Зарегистрироваться сейчас">
                                        </div>
                                    </div>
                                <p>Нажимая зарегистрироваться вы принимаете <a href="#">Правила и
                                        Условия</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
@extends('layouts.app')

@section('header')

    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;"
                     class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                class="fa fa-bars"></i></span>
    <div class="w3-container"
         style="background-image:url('{{asset("image/mountains.jpg")}}'); background-repeat: no-repeat">
        <div style="text-align: right;width: 15px;height: 15px"><img src="{{asset("image/download.png")}}"
                                                                     style="text-align: right"></div>
        <h1 style="text-align: center"><b>نانو فیزیک و فوتونیک</b></h1>
        <h4 style="text-align: center"><b>آزمایشگاه نانو مواد مگنتو اپتیکی</b></h4>
        <div class="w3-section w3-bottombar w3-padding-16" style="text-align: right">
            <a href="{{ url('/lesson') }}"><button class="w3-button w3-white w3-hide-small">درس ها</button></a>
            <a href="{{ url('/laboratory') }}"><button class="w3-button w3-white w3-hide-small">آزمایشگاه</button></a>
            <a href="{{ url('/publication') }}"><button class="w3-button w3-white w3-hide-small">مقالات</button></a>
            <a href="{{ url('/student') }}"><button class="w3-button  w3-black">گروه های دانشجویی</button></a>
            <a href="{{ url('/research') }}"><button class="w3-button w3-white w3-hide-small">سرفصل های تحقیقاتی</button></a>
            <a href="{{ url('/') }}"><button class="w3-button w3-white w3-hide-small">خانه</button></a>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
<br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    ورود
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور را فراموش کردم') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

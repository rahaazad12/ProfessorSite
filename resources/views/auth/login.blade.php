@extends('layouts.app')

@section('header')
    <div style="background-color:#1b4b72">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px;margin-right: 3px  ">
        </div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو
                اپتیکی</b></h3></div>
    <div
            style="background-image:url('{{asset("image/student.png")}}') ;background-size: cover;
                    background-repeat: no-repeat;width:100%;height:45%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a class="active" href="{{ url('/student') }}">گروه های دانشجویی</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>


@endsection

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
            <div class="panel panel-default panel-border">
                <div class="panel-heading" style="text-align: center">عضویت دانشجو</div>
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
<br>
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
                        <br>

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
                            <div class="col-md-8 offset-md-4" style="margin-right: 50%">
                                <button type="submit" class="btn btn-success">
                                    ورود
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور را فراموش کردم') }}
                                    </a>
                                @endif
                            </div>
                        <br>
                        </div>
                    <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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
            <a href="{{ url('/lesson') }}">
                <button class="w3-button w3-white w3-hide-small">درس ها</button>
            </a>
            <a href="{{ url('/laboratory') }}">
                <button class="w3-button w3-white w3-hide-small">آزمایشگاه</button>
            </a>
            <a href="{{ url('/publication') }}">
                <button class="w3-button w3-white w3-hide-small">مقالات</button>
            </a>
            <a href="{{ url('/student') }}">
                <button class="w3-button  w3-black">گروه های دانشجویی</button>
            </a>
            <a href="{{ url('/research') }}">
                <button class="w3-button w3-white w3-hide-small">سرفصل های تحقیقاتی</button>
            </a>
            <a href="{{ url('/') }}">
                <button class="w3-button w3-white w3-hide-small">خانه</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <a href="{{url('/register')}}">
                        <button type="submit" class="btn btn-success" style="width:40%" name="submit" value="login">
                            عضویت دانشجو
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <a href="{{url('/student_research')}}">
                        <button type="submit" class="btn btn-success" style="width:40%" name="submit" value="register">
                            ثبت پژوهش جدید
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading" style="text-align: center">عضویت دانشجو</div>
                    <br>
                    <div class="card-body">
                        @include('errors')
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                           value="{{ old('first_name') }}" required autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                           value="{{ old('last_name') }}" required>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('شماره دانشجویی') }}</label>

                                <div class="col-md-6">
                                    <input id="student_number" type="text"
                                           class="form-control @error('student_number') is-invalid @enderror" name="student_number"
                                           value="{{ old('student_number') }}" required>

                                    @error('student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grade"
                                       class="col-md-4 col-form-label text-md-right">{{ __('مقطع دانشگاهی') }}</label>

                                <div class="col-md-6">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade" value="doctora">
                                        دکتری
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade" value="arshad">
                                        کارشناسی ارشد
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade" value="lisans">
                                        کارشناسی
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-right">{{ __('عکس دانشجو') }}</label>

                                <div class="col-md-6">
                                    <input type="file" id="image"
                                           name="image">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ثبت') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

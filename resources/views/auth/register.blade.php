@extends('layouts.app')

@section('header')
    <div style="background-color:#1b4b72 ">
        <div style="text-align: right;width:20px;height:20px">
            <img src="{{asset("image/Logo.png")}}" style="text-align: right;width:120px;height:110px">
        </div>
        <h1 style="text-align: center;color: whitesmoke">
            <b>نانو فیزیک و فوتونیک</b>
        </h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke">
            <b>آزمایشگاه نانو مواد مگنتو اپتیکی</b>
        </h3>
    </div>
    <div
            style="background-image:url('{{asset("image/student.png")}}') ; background-size: cover;
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
    <div class="container">

        <br><br><br><br><br>
        {{--<div class="row">--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="form-group">--}}
        {{--<a href="{{url('/register')}}">--}}
        {{--<button type="submit" class="btn btn-success" style="width:40%;margin-right: 80%" name="submit" value="login">--}}
        {{--عضویت دانشجو--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="form-group">--}}
        {{--<a href="{{url('/student_research')}}">--}}
        {{--<button type="submit" class="btn btn-success" style="width:40%;margin-right:90%" name="submit" value="register">--}}
        {{--ثبت پژوهش جدید--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

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
                                <label for="first_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name"
                                           value="{{ old('first_name') }}" required autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="last_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name"
                                           value="{{ old('last_name') }}" required>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="student_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('شماره دانشجویی') }}</label>

                                <div class="col-md-6">
                                    <input id="student_number" type="text"
                                           class="form-control @error('student_number') is-invalid @enderror"
                                           name="student_number"
                                           value="{{ old('student_number') }}" required>

                                    @error('student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="grade"
                                       class="col-md-4 col-form-label text-md-right">{{ __('مقطع دانشگاهی') }}</label>
                                <div class="col-md-6">
                                    <label class="checkbox-inline" style="margin-left: 3px">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade"
                                               value="lisans">
                                        کارشناسی
                                    </label>
                                    <label class="checkbox-inline" style="margin-right: 2px">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade"
                                               value="arshad">
                                        کارشناسی ارشد
                                    </label>
                                    <label class="checkbox-inline" style="margin-right: 2px">
                                        <input type="radio" class="checkbox-inline" id="grade" name="grade"
                                               value="doctora">
                                        دکتری
                                    </label>


                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-right">{{ __('عکس دانشجو') }}</label>

                                <div class="col-md-6">
                                    <input type="file" id="image"
                                           name="image">

                                </div>
                            </div>
                            <br>

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
                            <br>

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
                            <br>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <br>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4" style="margin-right: 50%">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('ثبت') }}
                                    </button>
                                </div>
                            </div>
                            <br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

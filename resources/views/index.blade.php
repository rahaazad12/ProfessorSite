@extends('layouts.app');
@section('header')
    <div style="background-color:#1b4b72 ">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px"></div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو اپتیکی</b></h3></div>
    <div
         style="background-image:url('{{asset("image/BG4.jpg")}}') ; background-repeat: no-repeat;width:100%;height:45%" >
    </div>

    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a class="active" href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">گروه های دانشجویی</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>

@endsection

@section('content')

    <h1 style="text-align: center">محل بیوگرافی استاد</h1>

    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>

@endsection

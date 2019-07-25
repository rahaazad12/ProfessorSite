@extends('layouts.app');

@section('header')
    <div style="background-color:#1b4b72">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px;margin-right: 3px  ">
        </div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو
                اپتیکی</b></h3></div>
    <div
            style="background-image:url('{{asset("image/lesson.jpg")}}') ; background-repeat: no-repeat;width:100%;height:45%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">گروه های دانشجویی</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a  href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a class="active" href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>


@endsection

@section('content')
    <!-- First Photo Grid-->
    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
        <div class="w3-third w3-container">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
        <div class="w3-third w3-container">
            <img src="{{asset("/image/mountains.jpg")}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Lorem Ipsum</b></p>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="#" class="w3-bar-item w3-black w3-button">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
    </div>

    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>
@endsection
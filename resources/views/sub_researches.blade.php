@extends('layouts.app');
@section('header')
    <div style="background-color:#1b4b72">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px;margin-right: 3px">
        </div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو
                اپتیکی</b></h3></div>
    <div class="w3-container"
         style="background-image:url('{{asset("image/research.png")}}') ;background-size: cover;
                 background-repeat: no-repeat;width:100%;height:45%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a class="active" href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">دانشجویان</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>
@endsection

@section('content')
    <div class="row" style="width:90%;margin-right:50px;margin-top: 50px">
        @foreach($sub_researches as $research_head)
            <div style="border: black; border-style: solid; margin-top: 10px; width: 100%; padding: 10px">
                <div style="width:100%;border: black; text-align: center">
                    <h3><b>
                            {{$research_head['name']}}
                        </b></h3>
                </div>
                <div style="text-align: center">
                    <a href="{{ $research_head['image'] }}">
                        <img src="{{ $research_head['image'] }}" style="width:50%"></a>

                </div>
                <div style="width:100%;border: black">
                    <p>
                        {{$research_head['exp']}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>
@endsection


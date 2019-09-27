@extends('layouts.app')

@section('header')

    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;"
                     class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                class="fa fa-bars"></i></span>
    <div class="w3-container"
         style="background-image:url('{{asset("image/mountains.jpg")}}');background-size: cover;
                 background-repeat: no-repeat">
        <div style="text-align: right;width: 15px;height: 15px"><img src="{{asset("image/download.png")}}"
                                                                     style="text-align: right"></div>
        <h1 style="text-align: center"><b>نانو فیزیک و فوتونیک</b></h1>
        <h4 style="text-align: center"><b>آزمایشگاه نانو مواد مگنتو اپتیکی</b></h4>
        <div class="w3-section w3-bottombar w3-padding-16" style="text-align: right">
            <a href="{{ url('/lesson') }}"><button class="w3-button w3-white w3-hide-small">درس ها</button></a>
            <a href="{{ url('/laboratory') }}"><button class="w3-button w3-white w3-hide-small">آزمایشگاه</button></a>
            <a href="{{ url('/publication') }}"><button class="w3-button w3-white w3-hide-small">مقالات</button></a>
            <a href="{{ url('/student') }}"><button class="w3-button  w3-white w3-hide-small">گروه های دانشجویی</button></a>
            <a href="{{ url('/research_header') }}"><button class="w3-button w3-white w3-hide-small">سرفصل های تحقیقاتی</button></a>
            <a href="{{ url('/homes') }}"><button class="w3-button w3-black">خانه</button></a>
        </div>
    </div>
@endsection


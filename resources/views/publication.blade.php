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
            style="background-image:url('{{asset("image/publication.png")}}') ;background-size: cover;
                    background-repeat: no-repeat;width:100%;height:45%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">دانشجویان</a></li>
            <li><a class="active" href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>


@endsection

@section('content')
    @foreach($publications as $key => $publications_type)
        <div class="panel-heading" style="text-align: left;">
            @if($key == 'publication')
                <h3>مقالات و تحقیقات پژوهشی</h3>
            @endif
            @if($key == 'confrance')
                <h3>کنفرانس ها</h3>
            @endif
        </div>
        @foreach($publications_type as $publications)
            @php $i = 1; @endphp
            <div style="text-align: left;margin-left:10px">
                <p>
                    @php $i++; @endphp
                    <a href="{{ $publications['link'] }}">{{ $publications['name'] }}</a>
                    {{ $publications['years'] }}
                    <br>
                </p>
            </div>
        @endforeach
    @endforeach
    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>
@endsection
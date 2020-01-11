@extends('layouts.app')

@section('header')
    <div style="background-color:#1b4b72 ">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px">
        </div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو
                اپتیکی</b></h3></div>
    <div
            style="background-image:url('{{asset("image/studnt.png")}}') ;background-size: cover;
                    background-repeat: no-repeat;width:100%;height:65%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a class="active" href="{{ url('/student') }}">دانشجویان</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <br>
    <div class="panel-body" style="text-align: center">
        @include('errors')

        <div class="row" style="width:30%;margin-right:50px;margin-top: 50px;border: black">
            @foreach($researches as $research)
                <div class="container-fluid" style="text-align: -webkit-center">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel panel-default panel-border">
                            <div class="panel-heading">{{$research['name']}}</div>
                            <div class="panel-body" style="text-align: center">
                                <div>
                                    <img src="{{ $research['poster'] }}" height="50%" width="50%"><br><br>
                                    <a href="{{$research->pdf}}"
                                       class="btn btn-info" title="دانلود فایل پی دی اف" style="margin-left: 18px">
                                        <span class="glyphicon glyphicon-save-file"></span>
                                    </a>
                                    <a href="{{$research->ppt}}"
                                       class="btn btn-info" title="دانلود فایل پاورپوینت">
                                        <span class="glyphicon glyphicon-save-file"></span>
                                    </a>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
    </div>

@endsection

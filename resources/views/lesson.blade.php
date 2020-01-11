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
            style="background-image:url('{{asset("image/lesson.jpg")}}') ;background-size: cover;
                    background-repeat: no-repeat;width:100%;height:65%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">دانشجویان</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a class="active" href="{{ url('/lesson') }}">درس ها</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" style="width:60%;margin-right:20%">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">درس ها</div>
                <div class="panel-body" style="text-align: center">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th width="50%"> نام درس</th>
                            <th>امکانات</th>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td style="width:20%">
                                    {{ $lesson ['name'] }}
                                </td>

                                <td>
                                    <a href="{{ $lesson['sample'] }}"> نمونه سوال امتحانی</a>
                                    <br>
                                    <a href="{{ $lesson['ppt'] }}"> پاورپوینت درس</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>
@endsection
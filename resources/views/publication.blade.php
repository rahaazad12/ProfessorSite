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
            style="background-image:url('{{asset("image/publication.png")}}') ; background-repeat: no-repeat;width:100%;height:45%">
    </div>
    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a href="{{ url('/student') }}">گروه های دانشجویی</a></li>
            <li><a class="active" href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>


@endsection

@section('content')

    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="panel-body" style="padding: 10px">
                    @foreach($publications as $key1 => $publications_type)
                        @foreach($publications as $key2 => $publications_years)
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-border">
                                <div class="panel-heading">
                                    @if($key1 == 'publication')
                                        مقالات
                                    @endif
                                    @if($key1 == 'activation')
                                        تحقیقات پژوهشی
                                    @endif
                                    @if($key1 == 'confrance')
                                        کنفرانس ها
                                    @endif
                                </div>
                                <table class="table table-bordered table-responsive">
                                    @foreach($publications_type as $publications)
                                        @foreach($publications_years as $publications)
                                        <tr>
                                            <th>
                                                {{ $publications['name'] }}
                                                <br>
                                            </th>
                                        </tr>
                                    @endforeach
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endforeach
                        @endforeach
                </div>
            </div>
@endsection
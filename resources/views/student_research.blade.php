@extends('layouts.app')

@section('header')
    <div style="background-color:#1b4b72 ">
        <div style="text-align: right;width:20px;height:20px"><img src="{{asset("image/Logo.png")}}"
                                                                   style="text-align: right;width:120px;height:110px"></div>
        <h1 style="text-align: center;color: whitesmoke"><b>نانو فیزیک و فوتونیک</b></h1>
        <h3 style="text-align: center;margin-bottom:0;margin-top: 2px;color: whitesmoke"><b>آزمایشگاه نانو مواد مگنتو اپتیکی</b></h3></div>
    <div
            style="background-image:url('{{asset("image/studnt.png")}}') ; background-repeat: no-repeat;width:100%;height:45%" >
    </div>

    @include('layouts.navebar')
    <div style="text-align: right;margin-bottom:10px">
        <ul>
            <li><a  href="{{ url('/') }}">خانه</a></li>
            <li><a href="{{ url('/research') }}">سرفصل های تحقیقاتی</a></li>
            <li><a class="active" href="{{ url('/student') }}">گروه های دانشجویی</a></li>
            <li><a href="{{ url('/publication') }}">مقالات</a></li>
            <li><a href="{{ url('/laboratory') }}">آزمایشگاه</a></li>
            <li><a href="{{ url('/lesson') }}">درس ها</a></li>

        </ul>
    </div>

@endsection

@section('content')

    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">پژوهش های دانشجویی</div>
                <div class="panel-body" style="text-align: center">
                    <table id="mytable" class="table table-bordered table-responsive">
                        <tr>
                            <th>پی دی اف</th>
                            <th>پاورپوینت</th>
                            <th>پوستر</th>
                            <th> نام پژوهش</th>

                        </tr>
                        {{--@foreach($student_researches as $student_research)--}}
                            {{--<tr>--}}
                                {{--<td>{{$lesson->name}}</td>--}}
                                {{--<td>--}}
                                    {{--<a class="btn btn-danger"--}}
                                       {{--href="{{url('admin/lesson/'.$lesson->id.'/delete')}}">--}}
                                        {{--<span class="glyphicon glyphicon-remove"></span>--}}
                                    {{--</a>--}}
                                    {{--<a class="btn btn-info" href="{{url('admin/lesson/'.$lesson->id)}}">--}}
                                        {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                                    {{--</a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    </table>
                    <a class="btn btn-info" href="{{url('add_student_research')}}">
                        افزودن پژوهش
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

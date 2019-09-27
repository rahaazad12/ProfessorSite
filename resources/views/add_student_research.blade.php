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
        <br>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading" style="text-align: center">ثبت پژوهش جدید</div>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/add_student_research') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام پژوهش') }}</label>

                                <div class="col-md-6">

                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="poster"
                                       class="col-md-4 col-form-label text-md-right">{{ __('پوستر') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="poster" name="poster">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="pdf"
                                       class="col-md-4 col-form-label text-md-right">{{ __('فایل پی دی اف ') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="pdf" name="pdf"
                                               value="{{old('file')}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('فایل پاورپوینت ') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="ppt" name="ppt"
                                               value="{{old('file')}}">
                                    </div>
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
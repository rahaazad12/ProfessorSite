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
            style="background-image:url('{{asset("image/student.png")}}') ;  background-size: cover;
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
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/register')}}">
                        <button type="submit" class="btn btn-success"
                                style="width:30%;margin-right: 80%;margin-left:80%" name="submit"
                                value="login">
                            عضویت دانشجو
                        </button>
                    </a>
                @else
                    <form action="{{url('/logout')}}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success" style="width:40%;margin-right: 80%" name="submit"
                                value="login">
                            خروج
                        </button>
                    </form>

                @endif

            </div>
        </div>
        <div class="col-6 col-md-1" style="margin-right:30px">
            <div class="form-group">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/login')}}">
                        <button type="submit" class="btn btn-success" style="width:150%;margin-right:100px"
                                name="submit" value="register">
                            ورود دانشجو
                        </button>
                    </a>
                @else
                    <a href="{{url('/student_researches')}}">
                        <button type="submit" class="btn btn-success" style="width:200%;margin-right:500%" name="submit"
                                value="register">
                            مدیریت مقالات
                        </button>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body" style="padding: 10px">
                    @foreach($students as $key => $students_grade)
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-border">
                                <div class="panel-heading">
                                    دانشجویان مقطع
                                    @if($key == 'doctora')
                                        دکتری
                                    @endif
                                    @if($key == 'arshad')
                                        کارشناسی ارشد
                                    @endif
                                    @if($key == 'lisans')
                                        کارشناسی
                                    @endif
                                </div>
                                <table class="table table-bordered table-responsive">
                                    @foreach($students_grade as $student)
                                        <tr>

                                            </th>
                                            <th style="width:30%"><a href="{{ $student['image'] }}">
                                                    <img src="{{ $student['image'] }}" height="100px"></a>
                                            </th>

                                            <th>
                                                {{ $student['first_name'] }}
                                                {{ $student['last_name'] }}
                                                <br><br>
                                                {{ $student->user['email'] }}
                                            </th>
                                            <th style="width:30%">
                                                <a href="{{url('student/'.$student->id.'/researches')}}">تحقیقات</a>
                                            </th>
                                        </tr>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <p>Powered by shspanol12@gmail.com</p>
    </div>
@endsection
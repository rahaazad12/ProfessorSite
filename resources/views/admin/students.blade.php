@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid" style="text-align: -webkit-center">
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
                                    <th width="20%">
                                        <a href="{{ $student['image'] }}">
                                        <img src="{{ $student['image'] }}" height="80%"width="90%"></a></th>

                                    <th width="30%">
                                        {{ $student['first_name'] }}
                                        {{ $student['last_name'] }}
                                        <br>
                                        {{ $student['email'] }}
                                        ایمیل
                                    </th>
                                    <th width="30%">
                                        <a href="{{url('student/'.$student->id.'/researches')}}">تحقیقات</a>

                                    </th>
                                    <th width="10%">
                                        @if(!$student['valid'])
                                            تایید نشده
                                        @endif
                                        @if($student['valid'])
                                            تایید شده
                                        @endif
                                    </th>
                                    <th width="5%">
                                        @if(!$student['valid'])
                                            <a href="{{ url('admin/student/'. $student{'id'}.'/verify') }}">تایید</a>
                                        @endif
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
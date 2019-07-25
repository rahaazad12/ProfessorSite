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
                                    <th>
                                        {{ $student['first_name'] }}
                                        {{ $student['last_name'] }}
                                        <br>
                                        {{ $student['email'] }}
                                        ایمیل
                                    </th>
                                    <th><img src="{{ $student['image'] }}" height="100px"></th>
                                    <th></th>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
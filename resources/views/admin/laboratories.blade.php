@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">آزمایش ها</div>
                <div class="panel-body" style="text-align: center">
                    <table id="mytable" class="table table-bordered table-responsive">
                        <tr>
                            <th> نام آزمایش</th>
                            <th>امکانات</th>
                        </tr>
                        @foreach($laboratories as $laboratory)
                            <tr>
                                <td>{{$laboratory->name}}</td>
                                <td>
                                    <a class="btn btn-danger"
                                       href="{{url('admin/$laboratories/'.$laboratory->id.'/delete')}}">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                    <a class="btn btn-info" href="{{url('admin/$laboratories/'.$laboratory->id)}}">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a class="btn btn-info" href="{{url('admin/add_laboratory')}}">
                        افزودن آزمایش
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
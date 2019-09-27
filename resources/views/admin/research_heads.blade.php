@extends('admin.layouts.app')

@section('content')
    <br>
    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">سرفصل های تحقیقاتی</div>
                <div class="panel-body" style="text-align: center">
                    <table id="mytable" class="table table-bordered table-responsive">
                        <tr>
                            <th style="width: 50%"> نام سرفصل تحقیقاتی </th>
                            <th>امکانات</th>
                        </tr>
                        @foreach($research_heads as $research_head)
                            <tr>
                                <td>{{$research_head->name}}</td>
                                <td>
                                    <a class="btn btn-danger"
                                       href="{{url('admin/research_head/'.$research_head->id.'/delete')}}">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                    <a class="btn btn-info" href="{{url('admin/research_head/'.$research_head->id)}}">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a  class="btn btn-success"
                                        href="{{url('admin/research_head/' . $research_head->id . '/add_sub_research')}}">
                                        مدیریت سرفصل های تحقیقاتی
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a class="btn btn-success" href="{{url('admin/add_research_head')}}">
                        افزودن سرفصل تحقیقاتی
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
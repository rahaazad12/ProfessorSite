@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid" style="text-align: -webkit-center">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">
                    مقالات</div>
                <div class="panel-body">
                    <table id="mytable" class="table table-bordered table-responsive">
                        <tr>
                            <th> نام پژوهش</th>
                            <th>نوع پژوهش</th>
                            <th>سال انتشار</th>
                            <th>امکانات</th>
                        </tr>
                        @foreach($publications as $publication)
                            <tr>
                                <td>{{$publication->name}}</td>
                                <td>
                                    @if($publication-> type == 'publication')
                                        مقاله
                                    @endif
                                        @if($publication-> type == 'activation')
                                         پژوهش
                                    @endif
                                        @if($publication-> type == 'confrance')
                                        کنفرانس
                                    @endif
                                </td>
                                <td>{{$publication->years}}</td>

                                <td>
                                    <a class="btn btn-danger"
                                       href="{{url('admin/publications/'.$publication->id.'/delete')}}">
                                        <span class="glyphicon glyphicon-remove" ></span>
                                    </a>
                                    <a class="btn btn-info" href="{{url('admin/publication/'.$publication->id)}}">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a class="btn btn-success" href="{{url('admin/add_publication')}}">
                        افزودن مقاله
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
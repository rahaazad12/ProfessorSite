@extends('admin.layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">افزودن سرفصل تحقیقاتی </div>
                <div class="panel-body">
                    {{--<div style="text-align: left;margin-bottom: 10px">--}}
                    {{--<a href="{{url()->previous()}}" class="btn btn-danger">بازگشت</a>--}}
                    {{--</div>--}}
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/research_head/'. $research_head->id . '/add_sub_research') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام سرفصل تحقیقاتی</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exp"> توضیح سرفصل تحقیقاتی </label>
                            <div class="col-md-6">
                                <input id="exp" type="text" class="form-control" name="exp" value="{{ old('exp') }}"
                                       required autocomplete="exp" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="image">عکس سرفصل تحقیقاتی</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                           value="{{old('file')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6" style="margin-right: 25%">
                                <input type="submit" class="btn btn-success" style="margin-right: 50%" name="submit" value="ثبت">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.layouts.app')

@section('content')
    <br><br>
    <br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading"> ویرایش  سرفصل تحقیقاتی </div>
                {{--<div style="text-align: left;margin-bottom: 10px">--}}
                {{--<a href="{{url()->previous()}}" class="btn btn-danger" style="margin-top: 10px;margin-left: 10px">بازگشت</a>--}}
                {{--</div>--}}
                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/sub_research_head/'.$sub_research_head->id) }}"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام سرفصل تحقیقاتی</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ $sub_research_head->name }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exp"> توضیح سرفصل تحقیقاتی </label>
                            <div class="col-md-6">
                                <input id="exp" type="text" class="form-control" name="exp"
                                       value="{{ $sub_research_head->exp }}" required autocomplete="exp" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="image">عکس سرفصل تحقیقاتی</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                           value="{{old('image')}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6" style="margin-right: 25%">
                                <input type="submit" class="btn btn-success full-width" name="submit" value="ثبت">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
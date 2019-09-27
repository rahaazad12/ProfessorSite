@extends('admin.layouts.app')

@section('content')
    <br><br>
    <br>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
                <div class="panel panel-default panel-border">
                <div class="panel-heading">افزودن مقاله </div>
                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/add_publication') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام پژوهش</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="writers">نام نویسندگان</label>
                            <div class="col-md-6">
                                <input id="writers" type="text" class="form-control" name="writers"
                                       value="{{ old('writers') }}" required autocomplete="writers" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="details">مشخصات مقاله</label>
                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control" name="details"
                                       value="{{ old('details') }}" required autocomplete="details" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="type">نوع پژوهش</label>

                            <div class="col-md-6">
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="type" name="type" value="publication">
                                    مقاله
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="type" name="type" value="activation">
                                    پژوهش
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="type" name="type" value="confrance">
                                    کنفرانس
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="link">لینک </label>
                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" value="{{ old('link') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="years">سال انتشار</label>
                            <div class="col-md-6">
                                <input id="years" type="number" class="form-control" name="years" value="{{ old('years') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="pdf">فایل مقاله </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="pdf" name="pdf"
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
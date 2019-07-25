@extends('admin.layouts.app')

@section('content')
    <br><br>
    <br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">افزودن مقاله </div>
                <div style="text-align: left;margin-bottom: 10px">
                    <a href="{{url()->previous()}}" class="btn btn-danger" style="margin-left: 4px;margin-top: 6px">بازگشت</a>
                </div>
                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/add_publication') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام پژوهش</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="type">نوع پژوهش</label>

                            <div class="col-md-6">
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="grade" name="type" value="publication">
                                    مقاله
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="grade" name="type" value="activation">
                                    پژوهش
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" class="checkbox-inline" id="grade" name="type" value="confrance">
                                    کنفرانس
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="link">لینک </label>
                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="years">سال انتشار</label>
                            <div class="col-md-6">
                                <input id="years" type="text" class="form-control @error('years') is-invalid @enderror" name="years" value="{{ old('years') }}" required autocomplete="name" autofocus>

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
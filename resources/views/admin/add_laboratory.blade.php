@extends('admin.layouts.app')

@section('content')
    <br><br>
    <br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">افزودن آزمایش </div>
                <div class="panel-body">
                    <div style="text-align: left;margin-bottom: 10px">
                        <a href="{{url()->previous()}}" class="btn btn-danger">بازگشت</a>
                    </div>
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/add_laboratory') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام آزمایش</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="image">عکس آزمایش</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                           value="{{old('file')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="explanation"> توضیح آزمایش </label>
                            <div class="col-md-6">
                                <input id="explanation" type="text" class="form-control" name="explanation" value="{{ old('explanation') }}"
                                       required autocomplete="explanation" autofocus>
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
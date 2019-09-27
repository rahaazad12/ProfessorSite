@extends('admin.layouts.app')

@section('content')
    <br><br>
    <br>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default panel-border">
                <div class="panel-heading">افزودن درس</div>
                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/add_lesson') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">نام درس</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="sample">فایل نمونه سوال</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="sample" name="sample"
                                           value="{{old('file')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="ppt">پاورپوینت </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="ppt" type="file" class="form-control" name="ppt"
                                           value="{{ old('ppt') }}">
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
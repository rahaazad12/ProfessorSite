@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
        <div class="panel panel-default panel-border">
            <div class="panel-heading">خانه </div>
            <div class="panel-body">
                @include('errors')
                <form method="POST" class="form-horizontal" role="form" action="{{ url('admin/home') }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="bu1">رزومه </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="file" class="form-control" id="bu1" name="bu1_path"
                                       value="{{old('file')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="bu2">مقالات ارجاع داده شده</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="file" class="form-control" id="bu2" name="bu2_path"
                                       value="{{old('file')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="bu">بیوگرافی </label>
                        <div class="col-md-6">
                            <textarea id="editor" name="bu" >
                                @if($home != null)
                                    {{$home['bu']}}
                                @endif


                            </textarea>
                            {{--<script>--}}
                                {{--var editor = new Simditor({--}}
                                    {{--textarea: $('#editor')--}}
                                    {{--//optional options--}}
                                {{--});--}}
                            {{--</script>--}}
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
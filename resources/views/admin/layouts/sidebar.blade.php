<br>
<center>
    <h2 style="color: #FD850B;margin-right:10px">آزمایشگاه نانو مواد مگنتو اپپتیکی</h2>
</center>
<br>
<ul>
    {{--@if(Auth::check())--}}
    {{--@if(Entrust::hasRole('admin'))--}}
    <li><a href="{{ url('admin/home') }}" style="margin-right:10px">خانه</a></li>
    <li><a href="{{ url('admin/research_head') }}" style="margin-right:10px">سرفصل های تحقیقاتی</a></li>
    <li><a href=" {{ url('admin/students') }}" style="margin-right:10px">دانشجویان</a></li>
    <li><a href="{{url('admin/publications')}}" style="margin-right:10px">مقالات</a></li>
    <li><a href="{{url('admin/lessons')}}" style="margin-right:10px">درس ها</a></li>
    <li><a href="{{url('admin/laboratories')}}" style="margin-right:10px">آزمایش ها</a></li>
    {{--@endif--}}
    {{--@else--}}
</ul>
<script>
    function sidebar_hide() {
        $('.sidebar-right').css('display', 'none');
        $('.body').css('margin-right', '0px');
        $('#btn-show-sidebar').css('display', 'inherit')
    }

    function sidebar_show() {
        $('.sidebar-right').css('display', 'inherit');
        $('.body').css('margin-right', '230px');
        $('#btn-show-sidebar').css('display', 'none')
    }
</script>
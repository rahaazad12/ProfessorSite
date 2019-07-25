<!doctype html>
<html dir="rtl">
<head>
    @include('admin.layouts.header')
</head>
<body>
<div class="main-container">
    <div class="sidebar-right hidden-print" style="overflow: auto;">
        @include('admin.layouts.sidebar')
    </div>
    <div class="content">
        <button id="btn-show-sidebar" class="btn btn-xs" onclick="sidebar_show()"
                style="position: absolute;right: 5px; color: #00d6b2; display: none">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </button>
        <div class="body">
            @yield('content')
        </div>
    </div>
</div>
@stack('scripts-bottom')
</body>
</html>
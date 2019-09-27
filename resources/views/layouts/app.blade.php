<!doctype html>
<html dir="rtl" lang="fa">
<head>
    @include('layouts.header')
</head>
<body>
<div class="main-container">
    <div class="sidebar-right hidden-print" style="overflow: auto;">
        @include('layouts.sidebar')
    </div>
    <div class="content">
        <button id="btn-show-sidebar" class="btn btn-xs" onclick="sidebar_show()"
                style="position: absolute;right: 5px; color: #00d6b2; display: none">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </button>
        <div style="margin-right:230px">

            <!-- Header -->
            <header style="height: 500px">
                @yield('header')
            </header>

        @yield('content')

        <!-- Footer -->


        </div>
    </div>
</div>
@stack('scripts-bottom')
<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
@stack('scripts-bottom')
</body>
</html>
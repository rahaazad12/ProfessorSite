<meta charset="utf-8"/>
<meta name='robots' content='noindex,nofollow'/>
<meta name='googlebot' content='noindex,nofollow'/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>@yield('page_title') آزمایشگاه</title>

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/IRANSansWeb.font.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/tablesorter_style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/PersianDatePicker.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/angular-material.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/loading-bar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}"/>
<script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/chain.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.tablesorter.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.tablesorter.pager.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/PersianDatePicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/angular-animate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/angular-aria.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/angular-material.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/loading-bar.js') }}"></script>
<script type="text/javascript" src={{asset("js/Chart.js")}}></script>

<script>
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
         no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
             first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                 one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                 based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                 and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                 set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>

<style>
    .dot {
        height: 12px;
        width: 12px;
        border: 1.5px solid #000000;
        border-radius: 50%;
        display: inline-flex;
    }
</style>

@stack('scripts-top')
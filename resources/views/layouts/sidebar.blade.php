<nav style="z-index:3;width:200px;"><br>
    <div >
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
           title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <img src="{{asset("image/ProfessorImage.jpg")}}" style="width:80%;margin-right:30px"><br><br>
    </div>
    <div >
        <p style="text-align: right;margin-right:10px"> دکتر نرگس انصاری</p>
        <p style="text-align: right;margin-right:10px">عضو هیات علمی دانشگاه الزهرا</p>
        <p style="text-align: right;margin-right:10px">استادیار گروه فیزیک</p>

        <br>
        <p style="text-align: right;margin-right:10px">  پروفایل دکتر نرگس انصاری: </p>
        <a href="http://staff.alzahra.ac.ir/ansari/%D8%B5%D9%81%D8%AD%D9%87%D9%86%D8%AE%D8%B3%D8%AA/tabid/3321/Default.aspx">
            <p style="text-align: right;margin-right:6px">
                دانشگاه الزهرا
            </p></a>

        <a href="https://www.scopus.com/authid/detail.uri?authorId=37074063700"><p
                    style="text-align: right;margin-right:10px">
                اسکاپوس
            </p></a>

        <a href="https://scholar.google.com/citations?hl=en&user=v39EKuIAAAAJ&view_op=list_works&sortby=pubdate"><p
                    style="text-align: right;margin-right:10px">
                گوگل اسکلار
            </p></a>

        <a href="https://orcid.org/0000-0002-1050-7505"><p style="text-align: right;margin-right:10px">
                ارکید
            </p></a>
        <br>
        <div>

            <p style="text-align: right;margin-right:10px">
                آدرس: تهران، خیابان ده ونک،
                <br>
                دانشگاه الزهرا، دانشکده فیزیک

            </p>
            <p style="text-align: right;margin-right:10px">n.ansari@alzahra.ac.ir</p>
            <p style="text-align: right;margin-right:10px">تلفن: 85692632-021 </p>
        </div>
        <div>

        </div>
    </div>
</nav>

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
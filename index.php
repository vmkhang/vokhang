<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Website of Vo Minh Khang</title>
    <link type="text/css" rel="stylesheet" href="stylecss_vmk/mycss.css" />
    <script src="js_vmk/jquery-3.6.4.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            // alert("JQ Da Chay Roi!");
            $("p").mouseenter(function() {
                $(this).css("color", "#00FF00");
            });
            $("p").mouseleave(function() {
                $(this).css("color", "#000066");
            });
            $(".cls01").mouseenter(function() {
                $(this).css("color", "FF0000");
            });;
            $(".cls01").mouseenter(function() {
                $(this).css("color", "0000FF");
            });
            $("#id01").mouseenter(function() {
                $(this).css("color", "#AA00BB");
                $(this).css("font-weight", "bold");
            });
            $("#id01").mouseleave(function() {
                $(this).css("color", "#BB0000");
                $(this).css("font-weight", "normal");
            });
            $(".itmOrder").hide();
            $(".cateOrder").click(function(){
                $(this).slideUp();
            });
            $("itemOrder").mouseleave(function(){
                $(this).slideUp();
            });
            $(".imgCls").mouseover(function(){
                var s = $(this).attr('src');
                // alert(s);
                $("#imgView").attr('src',s);
            });
            var s = $("#DivList").children();
            var l = s.length;
            var i = 0;
            setInterval(function(){
                if (i === 1 )
                    i = 0;
                var p = $(s[i]).attr('src');
                $("#ingView").attr('src',p);
                i++;    
            },3000);
            $('#formreg').submit(function() {
                var username = $("input[name*='username']").val()
                if (username.length === 0 || username.length < 6) {
                    $("input[name*='username']").focus()
                    $("#noteForm").html("Username chưa hợp lệ!")
                    return false;
                }

                var password = $("input[name*='password']").val()
                if (password.length === 0 || password.length < 6) {
                    $("input[name*='password']").focus()
                    $("#noteForm").html("Password chưa hợp lệ!")
                    return false;
                }

                var hoten = $("input[name*='hoten']").val()
                if (hoten.length === 0 || hoten.length < 6) {
                    $("input[name*='hoten']").focus()
                    $("#noteForm").html("Họ tên chưa hợp lệ!")
                    return false;
                }

                var ngaysinh = $("input[name*='ngaysinh']").val()
                if (ngaysinh.length === 0) {
                    $("input[name*='username']").focus()
                    $("#noteForm").html("Ngày sinh chưa hợp lệ!")
                    return false;
                }

                var diachi = $("input[name*='diachi']").val()
                if (diachi.length === 0) {
                    $("input[name*='diachi']").focus()
                    $("#noteForm").html("Địa chỉ chưa hợp lệ!")
                    return false;
                }

                var dienthoai = $("input[name*='dienthoai']").val()
                if (dienthoai.length == 0 || dienthoai.length < 6) {
                    $("input[name*='dienthoai']").focus()
                    $("#noteForm").html("Điện thoại chưa hợp lệ!")
                    return false;
                }
                return true;
            });







        });
    </script>

<body>
    <div id="top_div"></div>
    <div id="left_div"> <?php require './element_vmk/left.php'; ?>
    </div>
    <div id="center_div">
        <?php 
            //require './pageJS/exjs01.php'; 
        // require './pageJS/exjs02.php';
       // require './pageJS/exjs03.php';
           require './element_vmk/mUser/userView.php';
       //require './element_vmk/mUser/center.php';
       require './element_vmk/mUser/mod/userCls.php';
        ?>
    </div>
    <div id="right_div"></div>
    <div id="bottom_div"></div>
</body>

</html>
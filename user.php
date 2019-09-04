<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<form method="post" >
    <h1>Đăng ký</h1>
    <table class="container">
        <label>Tên đăng nhập</label>
        <input type="text" class="form-control" name="user" id="user">
        <div class="error_name">
        </div>
        <label>Mật khẩu</label>
        <input type="password" class="form-control" name="password" id="password">
        <label>Nhập lại mật khẩu</label>
        <input type="password" class="form-control" name="passwordAG" id="passwordAG">
        <div class="error">
        </div>
        <input type="submit" class="btn btn-success" value="Đăng ký" id="submitform">
    </table>
</form>
<?php
//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    $name = $_POST['user'];
//    $password = $_POST['password'];
//    $passwordAG = $_POST['passwordAG'];
//
//    function registerUser($name, $password)
//    {
//        if (empty($name) || empty($password)) {
//            echo "Empty failed";
//        }
//        if (file_exists("name.json")) {
//            $current_data = file_get_contents("name.json");
//            $array_data = json_decode($current_data, true);
//            $input_array = [
//                "user" => $name
//            ];
//            //            echo "<pre>";
//            //            print_r($array_data);
//            //            echo "</pre>";
//            //            print("Day la phan tu mang: ".$array_data[0]['user']);
//            foreach ($array_data as $key => $value) {
//                if ($value['user'] == $name) {
//                    echo "<p style='color: red'>Tên đã có người sử dụng</p>";
//                }
//            }
//            if ($value['user'] != $name) {
//                array_push($array_data, $input_array);
//                $final_data = json_encode($array_data);
//                file_put_contents("name.json", $final_data);
//                echo "<p style='color: green'>Success added </p>";
//            }
//        } else {
//            echo "json file not exist";
//        }
//    }
//
//    registerUser($name, $password);
//
//    function checkPass($password, $passwordAG)
//    {
//        if ($password != $passwordAG) {
//            echo "<p style='color: red'>" . "* mật khẩu không khớp" . "</p>";
//        }
//    }
//
//}
//
//?>
<script>
    $('#passwordAG').keyup(function(){
        var pasAg=$(this).val();
        var pas=$('#password').val();
        // alert(pas);
        if(pas!=pasAg){
            $(".error").html("Mật khẩu không trùng khớp");
            $("#submitform").prop('disabled', true);

        }else{
            $(".error").html("Mật khẩu trùng khớp");
            $("#submitform").prop('disabled', false);

        }

    });



    $("#user").keyup(function(){
        var username=$(this).val();
        var mang = ['concua', 'thienhoang', 'taikhoan', 'admin'];
        for(var i=0; i< mang.length; i++){
            if(mang[i]==username){
                var thongbao= 'Tài khoản đã tồn tại';
                $("#submitform").prop('disabled', true);
                break;
            }else{
                $("#submitform").prop('disabled', false);
            }
        }
        $('.error_name').html(thongbao);

    });
</script>

</body>
</html>


<?php
$userName = $_POST['userName'];
$password = $_POST['password'];

if($userName == 'minhnd' && $password == 'a'){
    session_start();
    $_SESSION['user_name'] = $userName;
    echo "Bạn đã đăng nhập thành công";
    echo "</br>";
}else{
    echo "Thông tin đăng nhập không đúng";
}
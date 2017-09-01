<?php

session_start();

if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
    echo 'Bạn đã đăng nhập';
    echo "</br>";
    echo 'Xin chào ' . $_SESSION['user_name'];
}else{
    echo 'Bạn chưa đăng nhập';
}
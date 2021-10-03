<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);

    $conn = mysqli_connect ('localhost', 'root', '', 'hieuu2') or die ('Không thể kết nối tới database');
   
    $query = "SELECT * FROM member WHERE username='$username' AND password = '$password' AND email = '$email' AND phone = '$phone'";
    $result = mysqli_query($conn, $query);
    $soluong = 0;
    if (isset($result))
        $soluong = mysqli_num_rows($result);
    if ($soluong>0) {
        echo '<h3>Hello.</h3>';
        $_SESSION['username'] = $username;
    }
    else
   
    echo '<h3>Sai thông tin, vui lòng điền lại: <a href="dangnhap.php">Đăng nhập</a></h3>';
        
   
       
}

include('menu.php');
?>
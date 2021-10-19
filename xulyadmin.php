<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    

    $conn = mysqli_connect ('localhost', 'root', '', 'hieuu2') or die ('Không thể kết nối tới database');
   
    $query = "SELECT * FROM admin_account WHERE username='$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $soluong = 0;
    if (isset($result))
        $soluong = mysqli_num_rows($result);
    if ($soluong>0) {
        
        $_SESSION['username'] = $username;
    }
    else
   
    echo '<script language="javascript">alert("Sai thông tin, vui lòng nhập lại !"); window.location="adminlogin.php";</script>';

        
   
       
}

include('menuadmin.php');
?>

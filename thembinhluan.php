<?php
    $username = $_POST['username'];
    $noidung = $_POST['noidung'];
   
    

    echo $noidung.'-'.$username;
    $conn = mysqli_connect("localhost","root","","hieuu2");
    $sql = "INSERT INTO binhluan (username, noidung) VALUES ('$username', '$noidung')";
    $ketqua = mysqli_query($conn,$sql);

    echo "OK";
?>
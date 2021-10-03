<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: capnhat.php');
?>
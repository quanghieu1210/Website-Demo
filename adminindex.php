<!DOCTYPE html>
<html>
<head>
  <style>
    a{
      text-decoration: none;
      
    }
    </style>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="css/stadmin.css">
</head>
<?php
include('xulyadmin.php');
?>
<body>
<nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

   <a href="#" class="menu-item blue"> <i class="fa fa-anchor"></i>None</a>
   <a href="#" class="menu-item green"> <i class="fa fa-coffee"></i> None </a>
   <a href="xacnhan.php" class="menu-item red"> <i class="fa fa-heart"></i>CTDH </a>
   <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> None</a>
   <a href="#" class="menu-item orange"> <i class="fa fa-star"></i>None</a>
   <a href="capnhat.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i>CN</a>
</nav>
</body>
</html>

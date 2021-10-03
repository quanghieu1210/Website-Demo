
<?php
if(isset($_SESSION['username']))
    echo "<h3>Xin chào bạn <b>".$_SESSION['username'].'</b> (<a href="sessiondn.php">Đăng xuất</a>)</h3>';
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('xulydn.php');
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">



    <title>Trang chủ</title>


    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>

<style type="text/css"> 
div.right{
        position: absolute;
        right: 0px;
        
        
        padding: 10px;
    }
</style>
</head>

<body translate="no">
    <div class="sidebar-container">
        <div class="sidebar-logo">
            Cart Online
        </div>
        
        <ul class="sidebar-navigation">
            <li class="header">Danh sách</li>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="cart1.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Cửa hàng
                </a>
            </li>
            <li class="header">Menu đăng nhập</li>
            <li>
                <a href="dangnhap.php">
                    <i class="fa fa-users" aria-hidden="true"></i> Đăng nhập
                </a>
            </li>
            <li>
                <a href="dangky.php">
                  <i class="fa fa-users" aria-hidden="true"></i> Đăng ký
                </a>
            </li>
            <li>
                <a href="cart2.php">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Admin
                </a>
            </li>
        </ul>
    </div>
    <div class="right">
<iframe width="1300" height="545" src="https://www.youtube.com//embed/kTJczUoc26U?autoplay=1"  allow="autoplay">
</iframe>
</div>

    
       
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>



</body>

</html>
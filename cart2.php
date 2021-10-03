
<?php
session_start();
if(isset($_POST['submit']))
{
foreach($_POST['qty'] as $key=>$value)
{
if( ($value == 0) and (is_numeric($value)))
{
unset ($_SESSION['cart'][$key]);
}
else if(($value > 0) and (is_numeric($value)))
{
$_SESSION['cart'][$key]=$value;
}
}
header("location:cart2.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

      
     
      
     
    
	
	
<title>Giỏ hàng</title>
<link rel="stylesheet" href="css/stylecart2.css" />

</head>
<body>
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
            <h2>Giỏ hàng</h2>
            <form method="POST" class="d-flex" action="">
                
                <a href=index.php>Trang chủ</a>
            </form>
        </div>

<?php

$ok=1;
if(isset($_SESSION['cart']))
{
foreach($_SESSION['cart'] as $k => $v)
{
if(isset($k))
{
$ok=2;
}
}
}
if($ok == 2)
{
echo "<form action='cart2.php' method='post'>";
foreach($_SESSION['cart'] as $key=>$value)
{
$item[]=$key;
}
$str=implode(",",$item);
$connect=mysqli_connect("localhost", "root", "", "hieuu2")or die("Can not connect database");

$sql="SELECT * from product where id in ($str)";
$query=mysqli_query($connect,$sql);
$total=0;
while($row=mysqli_fetch_array($query))
{
    
echo '<div class="product">';

echo '<div class="product-image">';
echo '<img src="uploads/'.$row['img'].'" width="150"<br />';
echo "</div>";

echo '<div class="product-details">';
echo '<div class="product-title"> ';
echo '</div>';
echo '<h3><p class="product-description">'.$row['title'].'</p></h3>';
echo "</div>";


echo 'Tác Giả: '.$row['author'].'</br>';

echo '<div class="product-price">';
echo 'Giá: '.number_format($row['price'],3).'VND <br />';
echo "</div>";

echo '<p align="right">Số lượng: <input type="text" name="qty['.$row['id'].']" size="5" value="'.$_SESSION['cart'][$row['id']].'">  ';

echo '<div class="product-removal">';
echo '<button class="remove-product"><a href="delcart.php?productid='.$row['id'].'">Xóa</a></p></button>';
echo '</div>';

echo '<p align="right"> Tổng: '.number_format($_SESSION['cart'][$row['id']]*$row['price'],3) .' VND</p>';
echo '</div>';
$total += $_SESSION['cart'][$row['id']]*$row['price'];
}
echo '<div class="pro" align="right">';
echo '<b>Tổng giá tiền cho giỏ hàng: <font color="red">'.number_format($total,3).' VND</font></b>';
echo "</div>";

echo "<div class='pro' align='center'>";

echo "</div>";
echo "</div>";



echo "<input type='submit' name='submit' class='btn btn-success' value='Cập nhật'>";
echo "<input type='button'  class='btn btn-success' id='btn' value='Xác nhận' ></br>";
}	

else
{
echo "<div class='pro'>";
echo "<p align='center'>Bạn không có món hàng nào trong giỏ hàng<br /><a
href='index2.php'>Tiếp tục mua sắm</a></p>";
echo "</div> ";
}
?>

</div>

<script language="javascript">
            var button = document.getElementById("btn");
            button.onclick = function(){
                alert("Đặt hàng thành công, xin vui lòng đợi để nhận hàng!");
            }
        </script>
    <?php
    echo " <a href='index.php'>Quay lại cửa hàng</a> -";
    echo "<a href='delcart.php?productid=0'> Xóa toàn bộ giỏ hàng</a>";
    ?>
</body>
</html>
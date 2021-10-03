
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<?php
include('menu2.php');
?>
  <?php
        include('xulydn.php');
    ?>
<title>Cửa hàng</title>
<link rel="stylesheet" href="stylecart.css" />
</head>
<body>
<h1>Số sách có trong giỏ hàng</h1>

<?php   

$ok=1;
if(isset($_SESSION['cart']))
{
foreach($_SESSION['cart'] as $k=>$v)
{
if(isset($v))
{
$ok=2;
}
}
}
if ($ok != 2)
{
echo '<p>Bạn chưa có món hàng nào trong giỏ hàng</p>';
}
else
{

$items = $_SESSION['cart'];
echo '<p>Bạn có <a href="cart2.php">'.count($items).' <button id="cart">
<i class="fa fa-shopping-basket" aria-hidden="true"></i>
Giỏ Hàng
</button></a></p>';
}
?>
</div>
<?php
$connect=mysqli_connect("localhost", "root", "", "hieuu2")or die("Can not connect database");

$sql="SELECT * from product order by id desc";
$query=mysqli_query($connect,$sql);
if(mysqli_num_rows($query) > 0)
{
while($row=mysqli_fetch_array($query))
{

echo '<div>';
echo '<img src="uploads/'.$row['img'].'" width="300"<br />';
echo '<h3>'.$row['title'].'</h3> <br />';
echo 'Tác giả: '.$row['author'].'  <br />';
echo 'Giá: '.number_format($row['price'],3).'VND <br />';
echo '<button type="button" class="btn btn-cart"><a href="addcart.php?item='.$row['id'].'">Mua</a></button>';
echo '<button type="button" ><a href="chitiet.php?id='.$row['id'].'">Chi tiết</a></button>';
echo '</div>';
}
}
?>
</body>
</html>
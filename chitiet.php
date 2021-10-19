
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btGui").click(function(){
                    $.post("thembinhluan.php",
                    {
                        username: $("#username").val(),
                        noidung: $("#noidung").val(),
                        
                    },
                    function(data,status){
                            $("#dsbinhluan").append("<p> "+$("#username").val()+": "+ $("#noidung").val()+"</p>");
                            $("#noidung").val('');
                    });
                    
                });
            });
        </script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <?php
        include('xulydn.php');
    ?>
<title>Chi tiết</title>
<link rel="stylesheet" href="css/stbl.css" />
</head> 
<body>
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
            <h2>Chi tiết đơn hàng</h2>
            <form method="POST" class="d-flex" action="">
                
                <a href=index.php>Trang chủ</a>
            </form>
        </div>




<?php
$id = $_GET['id'];
$connect=mysqli_connect("localhost", "root", "", "hieuu2")or die("Can not connect database");

$sql="SELECT * from product where id = $id";
$query=mysqli_query($connect,$sql);

while($row=mysqli_fetch_array($query))
{

echo '<div>';
echo '<img src="uploads/'.$row['img'].'" width="300"<br />';
echo '<h3>'.$row['title'].'</h3> <br />';
echo 'Tác giả: '.$row['author'].'  <br />';
echo 'Số lượng hiện có: '.$row['quantity'].'  <br />';
echo ' '.$row['note'].'  <br />';
echo 'Giá: '.number_format($row['price'],3).'VND <br />';

echo '</div>';
}

?>
</div>

</br></br>

<h3>Bình luận</h3>

        <div id="dsbinhluan">
                <?php
               
                 $conn1 = mysqli_connect("localhost","root","","hieuu2");
                 $sql1 = "SELECT * FROM binhluan  ";
                 $ketqua1 = mysqli_query($conn1,$sql1);
                while($row1 = mysqli_fetch_array($ketqua1)) {
                    echo '<div class="card-header d-flex justify-content-between align-items-center">';
                    echo '<p>'.$row1['username'].': '.$row1['noidung'];
                    echo ' <a href="xoacmt.php?id='.$row1['id'].'">Xóa</a>';
                    echo '</div>';
                }
                 ?>
        </div>
        <div id="binhluan">
        <div class="product">
                    
        <form>       
  <input type="text" name="name" class="question" id="username" required autocomplete="off" />
  <label for="nme"><span>Tên</span></label>
  <textarea name="message" rows="2" class="question" id="noidung" required autocomplete="off" placeholder="Nội dung"></textarea>
  <label for="nme"><span></span></label>
      
      
     </form> 
                </div>
                <button name="sbm" class="btn btn-success" id="btGui">Gửi</button>
                
        </div>
          
        <?php
    echo " <a href='index.php'>Quay lại cửa hàng</a> ";
    ?>
</body>
</html>

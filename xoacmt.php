<?php
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost", "root", "", "hieuu2");
	$sql = "DELETE FROM binhluan WHERE id=$id";
	$ketqua = mysqli_query($conn, $sql);
	header('location: index2.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa CMT</title>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<title>Thêm sản phẩm</title>
</head>
<body>
<?php


    if(isset($_POST['sbm'])){
        $title = $_POST['title'];

        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];

        $author = $_POST['author'];
        $price = $_POST['price'];
        $note = $_POST['note'];
        
        
        
        $conn2 = mysqli_connect("localhost", "root", "", "hieuu2");
        $sql2 = "INSERT INTO product(title, img, author, price, note) VALUES('$title', '$img', '$author', '$price', '$note')";

        $ketqua = mysqli_query($conn2, $sql2);
        move_uploaded_file($img_tmp, 'uploads/'.$img);
        header('location: capnhat.php');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>Ảnh sản phẩm</label> <br>
                    <input type="file" name="img">
                </div>

                <div class="form-group">
                    <label>Tác giả</label>
                    <input type="text" name="author" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="note" id="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                    
                </div>

            
                    <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<head>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<?php
    $id = $_GET['id'];

   
    $conn3 = mysqli_connect("localhost", "root", "", "hieuu2");
    $sql3 = "SELECT * FROM product WHERE id = $id";
    $rs = mysqli_query($conn3, $sql3);
    $row_up = mysqli_fetch_assoc($rs);

    if(isset($_POST['sbm'])){
        $title = $_POST['title'];
        $img_tmp = $_FILES['img']['tmp_name'];

        if($_FILES['img']['name'] == ""){
            $img = $row_up['img'];
        }else{
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'uploads/'.$image);
        }


        $author = $_POST['author'];
        $price = $_POST['price'];
        $note = $_POST['note'];

        $sql4 = "UPDATE product SET title = '$title', img = '$img', author = '$author', price = '$price', note = '$note' WHERE id = $id";

        $query = mysqli_query($conn3, $sql4);
        header('location: capnhat.php');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row_up['title']; ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh sản phẩm</label> <br>
                    <input type="file" name="img">
                </div>

                <div class="form-group">
                    <label>Tác giả</label>
                    <input type="text" name="author" class="form-control" value="<?php echo $row_up['author']; ?>">
                </div>

                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $row_up['price']; ?>">
                </div>

                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="note" id="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                </div>

                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>
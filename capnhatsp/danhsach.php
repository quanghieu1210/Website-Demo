
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Cập nhật sản phẩm</h2>
            <form method="POST" class="d-flex" action="">
                
                <a href=index2.php>Trang chủ</a>
            </form>
        </div>

        <div class="card-body">
            <?php
                if(isset($total_prd)){
                    if($total_prd !==0){
                        echo "<p class='text-success'>Tìm thấy $total_prd sản phẩm</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy sản phẩm nào! </p>";
                    }
                }
            ?>
            <table class="table bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Tên sách</th>
                        <th>Ảnh</th>
                        <th>Tác giả</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                       
                        <th width="12%">Update</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i = 1;
                        $connect=mysqli_connect("localhost", "root", "", "hieuu2")or die("Can not connect database");

                              $sql="SELECT * from product order by id desc";
                              $query=mysqli_query($connect,$sql);
                              if(mysqli_num_rows($query) > 0)
                              {
                              while($row=mysqli_fetch_array($query))
                              {
                           echo' <tr>';
                            echo' <td>  '.$i++.' </th>';
                            echo'  <td>  '.$row['title'].'</td>';

                            echo'    <td>';
                            echo' <img src="uploads/'. $row['img'].'" width="150">';
                                
                                    echo' </td>';

                                    echo' <td>  '.$row['author'].'</td>';
                                    echo' <td>  '.number_format($row['price'],3).'VND</td>';
                                    echo'<td> '.$row['note'].'</td>';
                                
                                    echo'<td>';
                                    echo'<a class="btn btn-warning" href="capnhat.php?page_layout=sua&id='.$row['id'].'">Sửa</a>';

                                    echo'<a onclick="return Del( '.$row['title'].')" class="btn btn-danger" href="capnhat.php?page_layout=xoa&id= '.$row['id'].'">Xóa</a>';
                                    echo'</td>';
                                    echo'</tr>';
                              }
                            }
                              ?>
                        
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="capnhat.php?page_layout=them" class="btn btn-primary">
                Thêm mới
            </a>

            <?php
                if(isset($_POST['sbm']) && !empty($_POST['search'])){?>
                    <form method="POST" action="">
                        <button name="all_prd" class='btn btn-success text-light'>Tất cả sản phẩm</button>
                    </form>
                <?php } ?>
        </div>
    </div>
</div>

<script>
    function Del(title){
        return confirm("Bạn có chắc chắn muốn xóa: " + title + " ?");
    }
</script>
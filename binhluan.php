
<html>
    <head>
        <meta charset="utf-8" />
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
    </head>
    <body>
            
        <h4>Bình luận</h4>
        <div id="dsbinhluan">
                <?php
                 $conn1 = mysqli_connect("localhost","root","","hieuu2");
                 $sql1 = "SELECT * FROM binhluan ";
                 $ketqua1 = mysqli_query($conn1,$sql1);
                while($row1 = mysqli_fetch_array($ketqua1))
                    echo '<p>'.$row1['username'].': '.$row1['noidung'];
                 ?>
        </div>
        <div id="binhluan">
        <input type="text" id="username" placeholder="Tên của bạn">
            <input type="text" id="noidung">
            <input type="submit" value="Gửi" id="btGui">
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
   <head>
   
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Trang chủ</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style2.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
       
      <div class="wrapper">
          
         <div class="header">
            <div class="container">
            <?php
        include('xulydn.php');
    ?>
               <div class="row">
                  
                  <div class="col-md-10 col-sm-10">
                     
                        
                           
                           
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="dangnhap.php" class="log">Đăng nhập</a></li>
                                 <li><a href="dangky.php" class="reg">Đăng ký</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              
                           </li>
                           <li class="option-cart">
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
                                echo '<a href="#" class="cart-icon">cart <span class="cart_no">0</span></a>';
                                }
                                else
                                {

                                $items = $_SESSION['cart'];
                                echo '<a href="cart2.php" class="cart-icon">cart <span class="cart_no">'.count($items).' </span></a>">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                
                                </button></a></p>';
                                }
                                ?>
                              
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li >
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a>
                                 
                              </li>
                           
                              
                              <li>
                                 <a href="thongke.php" ></a>
                                 
                              </li>
                              
                             
                           </ul>
                        </div>
                     </div>
                  
               
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Lợi ích của đọc sách?</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p> <br> .</p>
                        </div>
                      
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/q1.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Cải thiện trí nhớ?</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>???<br>  </h2>
                        </div>
                       
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/q4.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Giải trí, giảm stress</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>  </p>
                        </div>
                      
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/q3.jpg" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/d1.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/d4.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/d3.jpg" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="clearfix"></div>
         <div class="container_fullwidth">
         
            <div class="container">
               <div class="hot-products">
               <form action="" method="GET">
            Tìm kiếm: <input type="text" name="s">
            
            
               <button class="button add-cart" type="submit" >Tìm</button>
            
        </form> </br>
        <?php
       
            if(isset($_GET['s']))
            {
                $s = $_GET['s'];
                $conn = mysqli_connect("localhost", "root", "", "hieuu2");
                $sql = "SELECT * FROM product WHERE title LIKE '%$s%'";
                $rs = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($rs))
                {
                    echo' <div class="col-md-3 col-sm-6">';
                    echo' <div class="products">';
                             
echo'<div class="thumbnail"><img src="uploads/'.$row['img'].'" alt="Product Name" width="200"></a></div>';
echo'  <div class="productname">'.$row['title'].'</div>';

  echo' <h4 class="price">'.number_format($row['price'],3).' VND</h4>';
    echo'<div class="button_group"><button class="button add-cart" type="button" ><a href="addcart.php?item='.$row['id'].'">Mua</a></button>
    <button class="button add-cart" type="button" ><a href="chitiet.php?id='.$row['id'].'">Chi tiết</a></button>';
             echo' </div>';
             
             
             echo' </div>';
             echo' </div>';
              
             
         
         }
                }
            
        ?>
                  <h3 class="title"><strong>Sách</strong> hiện đang bán chạy</h3>
                
                   
                
                <?php
                  
                                                
                              $connect=mysqli_connect("localhost", "root", "", "hieuu2")or die("Can not connect database");

                              $sql="SELECT * from product order by id desc";
                              $query=mysqli_query($connect,$sql);
                              if(mysqli_num_rows($query) > 0)
                              {
                              while($row=mysqli_fetch_array($query))
                              {
    
                                 
                
                       echo' <div class="col-md-3 col-sm-6">';
                       echo' <div class="products">';
                                
 echo'<div class="thumbnail"><img src="uploads/'.$row['img'].'" alt="Product Name" width="200"></a></div>';
  echo'  <div class="productname">'.$row['title'].'</div>';
  
     echo' <h4 class="price">'.number_format($row['price'],3).' VND</h4>';
       echo'<div class="button_group"><button class="button add-cart" type="button" ><a href="addcart.php?item='.$row['id'].'">Mua</a></button>
       <button class="button add-cart" type="button" ><a href="chitiet.php?id='.$row['id'].'">Chi tiết</a></button>';
                echo' </div>';
                
                
                echo' </div>';
                echo' </div>';
                 
                
            
            }
        }
        ?>
                  
               </div>
            </div> 
         </div>

         <iframe width="1520" height="545" src="https://www.youtube.com//embed/kTJczUoc26U?autoplay=1"  allow="autoplay">
</iframe>

         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        
                     </div>
                     <div class="col-md-3 col-sm-6">
                        
                        
                     </div>
                     <div class="col-md-3">
                        
                     
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2021. by <a href="#">Híu thân thiện</a> </p>
                        
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="https://www.facebook.com/baoboi.h/" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>

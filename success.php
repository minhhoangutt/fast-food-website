<?php
	session_start();
	require_once('code/function.php');
	require_once('database/dbhelper.php');
	
	$sql = "select * from Category";
	$menuItems = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./assets/css/burgers.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
   <style>
       #nav .subnav {
position: absolute;
display: none;
top: 100%;
left: 0;
background-color:#fff;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
#nav li:hover .subnav {
    display: block;
    
}
       .cart-icon{
       
    position: fixed;
    z-index: 100;
    right: 0px;
    top: 45%;


       }
       .cart-icon img{
         width: 30px;
         background-color: white;
       }

       .cart-icon .cart-count{
           background-color: #f30;
           color: white;
           font-size: 16px;
           padding: 1px 4px;
           border-radius: 6px;
       }
	 .table th, .table td{
		padding: 0.75rem;
  vertical-align: top;
  border:  solid #dee2e6;

	 }
     li:hover {
         text-decoration: none;
     }
     a:hover{
        text-decoration: none;
     }
     ul:hover{
        text-decoration: none;
     }
   </style>
   
</head>
<body>
<header>
<div id="header">
            <img src="./assets/img/logo2.png" alt="" class="logo">
       <div class="container-header">
           <!-- begin nav -->
           <ul id="nav">
             
             <li><a href="index.php">Trang chủ </a></li>
                 <li>
                     <a href=""> Sản phẩm
                         <i class = " nav-arrow-down ti-angle-down"></i>
                         
                     </a>
                     <!-- begin subnav -->
                     <ul class="subnav">
                       <li><a href="burger.php">Hamburgers</a> </li>
                       <li><a href="drink.php">Drinks</a></li>
                       <li><a href="combo.php">Combo</a></li>
                       <li><a href="other.php">Others</a></li>
                     </ul>
                <!-- end subnav -->
           </li>
            <li><a href="#">Giới thiệu</a>
           </li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="feedback.php">Liên hệ</a></li>
        </ul>
        <!-- end nav -->
        <div class="header-search " style="padding: 0px 30px">
            <a href="./login.html"><i class="search-icon ti-search"></i></a>
        </div>
        <div class="header-user" style="padding: 0px 30px;">
           <a href="./login.html"> <i class="ti-user"></i></a>
        </div>
       
       </div>
       </div>
       </header>
<div class="container" style="margin-top: 100px; margin-bottom: 20px;">
	<div class="row">
		<div class="col-md-12" style="text-align: center;">
			<h1 style="color: green">TẠO ĐƠN HÀNG THÀNH CÔNG</h1>
			<h5 style="padding-top: 50px;">Cảm ơn quý khách ! Đơn hàng  sẽ được nhân viên kiểm tra và giao hàng trong thời gian sớm nhất.</h5>
			<a href="index.php"><button class="btn btn-danger" style="border-radius: 0px; font-size: 16px;width:300px;height:50px;background-color:#f30;color:white;margin-top:50px;">TIẾP TỤC MUA HÀNG</button></a>
		</div>
	</div>
</div>
<?php
require_once('layout/footer.php');
?>
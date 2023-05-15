<?php 
	session_start();
	require_once('code/function.php');
	require_once('database/dbhelper.php');
	
	$sql = "select * from Category";
	$menuItems = executeResult($sql);

if(!empty($_POST)) {
	$first_name = getPost('first_name');
	$last_name = getPost('last_name');
	$email = getPost('email');
	$phone_number = getPost('phone');
	$subject_name = getPost('subject_name');
	$note = getPost('note');
	$created_at = $updated_at = date('Y-m-d H:i:s');

	$sql = "insert into FeedBack(firstname, lastname, email, phone_number, subject_name, note, status, created_at, updated_at) values('$first_name', '$last_name', '$email', '$phone_number', '$subject_name', '$note', 0, '$created_at', '$updated_at')";
	// echo $sql;
	execute($sql);
}
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
   
    #footer h3{
      font-size: 20px;
    }
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
            <li><a href="#">Liên hệ</a></li>
        </ul>
        <!-- end nav -->
        <div class="header-search ">
            <a href="./login.html"><i class="search-icon ti-search"></i></a>
        </div>
        <div class="header-user">
           <a href="./login.html"> <i class="ti-user"></i></a>
        </div>
       
       </div>
       </div>
       </header>
<div class="container" style="margin-top: 100px; margin-bottom: 20px;">
<h3>Feedback</h3>
	<form method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					  <input required="true" style="width: 200px;margin-right:50px;" type="text" class="form-control" id="usr" name="first_name" placeholder="Nhập tên">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					  <input required="true" type="text" class="form-control" id="usr" name="last_name" placeholder="Nhập họ">
					</div>
				</div>
			</div>
			<div class="form-group">
			  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
			</div>
			<div class="form-group">
			  <input required="true" type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập sđt">
			</div>
			<div class="form-group">
			  <input required="true" type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Nhập chủ đề">
			</div>
			<div class="form-group">
			  <label for="pwd">Nội dung:</label>
			  <textarea class="form-control" rows="3" name="note"></textarea>
			</div>
			<a href="checkout.php"><button class="btn btn-danger" style="border-radius: 0px; font-size: 16px; width: 50%;height:50px"> PHẢN HỒI</button></a>
		</div>
		<div class="col-md-6">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.285297578891!2d106.31698425050158!3d20.941054985977473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b3d958481eb%3A0x71702a9fc935a408!2sI&#39;M%20Chicken!5e0!3m2!1svi!2s!4v1637199359035!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</form>
</div>
<div id="footer" style="font-size : 16px;">  
            <div class="footer-list">
                <hr>
               <div class="footer-items" style="padding: 15px 20px;">
                   <ul class="footer-contents">
                     <li><h3>Tìm hiểu</h3></li>
                     <li><a href="">Lịch sử McDonald's</a></li>
                     <li>Xuất xứ</li>
                     <li>Nhà cung cấp</li>
                     <li>Dịch vụ</li>
                     <li>An toàn thực phẩm</li>   
                   </ul>
               </div>
               <div class="footer-items"  style="padding: 15px 20px;">
                <ul class="footer-contents">
                  <li><h3>Chính sách</h3></li>
                  <li>Câu hỏi thường gặp</li>
                  <li>Điều khoản và Điều kiện</li>
                  <li>Chính sách về quyền riêng tư</li>
     
                </ul>
            </div>
            <div class="footer-items"  style="padding: 15px 20px;">
                <ul class="footer-contents">
                  <li><h3>Ngôn ngữ</h3>
                <div class="lang">
                   <img src="./assets/img/lang1.png" alt="" class="lang-img">
                   <img src="./assets/img/lang2.png" alt="" class="lang-img">
                    
                </div>
                </li>
        
                </ul>
            </div>
            <div class="footer-items"  style="padding: 15px 20px;">
                <ul class="footer-contents">
                  <li><h3>Liên hệ với chúng tôi</h3></li>
                  <li>Liên hệ</li>
                  <li>Phản hồi</li>
                   
                </ul>
               <a href="ht#tps://www.facebook.com/McDonaldsVN" target="_bank"> <img src="./assets/img/contact1.png" alt="" class="contact-img"></a>
             <a href="ht#tps://www.instagram.com/mcdonalds/" target="_bank">   <img src="./assets/img/contact2.png" alt="" class="contact-img"></a>
               <a href="#"> <img src="./assets/img/contact3.png" alt="" class="contact-img"></a>
            </div>
            </div>
           
        </div>
               <div class="clear"></div>
              <!--cart  -->
              <?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;

foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>

<span class="cart-icon">
	<span class="cart-count"><?=$count?></span>
	<a href="cart.php"><img src="./assets/img/cartt.png" alt="" class="lang-img"></a>
</span>
<script type="text/javascript">
	function addMoreCart(delta) {
		num = parseInt($('[name=num]').val())
		num += delta
		if(num < 1) num = 1;
		$('[name=num]').val(num)
	}

	function fixCartNum() {
		$('[name=num]').val(Math.abs($('[name=num]').val()))
	}
</script>
                  </body>
          </html>
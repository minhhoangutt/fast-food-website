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
    #footer h3{
        font-size:20px
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
	   <div class="container" style="margin-top: 20px; margin-bottom: 20px;margin-top:100px;">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<th>STT</th>
				<th>Sản phẩm</th>
				<th>Tên </th>
				<th>Giá</th>
				<th>Số Lượng</th>
				<th>Tổng</th>
				<th></th>
			</tr>
<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$index = 0;
$total = 0;
foreach($_SESSION['cart'] as $item) {
    $total += $item['price']* $item['num'];
	echo '<tr>
			<td>'.(++$index).'</td>
			<td><img src="'.$item['thumbnail'].'" style="height: 80px"/></td>
			<td>'.$item['title'].'</td>
			<td>'.number_format($item['price']).' VND</td>
			<td style="display: flex; padding-top:33px;padding-bottom: 30px;"><button class="btn btn-light" style="border: solid #e0dede 1px; border-radius: 0px;padding-bottom:10px; height:38px;width:40px;" onclick="addMoreCart1('.$item['id'].', -1)">-</button>
				<input type="number" id="num_'.$item['id'].'" value="'.$item['num'].'" class="form-control" style="width: 60px; border-radius: 0px" onchange="fixCartNum('.$item['id'].')"/>
				<button class="btn btn-light" style="border: solid #e0dede 1px; border-radius: 0px;height :  38px;width:40px;" onclick="addMoreCart1('.$item['id'].', 1)">+</button>
			</td>
			<td>'.number_format($item['price'] * $item['num']).' VND</td>
			<td><button class=" btn-danger" onclick="updateCart('.$item['id'].', 0)" style="margin-top: 20px;height: 38px;">Xoá</button></td>
		</tr>';
}

?>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <th>Tổng :</th>
    <th><?=number_format($total)?> VNĐ</th>
    <td></td>
</tr>
		</table>
		<a href="checkout.php"><button class="btn btn-success" style="border-radius: 0px; font-size: 10px;background-color:#f30; color:white;">THANH TOÁN</button></a>
	</div>
</div>
<script type="text/javascript">
  
	function addMoreCart1(id, delta) {
		num = parseInt($('#num_' + id).val());
		num += delta
		$('#num_' + id).val(num)

		updateCart(id, num)
	}

	function fixCartNum(id) {
		$('#num_' + id).val(Math.abs($('#num_' + id).val()))

		updateCart(id, $('#num_' + id).val())
	}

	function updateCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'update_cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<div id="footer">  
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
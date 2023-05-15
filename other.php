

<?php
	session_start();
	require_once('code/function.php');
	require_once('database/dbhelper.php');
	$sql = "select * from Category";
	$menuItems = executeResult($sql);
?>
<?php 
$sql = "SELECT * FROM product where category_id = '4' ";
$lastestItems = executeResult($sql);
?>
<?php
require_once('layout/header.php');
?>
    
        <div id="content">
        <?php
        echo '<div id="content">
        <div class="burger-header"> 
        <ul class="breadcrumb" style="margin-top: 70px;">
        <li><a href="index.php">Trang chủ</a></li>
        <li>Sản phẩm</li>
        <li>Others</li>
        
        </ul>
            <h2 class="row">Khác</h2>
        </div>
        <div class="content-body">
            ';
		foreach($lastestItems as $item) {
			echo '
            <div class="list-content">
            <div class="food-item">
            <img src="'.$item['thumbnail'].'" class="food-img">
            <div class="food-body">
            <a href="detail.php?id='.$item['id'].'"><h3 class="food-name">'.$item['title'].'</h3></a> 
            <p class="food-price">'.number_format($item['price']).' VND</p>
            <button class="food-buy"  onclick="addCart('.$item['id'].', 1)"><i class="ti-shopping-cart"></i>Đặt hàng</button>
           </div>
            
        </div>
            </div>
            ';
		}
	
             
        ?>
    
    <?php
require_once('layout/footer.php');
?>
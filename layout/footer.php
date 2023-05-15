<div id="footer">  
            <div class="footer-list" ">
                <hr>
               <div class="footer-items" style="padding: 15px 10px;">
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
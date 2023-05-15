

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
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
        <div class="header-search ">
            <a href=""><i class="search-icon ti-search"></i></a>
        </div>
        <div class="header-user">
        <a href="dangnhap.php"> <i class="ti-user"></i></a>
        </div>
       
       </div>
       </div>
    
       <!-- end header -->

          
        
       
        <div id="slider" style="margin-top: 70px;"> <div class="slider-content">
            <img class="slider-img" src="./assets/img/slider/slider-1.jpg" >
            <img class="slider-img" src="./assets/img/slider/slider3.jpg" >
            <img class="slider-img" src="./assets/img/slider/slider2.jpg" >
            <img class="slider-img" src="./assets/img/slider/slider4.jpg" >
          </div> </div>

        <!-- begin content -->
    <div id="content">
       <div class="content-first-img">
             <img src="./assets/img/content-first.jpg" alt="">
                  <div class="text-content-first">
                        <p>Ưu đãi độc quyền & hơn thế nữa</p>
                        <h2>ỨNG DỤNG McDONALD'S</h2>
                        <a href="" class="download">Tải Ứng Dụng</a>
                   </div>
          </div>  
          <div class="content-news">
            <div class="news-left">
                <img src="./assets/img/content-cafe.jpg" alt="" >
                <div class="mc-cafe">McCafe</div>
            
            </div>
            <div class="news-right">
              <div class="news-right-top">
                <div class="right-top-left">
                    <a href=""> <img src="./assets/img/home-stories.jpg" alt=""></a>
                      <div class="desc-news-1">Câu chuyện về <br> Mc Donald's</div></div>
               <div class="right-top-right">
                    <a href=""><img src="./assets/img/tuyendung.jpg" alt=""></a>
                  <div class="desc-news-2">Tuyển dụng</div></div>
              </div>
              <div class="news-right-bottom">
                <img src="./assets/img/content-burger.jpg" alt="">
                <div class="desc-news-3">
                  Hamburgers
                  <br>
                  Khám phá vị ngon lừng danh
                </div>
              </div>
            </div>
          
            <div class="clear"></div>
          </div>  
       
    </div>
 <!-- end content-->
    
  <div id="footer" style="margin-left: 150px;">  
            <div class="footer-list">
                <hr style="width :1000px">
               <div class="footer-items">
                   <ul class="footer-contents">
                     <li><h3>Tìm hiểu</h3></li>
                     <li><a href="">Lịch sử McDonald's</a></li>
                     <li>Xuất xứ</li>
                     <li>Nhà cung cấp</li>
                     <li>Dịch vụ</li>
                     <li>An toàn thực phẩm</li>   
                   </ul>
               </div>
               <div class="footer-items">
                <ul class="footer-contents">
                  <li><h3>Chính sách</h3></li>
                  <li>Câu hỏi thường gặp</li>
                  <li>Điều khoản và Điều kiện</li>
                  <li>Chính sách về quyền riêng tư</li>
     
                </ul>
            </div>
            <div class="footer-items">
                <ul class="footer-contents">
                  <li><h3>Ngôn ngữ</h3>
                <div class="lang">
                   <img src="./assets/img/lang1.png" alt="" class="lang-img">
                   <img src="./assets/img/lang2.png" alt="" class="lang-img">
                    
                </div>
                </li>
        
                </ul>
            </div>
            <div class="footer-items">
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
      
        </body>
        <script>
          var myIndex = 0;
          slider();
          function slider() {
                var i;
                var x = document.getElementsByClassName("slider-img");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(slider, 7000); 
              }
              </script>
</html>
       

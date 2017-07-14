<div class="single-product-area">
   <div class="container">
      <div class="product-content-right">
         <div class="row">
            <div class="col-sm-6">
               <div class="product-images">
                  <div class="product-main-img">
<!--ดึงรูป-->           <img src="http://moo.upyim.com/wp-content/uploads/2017/06/1-569.jpg" class="img-circle" alt="Forest" width="304" height="236">
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="product-inner">
                  <h2 class="product-name">ข้อมูลผู้ซื้อ</h2>
                  <div class="product-breadcroumb">
                     <a href="">ติดตาม</a>
                     <a href="">จำนวนสินค้า</a>
                     <a href="">จำนวนผู้เข้าชม</a>
                  </div>
                  <hr/>
                  <div role="tabpanel">
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                           <h2>รายละเอียดผู้ซื้อ</h2>
                           <p>รหัส</p>
                           <p>ชื่อ</p>
                           <p>รหัสบัตรประชาชน</p>
                           <p>วันเกิด</p>
                           <p>อีเมลล์</p>
                           <p>เบอร์โทร</p>
                           <p>ชื่อผู้ใช้</p>
                           <p>รหัสผ่าน</p>
                           <p>วันเกิด</p>
                           <p>รหัส</p>
                           <br/>
                           <h3>ที่อยู่ :</h3>
                           <hr>
                           <p>ตำบล</p>
                           <p>อำเภอ</p>
                           <p>จังหวัด</p>
                           <p>รหัสไปรษณีย์</p>
                           <br/>
                           <h3>ที่อยู่ใบเสร็จ :</h3>
                           <hr>
                           <p>ตำบล</p>
                           <p>อำเภอ</p>
                           <p>จังหวัด</p>
                           <p>รหัสไปรษณีย์</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <br><br>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <style type="text/css">
            .mySlides {display:none}
            .demo {cursor:pointer}
         </style>
         <script> <!-- javascript for images slider gallory -->
            var slideIndex = 1;
            showDivs(slideIndex);
            function plusDivs(n) {
               showDivs(slideIndex += n);
            }
            function currentDiv(n) {
               showDivs(slideIndex = n);
            }
            function showDivs(n) {
               var i;
               var x = document.getElementsByClassName("mySlides");
               var dots = document.getElementsByClassName("demo");
               if (n > x.length) {slideIndex = 1}
               if (n < 1) {slideIndex = x.length}
               for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
               }
               for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
               }
               x[slideIndex-1].style.display = "block";
               dots[slideIndex-1].className += " w3-opacity-off";
            }
         </script>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
      <div class="col-md-4 text-center">
         <a href="tracking.php">
            <img src="<?php echo base_url('dist/icon/016-lace.png');?>" style="height: 200px;padding: 15px;">
            <p>รายการโปรด</p>
         </a>
      </div>
      <div class="col-md-4 text-center">
         <a href="by-detail.html">
            <img src="<?php echo base_url('dist/icon/009-commerce.png');?>" style="height: 200px;padding: 15px;">
            <p>รายการสั่งซื้อ</p>
         </a>
      </div>
      <div class="col-md-4 text-center">
         <a href="by-announce.html">
            <img src="<?php echo base_url('dist/icon/013-list.png');?>" style="height: 200px;padding: 15px;">
            <p>ประกาศซื้อ</p>
         </a>
      </div>
   </div>
   <div class="col-md-2"></div>
</div>
<br/>

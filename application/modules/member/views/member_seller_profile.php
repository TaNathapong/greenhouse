<div class="single-product-area">
   <div class="container">
      <div class="product-content-right">
         <div class="row">
                <?php
                   foreach ($seller_list as $key => $value)		//ดึงข้อมูลจาก DB มาแสดงใน list
                   {
                ?>
            <div class="col-sm-6">
               <div class="product-images">
                  <div class="product-main-img">
                      	                                                             <!--กดรูป เพื่อแก้ไข-->
<!--ดึงรูป-->           <center>
                        <img src="<?php echo base_url('image_gh/'.$value['mem_seller_pic']);?>" class="img-circle" alt="" width="304" height="236">
                        <br/><br/>
                        <p>สวัสดีคุณ : <?php echo $value['mem_seller_username'];?></p>
                      </center>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="product-inner">
                  <h2 class="product-name">ข้อมูลผู้ขาย</h2>
                  <div class="product-breadcroumb">
                     <a href="">ติดตาม</a>
                     <a href="">จำนวนสินค้า</a>
                     <a href="">จำนวนผู้เข้าชม</a>
                  </div>
                  <hr/>
                  <div role="tabpanel">
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="regis_seller">
                           <h2>รายละเอียดผู้ขาย</h2>
                           <p>รหัสผู้ขนส่ง : <?php echo $value['mem_seller_id'];?></p>
                           <p>ชื่อ : <?php echo $value['mem_seller_name'];?></p>
                           <p>เลขบัตรประชาชน : <?php echo $value['mem_seller_idcard'];?></p>
                           <p>อีเมลล์ : <?php echo $value['mem_seller_email'];?></p>
                           <p>ชื่อผู้ใช้งาน : <?php echo $value['mem_seller_username'];?></p>
                           <br/>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <?php
   }
   ?>
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

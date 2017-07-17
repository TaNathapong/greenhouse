<div class="single-product-area">
   <div class="container">
      <div class="product-content-right">
         <div class="row">
                <?php
                   foreach ($shipping_list as $key => $value)		//ดึงข้อมูลจาก DB มาแสดงใน list
                   {
                ?>
            <div class="col-sm-6">
               <div class="product-images">
                  <div class="product-main-img">
                      	                                                             <!--กดรูป เพื่อแก้ไข-->
<!--ดึงรูป-->           <center>
                        <img src="<?php echo base_url('image_gh/'.$value['mem_shipper_bussiness_pic']);?>" class="img-circle" alt="" width="304" height="236">
                        <br/><br/>
                        <p>สวัสดีคุณ : <?php echo $value['mem_shipper_name'];?></p>
                      </center>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="product-inner">
                  <h2 class="product-name">ข้อมูลผู้ขนส่ง</h2>
                  <div class="product-breadcroumb">
                     <a href="">ติดตาม</a>
                     <a href="">จำนวนสินค้า</a>
                     <a href="">จำนวนผู้เข้าชม</a>
                  </div>
                  <hr/>
                  <div role="tabpanel">
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                           <h2>ข้อมูลส่วนตัวผู้ขนส่ง</h2>
                           <p>รหัส : <?php echo $value['mem_shipper_id'];?></p>
                           <p>ชื่อ-สกุล : <?php echo $value['mem_shipper_name'];?></p>
                           <p>รหัสบัตรประชาชน : <?php echo $value['mem_shipper_idcard'];?></p>
                           <p>วันเกิด : <?php echo $value['mem_shipper_birth'];?></p>
                           <p>อีเมลล์ : <?php echo $value['mem_shipper_email'];?>์</p>
                           <p>เบอร์โทร : <?php echo $value['mem_shipper_tel'];?></p>
                           <br/>
                           <h3>ที่อยู่กิจการขนส่ง :</h3>
                           <hr>
                           <p>ชื่อบริษัทขนส่ง : <?php echo $value['mem_shipper_bussiness_name'];?></p>
                           <p>ที่อยู่ : <?php echo $value['mem_shipper_address'];?></p>
                           <p>ตำบล : <?php echo $value['mem_shipper_subdistrict'];?></p>
                           <p>อำเภอ : <?php echo $value['mem_shipper_district'];?></p>
                           <p>จังหวัด : <?php echo $value['mem_shipper_province'];?></p>
                           <p>รหัสไปรษณีย์ : <?php echo $value['mem_shipper_postcode'];?></p>
                           <p>พื้นที่ให้บริการ : <?php echo $value['mem_shipper_area'];?></p>
                           <br/>
                           <h3>ช่องทางการชำระเงิน :</h3>
                           <hr>
                           <p>ธนาคาร : <?php echo $value['mem_shipper_payment'];?></p>
                           <p>ชื่อบัญชีธนาคาร : <?php echo $value['mem_shipper_payment_name'];?></p>
                           <p>เลขบัญชีธนาคาร : <?php echo $value['mem_shipper_payment_id'];?></p>
                           <br/>
                           <h3>ที่อยู่ใบเสร็จ :</h3>
                           <hr>
                           <p>ที่อยู่ : <?php echo $value['mem_shipper_address_bill'];?></p>
                           <p>ตำบล : <?php echo $value['mem_shipper_subdistrict_bill'];?></p>
                           <p>อำเภอ : <?php echo $value['mem_shipper_district_bill'];?></p>
                           <p>จังหวัด : <?php echo $value['mem_shipper_province_bill'];?></p>
                           <p>รหัสไปรษณีย์ : <?php echo $value['mem_shipper_postcode_bill'];?></p>
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

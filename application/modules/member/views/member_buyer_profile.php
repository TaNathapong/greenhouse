<style>
.button {
  display: inline-block;
  padding: 5px 10px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #FFFFFF;
}

.button:hover {
    background-color: #FFFF66;
    color: black;
    font-size: 18px;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<div class="single-product-area">
   <div class="container">
      <div class="product-content-right">
         <div class="row">
                <?php
                   foreach ($buyer_list as $key => $value)		//ดึงข้อมูลจาก DB มาแสดงใน list
                   {
                ?>
            <div class="col-sm-6">
               <div class="product-images">
                  <div class="product-main-img">
                      <a href= "<?php echo site_url('Member/buyer_edit/'.$value['mem_buyer_id']);?>">	<!--กดรูป เพื่อแก้ไข-->                                                             <!--กดรูป เพื่อแก้ไข-->
<!--ดึงรูป-->            <center>
                        <img src="<?php echo base_url('image_gh/'.$value['mem_buyer_pic']);?>" class="img-circle" alt="" width="304" height="236">
                        <br/><br/>
                       </a>
                        <h4>ชื่อผู้ใช้งาน : <?php echo $value['mem_buyer_username'];?></h4>
                       </center>
<!--ปุ่มแก้ไข-->         <a href= "<?php echo site_url('Member/buyer_edit/'.$value['mem_buyer_id']);?>">
                        <center>
                          <button class="button">แก้ไขข้อมูล</button>
                        </center>
                      </a>
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
                        <div role="tabpanel" class="tab-pane fade in active" id="regis_buyer">
                           <h2>รายละเอียดผู้ซื้อ</h2>
                           <p>รหัสผู้ซื้อ : <?php echo $value['mem_buyer_id'];?></p>
                           <p>ชื่อ-สกุล: <?php echo $value['mem_buyer_name'];?></p>
                           <p>เลขที่บัตรประชาชน: <?php echo $value['mem_buyer_idcard'];?></p>
                           <p>อีเมลล์ : <?php echo $value['mem_buyer_email'];?></p>
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

        <div class="container">
                    <div class="product-content-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="<?php echo base_url ('dist/icon/user.png');?>" class="img-circle" alt="Forest" width="304" height="236">
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">ข้อมูลผู้ขาย</h2>
<!--                                     <div class="product-inner-price">
                                        <ins>พื้นที่ให้บริการ</ins>
                                    </div>
                                    <div class="product-breadcroumb">
                                        <a href="">ติดตาม</a>
                                        <a href="">จำนวนสินค้า</a>
                                        <a href="">จำนวนผู้เข้าชม</a>
                                    </div> -->

                                    <div role="tabpanel">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>รายละเอียดผู้ขาย</h2>
                                                <p>ชื่อ นายศุกลวัฒน์  คณารศ</p>
                                                <p>ชื่อเล่น เวียร์</p>
                                                <p> สวนลุงนัย ป่าหว้า</p>
                                                <p> ร้าน/สวน: สวนลุงนัย ป่าหว้า</p>
                                                <p> ที่อยู่: บ้านป่าหว้า โคกม่วง อำเภอภาชี พระนครศรีอยุธยา</p>
                                                <p> โทรศัพท์: 0624796962</p>
                                                <p> มือถือ: 0897888673  ติดต่อ: อัจฉรา ศรีสุข</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br><br>
<!--รายละเอียดฟาร์ม-->
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <style type="text/css">
                            .mySlides {display:none}
                            .demo {cursor:pointer}
                        </style>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">ข้อมูลฟาร์ม</h2>
                                    <div class="product-inner-price">
                                    <!--<ins>พื้นที่ให้บริการ</ins>
                                    </div>
                                    <div class="product-breadcroumb">
                                        <a href="">ติดตาม</a>
                                        <a href="">จำนวนสินค้า</a>
                                        <a href="">จำนวนผู้เข้าชม</a>
                                    </div> -->
                                    <div role="tabpanel">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                        <h2>รายละเอียดฟาร์ม</h2>
                                                        <p> สวนลุงนัย ป่าหว้า</p>
                                                        <p> ร้าน/สวน: สวนลุงนัย ป่าหว้า</p>
                                                        <p> ที่อยู่: บ้านป่าหว้า โคกม่วง อำเภอภาชี พระนครศรีอยุธยา</p>
                                                        <p> โทรศัพท์: 0624796962</p>
                                                        <p> มือถือ: 0897888673  ติดต่อ: อัจฉรา ศรีสุข</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
<!--รูปฟาร์ม-->           
                            <div class="col-sm-6">
                                <div class ="row">
                                    <div class ="col-md-8">
                                        <div class="w3-content" style="max-width:1200px">
                                            <img class="mySlides" src="<?php echo base_url ('dist/images/f1.jpg');?>" style="width:100%">
                                            <img class="mySlides" src="<?php echo base_url ('dist/images/f2.jpg');?>" style="width:100%">
                                            <img class="mySlides" src="<?php echo base_url ('dist/images/f3.jpg');?>"   style="width:100%">

                                            <div class="w3-row-padding w3-section">
                                                <div class="w3-col s4">
                                                    <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url ('dist/images/f1.jpg');?>"  style="width:100%" onclick="currentDiv(1)">
                                                </div>
                                                <div class="w3-col s4">
                                                    <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url ('dist/images/f2.jpg');?>" style="width:100%" onclick="currentDiv(2)">
                                                </div>
                                                <div class="w3-col s4">
                                                    <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url ('dist/images/f3.jpg');?>"  style="width:100%" onclick="currentDiv(3)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
        </div>
    </div>
    <br/>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-md-4 text-center">
                    <a href="selling-announcement.html">
                        <img src="<?php echo base_url ('dist/icon/018-box-1.png');?>"  class="img-thumbnail" style="height: 200px;">
                        <p>ลงประกาศขาย</p>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="history-sell.html">
                        <img src="<?php echo base_url ('dist/icon/009-commerce.png');?>" class="img-thumbnail" style="height: 200px;">
                        <p>ประวัติการขาย</p>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="order-list.html">
                        <img src="<?php echo base_url ('dist/icon/007-money.png');?>" class="img-thumbnail" style="height: 200px;">
                        <p>รายการสินค้า</p>
                    </a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <br/>
<!-- content-->
<div class="container">
    <title>หน้าแรก - greenhouse</title>
    <div class="row" style="padding:10px;">
        <div class="col-md-12">
            <div class="w3-content w3-display-container" style="max-width:100%">
                <img class="mySlides w3-animate-right" src="https://files.slack.com/files-pri/T0FJGE2AE-F663XAN7J/________________________.jpeg" style="height:450px; width:100%">
                <img class="mySlides w3-animate-right" src="https://files.slack.com/files-pri/T0FJGE2AE-F66SFP9CM/_________.jpeg" style="height:450px; width:100%">
                <img class="mySlides w3-animate-right" src="https://files.slack.com/files-pri/T0FJGE2AE-F6675PZTK/________________________.jpeg" style="height:450px; width:100%">
                <img class="mySlides w3-animate-right" src="https://files.slack.com/files-pri/T0FJGE2AE-F66PJ9RC2/______________________________.jpeg" style="height:450px; width:100%">
                <img class="mySlides w3-animate-right" src="https://files.slack.com/files-pri/T0FJGE2AE-F67J47ZKQ/__________________.jpeg" style="height:450px; width:100%">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- slider -->

    <div class="row" style="padding:10px;">
        <div class="col-md-7">
            <iframe width="100%" height="460px" src="https://www.youtube.com/embed/7jaC6L18G44" frameborder="0"  allowfullscreen></iframe>
        </div>
        <div class="col-md-5">
            <div class="area-market w3-opacity w3-hover-opacity-off">
                <a href="<?php echo site_url('shop/shop_page');?>">
                    <div class="second-title">
                        <h2>ตลาด</h2>
                    </div>
                </a>
            </div>
            <div class="area-travel w3-opacity w3-hover-opacity-off">
                <a href="<?php echo site_url('shop/travel_page');?>">
                    <div class="second-title">
                        <h2>ท่องเที่ยว</h2>
                    </div>
                </a>
            </div>
            <div class="area-bit w3-opacity w3-hover-opacity-off" >
                <a href="auction.php">
                    <div class="second-title">
                        <h2>ประมูล</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="padding:10px;">
        <div class="sub-header text-center">
            <h2>Green house - ตลาดซื้อขายสินค้าทางเกษตรที่ดีที่สุด</h2>
        </div>
    </div>

    <div class="row" style="padding:10px;">
        <div class="col-md-4">
            <div class="cat-area-otop w3-opacity w3-hover-opacity-off">
                <a href="<?php echo site_url('shop/shop_page');?>">
                    <div class="first-title">
                        <h2>OTOP</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cat-area-product w3-opacity w3-hover-opacity-off">
                <a href="<?php echo site_url('shop/shop_page');?>">
                    <div class="first-title">
                        <h2>แปรรูป</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cat-area-food w3-opacity w3-hover-opacity-off">
                <a href="<?php echo site_url('shop/shop_page');?>">
                    <div class="first-title">
                        <h2>อาหาร</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- gallery -->
    <div class="row" style="padding:10px;">
        <div class="col-xs-2"></div>
        <div class="col-md-12 col-xs-8">
            <div class="latest-product">
                <div class="sub-header text-center">
                    <h2>สินค้ามาใหม่</h2>
                </div>
                <div class="product-carousel">
                    <?php
                    foreach ($product_list as $key => $value)
                    {
                        ?>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="<?php echo $value['product_pic'];?>" alt="">
                                <div class="product-hover">
                                    <a href="cart.html" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                    <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                </div>
                            </div>

                            <h2><a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>"><?php echo $value['product_name'];?></a></h2>
                            <div class="promo-price">
                                <ins><?php echo $value['product_price'];?> บาท</ins>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End gallery -->

</div>
<!-- End container-->

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
}
</script>

<title>ตลาด - GreenHouse</title>

<div class="promo-area">
    <div class="container">
        <div class="row">
            <div class="search-content text-center">
                <br/>
                <h3>ค้นหาสินค้าที่ต้องการ</h3>
                <br/>
                <form>
                    <input type="text" name="search" placeholder="ค้นหา..">
                </form>
                <br/>
                <a href="selling-announcement.html" class="readmore">ลงประกาศ</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-md-12 col-xs-8">
                <div class="latest-product">
                    <center><h2>สินค้าแนะนำ</h2></center>
                    <div class="product-carousel">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../../<?php echo $value['product_pic'];?>" alt="">
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
        <hr/>
    </div>
</div> <!-- End promo area -->

<div class="promo-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-md-12 col-xs-8">
                <div class="latest-product">
                    <center><h2>สินค้ามาใหม่</h2></center>
                    <div class="product-carousel">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../../<?php echo $value['product_pic'];?>" alt="">
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
        <hr/>
    </div>
</div> <!-- End promo area -->

<div class="promo-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-md-12 col-xs-8">
                <div class="latest-product">
                    <center><h2>สินค้าประมูล</h2></center>
                    <div class="product-carousel">
                        <?php
                        for($i=1;$i<=2;$i++)
                        {
                            foreach ($product_list as $key => $value)
                            {
                                ?>
                                <div class="single-product" style="padding:10px;">
                                    <div class="product-f-image">
                                        <img src="../../<?php echo $value['product_pic'];?>" alt="">
                                        <div class="product-hover">
                                            <a href="auction-detail.html" class="add-to-cart-link"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;ประมูลเลย</a>
                                        </div>
                                    </div>

                                    <h2><a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>"><?php echo $value['product_name'];?></a></h2>

                                    <div class="promo-price">
                                        <div id="countbox1"></div>
                                        <ins>ราคาประมูล ณ ปัจจุบัน :</ins></br>
                                        <ins><?php echo $value['product_price'];?> บาท</ins>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="shop-area">
    <div class="container">
        <center><h2>สินค้า</h2></center>

        <div class="row">

            <ul class="nav nav-tabs" id="tabContent">
                <li class="active"><a href="#all" data-toggle="tab">ทั้งหมด</a></li>
                <li><a href="#vegetable" data-toggle="tab">ผัก</a></li>
                <li><a href="#fruit" data-toggle="tab">ผลไม้</a></li>
                <li><a href="#products" data-toggle="tab">แปรรูป</a></li>
                <li><a href="#otop" data-toggle="tab">OTOP</a></li>
                <li><a href="#premium" data-toggle="tab">Premium</a></li>
                <li><a href="#equipment" data-toggle="tab">อุปกรณ์ทางการเกษตร</a></li>
            </ul>
            <div class="row">
                <div class="tab-content">
                    <div class="tab-pane active" style="padding: 15px" id="all">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            ?>
                            <div class="col-md-2 col-xs-6 ">
                                <div class="single-shop-product">
                                    <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                        <div class="product-upper">
                                            <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                        </div>
                                    </a>

                                    <h2><?php echo $value['product_name'];?></h2>
                                    <div class="shop-price">
                                        <ins><?php echo $value['product_price'];?> บาท</ins>
                                    </div>

                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="vegetable">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '1')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="otop">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '0')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="fruit">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '2')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="products">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '5')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="premium">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '4')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane" style="padding: 15px" id="equipment">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            if ($value['product_type'] == '3')
                            {
                                ?>
                                <div class="col-md-2 col-xs-6 ">
                                    <div class="single-shop-product">
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>">
                                            <div class="product-upper">
                                                <img src="../../<?php echo $value['product_pic'];?>" class="img-thumbnail" alt="">
                                            </div>
                                        </a>

                                        <h2><?php echo $value['product_name'];?></h2>
                                        <div class="shop-price">
                                            <ins><?php echo $value['product_price'];?> บาท</ins>
                                        </div>

                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product-sku="" data-product-id="70" rel="nofollow" href="cart.html">ใส่ลงตะกร้า</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" >
    <div class="product-content-right" style="margin-top: 25px; margin-bottom: 25px">
        <?php foreach ($product_details as $key => $value)
        {
            ?>
            <title><?php echo $value['product_name'];?> - GreenHouse</title>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h1 class="text-left"><?php echo $value['product_name'];?></h1>
                    <div class="row">
                        <img src="../../../<?php echo $value['product_pic'];?>" style="padding: 10px; width:50%">
                    </div>
                    <div class="row" style="margin-bottom: 15px">
                        <a href="follow-product.html" class="btn btn-info btn-s"><i class="fa fa-heart"></i>&nbsp;ติดตามสินค้า</a>
                        <a href="promote.html" class="btn btn-info btn-s">โปรโมต</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="product-inner">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="../../../dist/img/facebook.png">
                                <a href="https://www.facebook.com/">
                                    <strong> Facebook</strong>
                                </a>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-2 col-xs-2">
                                <h4>ราคา :</h4>
                            </div>
                            <div class="col-sm-10 col-xs-10">
                                <h4><?php echo $value['product_price'];?> บาท / <?php echo $value['product_unit'];?></h4>
                            </div>
                        </div>

                        <!-- start google map -->
                        <div class="row">
                            <div class="col-sm-4">
                                <h4><i class="fa fa-map-marker" aria-hidden="true"></i> แผนที่</h4>
                            </div>

                            <div class="text-center" style="padding: 15px">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2648.833038448318!2d-89.2826271!3d48.402149400000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d59202c99c9252f%3A0x4cb61e2f5a8d87e!2s218+Humber+Crescent%2C+Thunder+Bay%2C+ON+P7C+5X2!5e0!3m2!1sen!2sca!4v1424370904204"
                                width="90%" height="300" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                        <!-- end google map -->

                        <div class="rating-block">
                            <h4>Rating</h4>
                            <h3 class="bold padding-bottom-7"><?php echo $value['product_rate'];?> <small>/ 5</small></h3>
                            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <i class="fa fa-star" aria-hidden="true"></i></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <i class="fa fa-star" aria-hidden="true"></i></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                <i class="fa fa-star" aria-hidden="true"></i></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                <i class="fa fa-star" aria-hidden="true"></i></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                <i class="fa fa-star" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="row" style="padding: 10px">
                        <div class="form-group">
                            <br/>
                            <h4 for="comment">แสดงความคิดเห็น</h4>
                            <textarea class="form-control" rows="5" id="detail"></textarea>
                        </div>
                        <div class="text-right"><a href="#" class="btn btn-info">ส่ง</a></div>

                        <h4 class="page-header">ความคิดเห็น</h4>
                        <section class="comment-list">
                            <!-- First Comment -->
                            <article class="row">
                                <div class="col-md-2 col-sm-2 hidden-xs">
                                    <img class="img-responsive" src="../../../dist/img/GirlAvatar.png"/>
                                    <figcaption class="text-center">ราศี มานี</figcaption>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="panel panel-default arrow left">
                                        <div class="panel-body">
                                            <header class="text-left">
                                                <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> June 16, 2017</time>
                                            </header>
                                            <div class="comment-post" style="padding: 10px">
                                                <p>
                                                    มันน่ากินมากกกกกกกกกก
                                                </p>
                                            </div>
                                            <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> ตอบกลับ</a></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Second Comment Reply -->
                            <article class="row">
                                <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                    <img class="img-responsive" src="../../../dist/img/avatar.png" />
                                    <figcaption class="text-center">สมมา วารี</figcaption>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="panel panel-default arrow left">
                                        <div class="panel-heading right"> ตอบกลับ</div>
                                        <div class="panel-body">
                                            <header class="text-left">
                                                <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> June 16, 2017</time>
                                            </header>
                                            <div class="comment-post" style="padding: 10px">
                                                <p>
                                                    ซื้อเลย ตัวเอง >//<
                                                </p>
                                            </div>
                                            <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> ตอบกลับ</a></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

        <!-- Promo area -->
        <div class="row">
            <!-- <div class="col-xs-2"></div> -->
            <div class="col-md-12 col-xs-12">
                <div class="latest-product">
                    <h4>สินค้าที่เกี่ยวข้อง</h4>
                    <div class="product-carousel">
                        <?php
                        foreach ($product_list as $key => $value)
                        {
                            ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../../../<?php echo $value['product_pic'];?>" alt="">
                                    <div class="product-hover">
                                        <a href="cart.html" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2>
                                    <a href="<?php echo site_url('shop/product_details_page/'.$value['product_id']);?>"><?php echo $value['product_name'];?></a>
                                </h2>
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
        <!-- End promo area -->
    </div>
</div>

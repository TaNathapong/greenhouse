<div class="container" style="padding: 25px;">
    <h3>การท่องเที่ยวที่แนะนำ</h3>
    <div class="row row-margin-bottom">
        <?php
        foreach ($travel_list as $key => $value)
        {
            ?>
            <div class="col-md-6 no-padding lib-item" style="padding: 20px" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="seller-profile.html">
                                <img class="lib-img-show" src="<?php echo $value['travel_pic'];?>" style="width:450px; height:200px;">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <?php echo $value['travel_name'];?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <?php echo $value['travel_detail'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <hr/>

    <h3>การท่องเที่ยวอื่นๆ</h3>
    <div class="row form-group product-chooser" style="padding: 15px">
        <?php
        for($i=1;$i<=2;$i++)
        {
            foreach ($travel_list as $key => $value)
            {
                ?>
                <div class="col-xs-3" style="margin-bottom: 10px">
                    <div class="product-chooser-item selected">
                        <a href="seller-profile.html">
                            <img src="<?php echo $value['travel_pic'];?>" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop" style="width:300px; height:130px;">
                        </a>
                        <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" id="oh">
                            <span class="description">
                                สถานที่ในความทรงจำเมื่อครั้งเรียนมหาวิทยาลัยที่เคยไปมาแล้วเมื่อเนิ่นนาน  การเดินทางไปพะโต๊ะครั้งนั้นไม่ได้เป็นการไปเที่ยว
                                <a href="seller-profile.html" data-toggle="collapse" data-target="#demo">อ่านเพิ่มเติม</a>
                                <div id="demo" class="collapse">
                                    ความเขียวขจีของป่าไม้และขุนเขาและความสมบูรณ์ของต้นน้ำลำธาร  ยังคงเป็นความประทับใจอยู่ในความทรงจำที่ไม่เคยจางหายไป
                                </div>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
</div>
